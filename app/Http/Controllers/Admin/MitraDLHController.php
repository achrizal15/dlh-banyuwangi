<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MitraDLH;
use Illuminate\Http\Request;

class MitraDLHController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitraDLH = MitraDLH::all();
        return view('admin.mitraDLH.index',compact('mitraDLH'));
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

        return view('admin.mitraDLH.form',compact('admin','page','action'));
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
            "name" => "required |unique:mitra_d_l_h_s",
            "link"=>"required"
        ]);
        $validate['link']=$request->link;
        $validate["gambar"]=$request->file('gambar')->store("mitraDLHs");
        MitraDLH::create($validate);
        return redirect()->route("mitraDLHs.index")->with("message", "Data has been added.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MitraDLH  $mitraDLH
     * @return \Illuminate\Http\Response
     */
    public function show(MitraDLH $mitraDLH)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MitraDLH  $mitraDLH
     * @return \Illuminate\Http\Response
     */
    public function edit(MitraDLH $mitraDLH)
    {
        $admin=request()->segment(1);
        $page=request()->segment(2);
        $action=request()->segment(3);
        return view('admin.mitraDLH.form', compact('mitraDLH','admin','page','action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MitraDLH  $mitraDLH
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MitraDLH $mitraDLH)
    {
        $rules = [
            "name" => "required",
            "link"=>"required"
        ];
        if($request->name!=$mitraDLH->name){
            $rules['name'].="|unique:mitra_d_l_h_s";
        }
        $validate=$request->validate($rules);
        if($request->hasFile("gambar")){
            $validate["gambar"]= $request->file('gambar')->store("mitraDLHs");
        }
        $mitraDLH->update($validate);
        return redirect()->route("mitraDLHs.index")->with("message", "Data has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MitraDLH  $mitraDLH
     * @return \Illuminate\Http\Response
     */
    public function destroy(MitraDLH $mitraDLH)
    {
        $mitraDLH->delete();
        return redirect()->route("m.index")->with("message", "Data has been deleted.");
    }
}
