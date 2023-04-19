<?php

namespace App\Http\Controllers;

use App\Models\CeritaSukses;
use App\Http\Traits\GlobalValue;

class BwhController extends Controller
{
    use GlobalValue;
    //
    public function __construct()
    {
        $this->data =  $this->setGlobatValue();
        $this->data['footer'] = "bwh";
    }
    public function index()
    {
        $this->data['cerita_success'] = CeritaSukses::get();
        return view('bwh', $this->data);
    }
    public function operationalPersampahan()
    {
        return view('divisi.operasional', $this->data);
    }
    public function inovasiPendanaan()
    {
        return view('divisi.inovasi-pendanaan', $this->data);
    }
    public function tataKelola()
    {
        return view('divisi.tata-kelola-dan-kelembagaan', $this->data);
    }
    public function komunikasiPerubahanPerilaku()
    {
        return view('divisi.komunikasi-perubahan-perilaku', $this->data);
    }
    public function ceritaSukses(CeritaSukses $ceritaSukses)
    {
        $this->data['title'] = $ceritaSukses->judul;
        $this->data['ceritaSukses'] = $ceritaSukses;
        return view("cerita-sukses", $this->data);
    }
    
}
