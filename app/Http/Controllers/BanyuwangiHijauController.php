<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanyuwangiHijauController extends Controller
{
    public function index()
    {
        // $instagramRefreshFeedsAction = new \App\Action\InstagramRefreshFeedsAction;
        dd(\App\Models\Instagram::all());
        $categories = \App\Models\Kategori::select(['nama', 'id'])->get();
        return view("bwh.index", compact('categories'));
    }
}
