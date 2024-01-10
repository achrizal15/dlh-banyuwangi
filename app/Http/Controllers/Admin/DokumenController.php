<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokumen = Dokumen::latest()->get();
        return view('admin.dokumen.index',compact('dokumen'));
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
       
        $kategori = Kategori::get()->sortBy([
            fn ($a, $b) => intval($a["nama"]) <=> intval($b["nama"]),
            fn ($a, $b) => $a["id"] <=> $b["id"],
        ]);
        return view('admin.dokumen.form',compact('kategori','admin','page','action'));
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
            "nama" => "required |unique:dokumens",
            "kategori_id" => "required",
        ]);
        $validate['link']=str()->slug($request->nama);
        $validate["file"]=$request->file('file')->store("documents");
        $validate['keterangan']=$request->keterangan;
        Dokumen::create($validate);
        return redirect()->route("documents.index")->with("message", "Data has been added.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function show(Dokumen $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokumen $document)
    {
              
        $admin=request()->segment(1);
        $page=request()->segment(2);
        $action=request()->segment(3);
       
        $kategori = Kategori::get()->sortBy([
            fn ($a, $b) => intval($a["nama"]) <=> intval($b["nama"]),
            fn ($a, $b) => $a["id"] <=> $b["id"],
        ]);

        return view('admin.dokumen.form', compact('document','kategori','admin','page','action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokumen $document)
    {
        $rules = [
            "nama" => "required",
            "kategori_id" => "required",
        ];
        if($request->nama!=$document->nama){
            $rules['nama'].="|unique:dokumens";
        }
        $validate=$request->validate($rules);
        if($request->hasFile("file")){
            $validate["file"]= $request->file('file')->store("documents");
        }
        $validate['keterangan']=$request->keterangan;
        $document->update($validate);
        return redirect()->route("documents.index")->with("message", "Data has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokumen $document)
    {
        $document->delete();
        return redirect()->route("documents.index")->with("message", "Data has been deleted.");
    }
}
