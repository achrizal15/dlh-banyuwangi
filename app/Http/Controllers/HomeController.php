<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Banner;
use App\Http\Traits\GlobalValue;
use App\Models\Agenda;
use App\Models\Galery;
use App\Models\MitraDLH;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    use GlobalValue;
    //
    public function __construct()
    {
        $this->data =  $this->setGlobatValue();
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $agenda = Agenda::whereYear('tanggal_mulai', $request->year)
                ->whereMonth('tanggal_mulai', $request->month)
                ->get();
            $data = [];
            foreach ($agenda as $value) {
                $dateStart = CarbonPeriod::create($value->tanggal_mulai, $value->tanggal_selesai);
                foreach ($dateStart as $item) {
                    array_push($data, [
                        "id" => Str::slug($value->judul),
                        'date' => $item->format("Y-m-d"),
                        'tanggal' => $item->format("j F Y"),
                        'tanggal_selesai' => $value->tanggal_selesai->format('j F Y'),
                        "classname" => "bg-primary text-white",
                        "title" => $value->judul,
                        "description" => $value->deskripsi,
                    ]);
                }
                continue;
            }

            return response()->json($data);
        }
        $this->data['banners'] = Banner::get();
        $this->data['galery'] = Galery::get();
        $this->data['mitra'] = MitraDLH::get();
        $this->data['articles'] = Artikel::latest()->limit(6)->get();

        return view("index", $this->data);
    }
}
