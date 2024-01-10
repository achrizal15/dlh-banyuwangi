<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\DokumenController;
use App\Http\Controllers\Admin\StaticPageController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CeritaSuksesController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\MitraDLHController;
use App\Http\Controllers\ArtikelController as ControllersArtikelController;
use App\Http\Controllers\BwhController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiRegulasi;
use App\Http\Controllers\TentangKamiController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** 
 *  Ini adalah route untuk landing page
 */
//  Route Registrasi
Route::get('/clear', function () {
    Artisan::call("view:clear");
    Artisan::call("config:clear");
    Artisan::call("cache:clear");
});

Route::get("/", [HomeController::class, "index"])->name('home');    
Route::get("/tentang-kami", [TentangKamiController::class, "index"])->name('tentang.kami');

Route::group(["middleware" => "guest"], function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/post-login', [LoginController::class, 'postLogin'])->name('post.login');
});

Route::prefix('/artikels')
    ->as('artikel')
    ->controller(ControllersArtikelController::class)
    ->group(function () {
        Route::get('/', 'index')->name(".index");
        Route::get('/{artikel:link}', 'show')->name(".show");
    });

Route::prefix("/informasi-dan-regulasi")
    ->as("ir.")
    ->controller(InformasiRegulasi::class)
    ->group(function () {
        Route::get("/", "index")->name('index');
        Route::get("/{dokumen:link}", "show")->name('show');
    });

Route::prefix("/banyuwangi-hijau")
    ->as("bwh.")
    ->controller(BwhController::class)
    ->group(function () {
        Route::get("/", 'index')->name("index");
        Route::get("/operational-persampahan",  "operationalPersampahan")->name("operational-persampahan");
        Route::get("/komunikasi-perubahan-perilaku",  "komunikasiPerubahanPerilaku")->name("komunikasi-perubahan-perilaku");
        Route::get("/tata-kelola-dan-kelembagaan",  "tataKelola")->name("tata-kelola-dan-kelembagaan");
        Route::get("/inovasi-pendanaan",  "inovasiPendanaan")->name("inovasi-pendanaan");
        Route::get("/cerita-sukses/{ceritaSukses:link}", "ceritaSukses")->name("cerita-sukses");
    });


/** 
 * Ini adalah route untuk admin 
 */
Route::group(['middleware' => 'Admin', 'prefix' => '/admin'], function () {
    Route::get('/', [DashboardController::class, "index"])->name('dashboard.index');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('/users', UserController::class);
    Route::resource('/articles', ArtikelController::class);
    Route::resource('/galerys', GaleryController::class);
    Route::resource('/categories', KategoriController::class);
    Route::resource('/documents', DokumenController::class);
    Route::resource('/banners', BannerController::class);
    Route::resource('/cerita-suksess', CeritaSuksesController::class);
    Route::resource('/agendas', AgendaController::class);
    Route::resource('/mitraDLHs', MitraDLHController::class);
    Route::get('/static-pages/home-page/edit', [StaticPageController::class, "editHomePage"])->name('home-page.edit');
    Route::put('/static-pages/home-page', [StaticPageController::class, "updateHomePage"])->name('home-page.update');
    Route::get('/static-pages/banyuwangi-hijau/edit', [StaticPageController::class, "editBanyuwangiHijau"])->name('banyuwangi-hijau.edit');
    Route::put('/static-pages/banyuwangi-hijau', [StaticPageController::class, "updateBanyuwangiHijau"])->name('banyuwangi-hijau.update');
    Route::get('/static-pages/tentang-kami/edit', [StaticPageController::class, "editTentangKami"])->name('tentang-kami.edit');
    Route::put('/static-pages/tentang-kami', [StaticPageController::class, "updateTentangKami"])->name('tentang-kami.update');

    // DIVISI
    Route::get('/static-pages/banyuwangi-hijau/operasional-persampahan/edit', [StaticPageController::class, "editOperasionalPersampahan"])->name('operasional-persampahan.edit');
    Route::put('/static-pages/banyuwangi-hijau/operasional-persampahan', [StaticPageController::class, "updateOperasionalPersampahan"])->name('operasional-persampahan.update');
    Route::get('/static-pages/banyuwangi-hijau/komunikasi-perubahan-perilaku/edit', [StaticPageController::class, "editKomunikasiPerubahanPerilaku"])->name('komunikasi-perubahan-perilaku.edit');
    Route::put('/static-pages/banyuwangi-hijau/komunikasi-perubahan-perilaku', [StaticPageController::class, "updateKomunikasiPerubahanPerilaku"])->name('komunikasi-perubahan-perilaku.update');
    Route::get('/static-pages/banyuwangi-hijau/tata-kelola-dan-kelembagaan/edit', [StaticPageController::class, "editTataKelolaDanKelembagaan"])->name('tata-kelola-dan-kelembagaan.edit');
    Route::put('/static-pages/banyuwangi-hijau/tata-kelola-dan-kelembagaan', [StaticPageController::class, "updateTataKelolaDanKelembagaan"])->name('tata-kelola-dan-kelembagaan.update');
    Route::get('/static-pages/banyuwangi-hijau/inovasi-pendanaan/edit', [StaticPageController::class, "editInovasiPendanaan"])->name('inovasi-pendanaan.edit');
    Route::put('/static-pages/banyuwangi-hijau/inovasi-pendanaan', [StaticPageController::class, "updateInovasiPendanaan"])->name('inovasi-pendanaan.update');
});
