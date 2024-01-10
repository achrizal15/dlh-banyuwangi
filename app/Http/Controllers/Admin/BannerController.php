<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class Bannercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::all();
        return view('admin.banner.index',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin=request()->segment(1);
        $page=request()->segment(2);
        $action=request()->segment(3);

        return view('admin.banner.form', compact('admin','page','action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "nama" => "required",
            "gambar" => "required",
        ]);
        $validate["link"]=$request["link"];
        $validate["gambar"]=$request->file('gambar')->store("banners");
        Banner::create($validate);
        return redirect()->route("banners.index")->with("message", "Data has been added.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        $admin=request()->segment(1);
        $page=request()->segment(2);
        $action=request()->segment(3);

        return view('admin.banner.form', compact('banner','admin','page','action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $rules = [
            "nama" => "required",
        ];
       
        $validate=$request->validate($rules);
        $validate["link"]=$request["link"];
        if($request->hasFile("gambar")){
            $validate["gambar"]= $request->file('gambar')->store("banners");
        }
        $banner->update($validate);
        return redirect()->route("banners.index")->with("message", "Data has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route("banners.index")->with("message", "Data has been deleted.");
    }
}