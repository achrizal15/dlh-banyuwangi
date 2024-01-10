<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galery = Galery::all();
        return view('admin.galery.index',compact('galery'));
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

        return view('admin.galery.form',compact('admin','page','action'));
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
            "judul" => "required |unique:galeries",
            "deskripsi" => "required",
            "link" => "required",
            "gambar" => "required",
        ]);
        $validate["created_by"]=auth()->user()->name;
        $validate["gambar"]=$request->file('gambar')->store("galeries");
        Galery::create($validate);
        return redirect()->route("galerys.index")->with("message", "Data has been added.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        $admin=request()->segment(1);
        $page=request()->segment(2);
        $action=request()->segment(3);
        return view('admin.galery.form', compact('galery','admin','page','action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galery $galery)
    {
        $rules = [
            "judul" => "required",
            "deskripsi" => "required",
            "link" => "required",
            // "gambar" => "required",
        ];
        if($request->judul!=$galery->judul){
            $rules['judul'].="|unique:galeries";
        }
        $validate=$request->validate($rules);
        if($request->hasFile("gambar")){
            $validate["gambar"]= $request->file('gambar')->store("galeries");
        }
        $galery->update($validate);
        return redirect()->route("galerys.index")->with("message", "Data has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        $galery->delete();
        return redirect()->route("galerys.index")->with("message", "Data has been deleted.");
    }
}
