<?php

namespace App\Helpers;

use App\Models\StaticPage;
use Illuminate\Support\Facades\DB;

class StaticContent
{
    /** 
     * $type adalah type
     * $variable variable adalah variable 
     */
    public static function getContent($type, $variable, $content = "default content")
    {
        $result = StaticPage::firstOrCreate(['type' => $type, 'variabel' => $variable], ['konten' => $content]);
        return $result->konten;
    }
    public static function setContent($data = [['type' => 'home', 'variabel' => 'var']])
    {
        try {
            DB::beginTransaction();
            foreach ($data as $value) {
                StaticPage::updateOrCreate(
                    [
                        'type' => $value['type'],
                        'variabel' => $value['variabel']
                    ],
                    ['konten' => $value['konten']]
                );
            }
            DB::commit();
            return true;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
