<?php
namespace App\Action;

use App\Models\InstagramApi;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;


class InstagramRefreshTokenAction
{
         private $url = "https://graph.instagram.com/refresh_access_token";
         private function latestToken()
         {
                  $instragramApi = InstagramApi::latest()->firstOrFail();
                  return $instragramApi->access_token;
         }
         private function fetchData()
         {
                  $response = Http::get($this->url, [
                           'grant_type' => 'ig_refresh_token',
                           'access_token' => $this->latestToken()
                  ]);
                  $body = json_decode($response->body());
                  return [
                           'access_token' => $body->access_token,
                           'token_type' => $body->token_type,
                           'expired_at' => Carbon::now()->addSeconds($body->expires_in)
                  ];
         }
         public function generate()
         {
                  try {
                           $instagramApi = InstagramApi::create($this->fetchData());
                           return $instagramApi;
                  } catch (\Throwable $th) {
                           return false;
                  }

         }
}