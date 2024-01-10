<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Traits\GlobalValue;

class InformasiRegulasi extends Controller
{
    use GlobalValue;
    //
    public function __construct()
    {
        $this->data =  $this->setGlobatValue();
    }
    public function index(Request $request)
    {
        $this->data['documents'] = Dokumen::filter($request)->paginate(5)->withQueryString();
        $this->data['categories'] = Kategori::all();
        $this->data['description']=Kategori::select("keterangan")->find($request->kategori);
        return view('informasi-regulasi.index', $this->data);
    }
    public function show(Dokumen $dokumen)
    {
        $this->data['document'] = $dokumen->load("kategori");
        return view('informasi-regulasi.show', $this->data);
    }
}
