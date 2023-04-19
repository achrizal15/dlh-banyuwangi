<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\GlobalValue;

class TentangKamiController extends Controller
{
    use GlobalValue;
    //
    public function __construct()
    {
        $this->data =  $this->setGlobatValue();
    }
    public function index()
    {
        return view('tentang-kami',$this->data);
    }
}
