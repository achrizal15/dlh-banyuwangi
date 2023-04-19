<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agenda = Agenda::all();
        return view('admin.agenda.index',compact('agenda'));
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
        return view('admin.agenda.form',compact('admin','page','action'));
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
            "judul" => "required|unique:agendas",
            "tanggal_mulai" => "required",
            "tanggal_selesai" => "required",
            "deskripsi" => "required",
        ]);
        Agenda::create($validate);
        return redirect()->route("agendas.index")->with("message", "Data has been added.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        $admin=request()->segment(1);
        $page=request()->segment(2);
        $action=request()->segment(3);
        return view('admin.agenda.form', compact('agenda','admin','page','action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        $rules = [
            "judul" => "required",
            "tanggal_mulai" => "required",
            "tanggal_selesai" => "required",
            "deskripsi" => "required",
        ];
        $validate=$request->validate($rules);
        $agenda->update($validate);
        return redirect()->route("agendas.index")->with("message", "Data has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        $agenda->delete();
        return redirect()->route("agendas.index")->with("message", "Data has been deleted.");
    }
}
