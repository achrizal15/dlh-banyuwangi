<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\StaticContent;
use App\Http\Controllers\Controller;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{


    public function editHomePage()
    {
        $static_page = StaticPage::where('type', 'home_page')->get();
        $admin = request()->segment(1);
        $page = request()->segment(2);
        $action = request()->segment(3);
        return view('admin.staticPage.form_home_page', compact('admin', 'page', 'action'));
    }


    public function updateHomePage(Request $request)
    {
        $req = collect($request->except('_method', "_token"));

        $data = $req->map(function ($e, $k) use ($request) {
            $content = $e;
            if (in_array($k, array_keys($request->file()))) {
                $content = "storage/" . $request->file($k)->store("static-pages");
            }
            return ['type' => 'home', 'variabel' => $k, 'konten' => $content];
        })->filter(function($e){
            return $e['konten']!=null;
        });        
        StaticContent::setContent($data);
        return redirect()->route("home-page.edit")->with("message", "Data has been updated.");
    }


    public function editBanyuwangiHijau()
    {
        $static_page = StaticPage::where('type', 'home_page')->get();
        $admin = request()->segment(1);
        $page = request()->segment(2);
        $action = request()->segment(3);
        return view('admin.staticPage.form_banyuwangi_hijau', compact('admin', 'page', 'action'));
    }


    public function updateBanyuwangiHijau(Request $request, StaticPage $staticPage)
    {
        $req = collect($request->except('_method', "_token"));

        $data = $req->map(function ($e, $k) use ($request) {
            $content = $e;
            if (in_array($k, array_keys($request->file()))) {
                $content = "storage/" . $request->file($k)->store("static-pages");
            }
            return ['type' => 'banyuwangi-hijau', 'variabel' => $k, 'konten' => $content];
        })->filter(function($e){
            return $e['konten']!=null;
        });        
        StaticContent::setContent($data);
        return redirect()->route("banyuwangi-hijau.edit")->with("message", "Data has been updated.");
    }



    public function editTentangKami()
    {
        $static_page = StaticPage::where('type', 'home_page')->get();
        $admin = request()->segment(1);
        $page = request()->segment(2);
        $action = request()->segment(3);
        return view('admin.staticPage.form_tentang_kami', compact('admin', 'page', 'action'));
    }


    public function updateTentangKami(Request $request, StaticPage $staticPage)
    {
        $req = collect($request->except('_method', "_token"));

        $data = $req->map(function ($e, $k) use ($request) {
            $content = $e;
            if (in_array($k, array_keys($request->file()))) {
                $content = "storage/" . $request->file($k)->store("static-pages");
            }
            return ['type' => 'tentang-kami', 'variabel' => $k, 'konten' => $content];
        })->filter(function($e){
            return $e['konten']!=null;
        });        
        StaticContent::setContent($data);
        return redirect()->route("tentang-kami.edit")->with("message", "Data has been updated.");
    }

    // DIVISI

    public function editOperasionalPersampahan()
    {
        $static_page = StaticPage::where('type', 'home_page')->get();
        $admin = request()->segment(1);
        $page = request()->segment(2);
        $action = request()->segment(3);
        return view('admin.staticPage.divisi.form-operasional-persampahan', compact('admin', 'page', 'action'));
    }


    public function updateOperasionalPersampahan(Request $request, StaticPage $staticPage)
    {
        $req = collect($request->except('_method', "_token"));

        $data = $req->map(function ($e, $k) use ($request) {
            $content = $e;
            if (in_array($k, array_keys($request->file()))) {
                $content = "storage/" . $request->file($k)->store("static-pages");
            }
            return ['type' => 'operasional-persampahan', 'variabel' => $k, 'konten' => $content];
        })->filter(function($e){
            return $e['konten']!=null;
        });        
        StaticContent::setContent($data);
        return redirect()->route("operasional-persampahan.edit")->with("message", "Data has been updated.");
    }


    public function editKomunikasiPerubahanPerilaku()
    {
        $static_page = StaticPage::where('type', 'home_page')->get();
        $admin = request()->segment(1);
        $page = request()->segment(2);
        $action = request()->segment(3);
        return view('admin.staticPage.divisi.form-komunikasi-perubahan-perilaku', compact('admin', 'page', 'action'));
    }


    public function updateKomunikasiPerubahanPerilaku(Request $request, StaticPage $staticPage)
    {
        $req = collect($request->except('_method', "_token"));

        $data = $req->map(function ($e, $k) use ($request) {
            $content = $e;
            if (in_array($k, array_keys($request->file()))) {
                $content = "storage/" . $request->file($k)->store("static-pages");
            }
            return ['type' => 'komunikasi-perubahan-perilaku', 'variabel' => $k, 'konten' => $content];
        })->filter(function($e){
            return $e['konten']!=null;
        });        
        StaticContent::setContent($data);
        return redirect()->route("komunikasi-perubahan-perilaku.edit")->with("message", "Data has been updated.");
    }


    public function editTataKelolaDanKelembagaan()
    {
        $static_page = StaticPage::where('type', 'home_page')->get();
        $admin = request()->segment(1);
        $page = request()->segment(2);
        $action = request()->segment(3);
        return view('admin.staticPage.divisi.form-tata-kelola-dan-kelembagaan', compact('admin', 'page', 'action'));
    }


    public function updateTataKelolaDanKelembagaan(Request $request, StaticPage $staticPage)
    {
        $req = collect($request->except('_method', "_token"));

        $data = $req->map(function ($e, $k) use ($request) {
            $content = $e;
            if (in_array($k, array_keys($request->file()))) {
                $content = "storage/" . $request->file($k)->store("static-pages");
            }
            return ['type' => 'tata-kelola-dan-kelembagaan', 'variabel' => $k, 'konten' => $content];
        })->filter(function($e){
            return $e['konten']!=null;
        });        
        StaticContent::setContent($data);
        return redirect()->route("tata-kelola-dan-kelembagaan.edit")->with("message", "Data has been updated.");
    }


    public function editInovasiPendanaan()
    {
        $static_page = StaticPage::where('type', 'home_page')->get();
        $admin = request()->segment(1);
        $page = request()->segment(2);
        $action = request()->segment(3);
        return view('admin.staticPage.divisi.form-inovasi-dan-pendanaan', compact('admin', 'page', 'action'));
    }


    public function updateInovasiPendanaan(Request $request, StaticPage $staticPage)
    {
        $req = collect($request->except('_method', "_token"));

        $data = $req->map(function ($e, $k) use ($request) {
            $content = $e;
            if (in_array($k, array_keys($request->file()))) {
                $content = "storage/" . $request->file($k)->store("static-pages");
            }
            return ['type' => 'inovasi-pendanaan', 'variabel' => $k, 'konten' => $content];
        })->filter(function($e){
            return $e['konten']!=null;
        });        
        StaticContent::setContent($data);
        return redirect()->route("inovasi-pendanaan.edit")->with("message", "Data has been updated.");
    }
}
