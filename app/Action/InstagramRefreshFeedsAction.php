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
         private function fetchData()
         {
                  $response = Http::get($this->url, [
                           'limit' => '55',
                           'fields' => 'caption,media_url,id,media_type,permalink,username,timestamp',
                           'access_token' => $this->latestToken()
                  ]);
                  $body = collect(json_decode($response->body())->data);
                  return $body->map(function ($data) {
                           return [
                                    'caption' => isset($data->caption) ? $data->caption : '',
                                    'username' => isset($data->username) ? $data->username : '',
                                    'permalink' => isset($data->permalink) ? $data->permalink : 'notfound',
                                    'media_id' => isset($data->id) ? $data->id : 'id',
                                    'media_url' => isset($data->media_url) ? $data->media_url : 'null',
                                    'media_type' => isset($data->media_type) ? $data->media_type : 'IMAGE',
                                    'post_at' => Carbon::parse($data->timestamp)
                           ];
                  })->toArray();
         }
         public function generate()
         {
                  try {
                           DB::beginTransaction();
                           $data = $this->fetchData();
                           if (count($data) > 0) {
                                    Instagram::where('media_id', '!=', 'refresh')->delete();
                           }
                           $instagram = Instagram::insert($data);
                           DB::commit();
                           return $instagram;
                  } catch (\Throwable $th) {
                           return throw new \Exception($th->getMessage(), 1);

                  }

         }
}