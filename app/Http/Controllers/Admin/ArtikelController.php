<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('admin.artikel.index',compact('artikel'));
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

        return view('admin.artikel.form', compact('admin','page','action'));
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
            "judul" => "required |unique:artikels",
            "deskripsi" => "required",
            "link" => "required",
            "gambar" => "required",
        ]);
        $validate["created_by"]=auth()->user()->name;
        $validate["gambar"]=$request->file('gambar')->store("articles");
        Artikel::create($validate);
        return redirect()->route("articles.index")->with("message", "Data has been added.");
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $article)
    {
        $admin=request()->segment(1);
        $page=request()->segment(2);
        $action=request()->segment(3);

        return view('admin.artikel.form', compact('article','admin','page','action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $article)
    {
        $rules = [
            "judul" => "required",
            "deskripsi" => "required",
            "link" => "required",
        ];
        if($request->judul!=$article->judul){
            $rules['judul'].="|unique:artikels";
        }
        $validate=$request->validate($rules);
        if($request->hasFile("gambar")){
            $validate["gambar"]= $request->file('gambar')->store("articles");
        }
        $article->update($validate);
        return redirect()->route("articles.index")->with("message", "Data has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $article)
    {
        
        $article->delete();
        return redirect()->route("articles.index")->with("message", "Data has been deleted.");
    }
}
