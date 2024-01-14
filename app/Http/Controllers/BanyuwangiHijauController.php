<?php

namespace App\Http\Controllers;

use App\Action\DefaultDataBanyuwangiHijau;
use Illuminate\Http\Request;

class BanyuwangiHijauController extends Controller
{
    public function index(DefaultDataBanyuwangiHijau $defaultDataBanyuwangiHijau)
    {
        $feeds = \App\Models\Instagram::orderBy('post_at', 'DESC')
            ->limit(6)
            ->get();
        $static_attributes = $defaultDataBanyuwangiHijau->index();
        $feeds = \App\Models\Instagram::latest()->limit(6)->get();
        $categories = \App\Models\Kategori::select(['nama', 'id'])->get();
        return view("bwh.index", array_merge(['feeds' => $feeds, 'categories' => $categories], $static_attributes));
    }
}
