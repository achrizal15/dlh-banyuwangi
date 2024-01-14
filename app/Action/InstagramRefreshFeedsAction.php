<?php
namespace App\Action;

use Carbon\Carbon;
use App\Models\Instagram;
use App\Models\InstagramApi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class InstagramRefreshFeedsAction
{
         private $url = "https://graph.instagram.com/me/media";
         private function latestToken()
         {
                  $instragramApi = InstagramApi::latest()->firstOrFail();
                  return $instragramApi->access_token;
         }
         public function fetchData()
         {
                  $response = Http::get($this->url, [
                           'fields' => 'caption,media_url,id,media_type',
                           'access_token' => $this->latestToken()
                  ]);
                  $body = collect(json_decode($response->body())->data);
                  return $body->map(function ($data) {
                           return [
                                    'caption' => isset($data->caption) ? $data->caption : '',
                                    'media_id' => isset($data->id) ? $data->id : 'id',
                                    'media_url' => isset($data->media_url) ? $data->media_url : 'null',
                                    'media_type' => isset($data->media_type) ? $data->media_type : 'IMAGE',
                           ];
                  })->toArray();
         }
         public function generate()
         {
                  try {
                           DB::beginTransaction();
                           Instagram::where('media_id', '!=', 'refresh')->delete();
                           $instagram = Instagram::insert($this->fetchData());
                           DB::commit();
                           return $instagram;
                  } catch (\Throwable $th) {
                           return false;
                  }

         }
}