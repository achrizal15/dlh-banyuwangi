<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Http\Traits\GlobalValue;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    use GlobalValue;
    //
    public function __construct()
    {
        $this->data =  $this->setGlobatValue();
    }
    public function index(Request $request){
        $this->data['artikels']=Artikel::filter($request)->paginate(9)->withQueryString();
        return view('artikel.index',$this->data);
    }
    public function show(Artikel $artikel)
    {
        $this->data['artikel'] = $artikel;
        return view('artikel.show', $this->data);
    }
}
