<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CeritaSukses;
use Illuminate\Http\Request;

class CeritaSuksescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cerita_suksess = CeritaSukses::all();
        return view('admin.ceritaSukses.index',compact('cerita_suksess'));
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

        return view('admin.ceritaSukses.form', compact('admin','page','action'));
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
            "judul" => "required |unique:cerita_sukses",
            "deskripsi" => "required",
            "link" => "required",
            "gambar" => "required",
        ]);
        $validate["created_by"]=auth()->user()->name;
        $validate["gambar"]=$request->file('gambar')->store("cerita_sukses");
        CeritaSukses::create($validate);
        return redirect()->route("cerita-suksess.index")->with("message", "Data has been added.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CeritaSukses  $ceritaSukses
     * @return \Illuminate\Http\Response
     */
    public function show(CeritaSukses $cerita_suksess)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CeritaSukses  $ceritaSukses
     * @return \Illuminate\Http\Response
     */
    public function edit(CeritaSukses $cerita_suksess)
    {
        $admin=request()->segment(1);
        $page=request()->segment(2);
        $action=request()->segment(3);

        return view('admin.ceritaSukses.form', compact('cerita_suksess','admin','page','action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CeritaSukses  $ceritaSukses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CeritaSukses $cerita_suksess)
    {
        $rules = [
            "judul" => "required",
            "deskripsi" => "required",
            "link" => "required",
        ];
        if($request->judul!=$cerita_suksess->judul){
            $rules['judul'].="|unique:cerita_sukses";
        }
        $validate=$request->validate($rules);
        if($request->hasFile("gambar")){
            $validate["gambar"]= $request->file('gambar')->store("cerita_sukses");
        }
        $cerita_suksess->update($validate);
        return redirect()->route("cerita-suksess.index")->with("message", "Data has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CeritaSukses  $ceritaSukses
     * @return \Illuminate\Http\Response
     */
    public function destroy(CeritaSukses $cerita_suksess)
    {
        $cerita_suksess->delete();
        return redirect()->route("cerita-suksess.index")->with("message", "Data has been deleted.");
    }
}
