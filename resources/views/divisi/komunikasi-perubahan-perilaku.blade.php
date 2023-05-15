@php
$deskripsi_komunikasi_perubahan_perilaku=StaticContent::getContent('komunikasi-perubahan-perilaku','deskripsi_komunikasi_perubahan_perilaku','Data Deskripsi Tidak Ditemukan');
$point1=StaticContent::getContent('komunikasi-perubahan-perilaku','point1',"Pengembangan strategi");
$point2=StaticContent::getContent('komunikasi-perubahan-perilaku','point2',"Penguatan kapasitas");
$point3=StaticContent::getContent('komunikasi-perubahan-perilaku','point3',"Implementasi dan monitoring");
@endphp
@extends('layout.index')
@section("content")
<section class="header-section">
    <h1 class="header-title uppercase">Komunikasi Perubahan Perilaku</h1>
    <ul class="header-breadcrumb">
        <li><a href="">HOME</a></li>
        <li><a href="{{route('bwh.index')}}">BANYUWANGI HIJAU</a></li>
        <li class="text-primary uppercase">Komunikasi Perubahan Perilaku</li>
    </ul>
</section>
<section class="base-content bg-white ">
    <div class="grid lg:grid-cols-3">
        <div class="col-span-2">
            <article class="unreset">
               {!!$deskripsi_komunikasi_perubahan_perilaku!!}
            </article>
        </div>
        <div class="flex justify-end items-center">
            <div class="space-y-5">
                <div class="card shadow-md bg-primary text-primary-content">
                    <div class="card-body">
                        <h2 class="card-title text-white">{{$point1}}</h2>
                        {{-- <p></p> --}}
                    </div>
                </div>
                <div class="card shadow-md bg-primary text-primary-content">
                    <div class="card-body">
                        <h2 class="card-title text-white">{{$point2}} </h2>
                        {{-- <p></p> --}}
                    </div>
                </div>
                <div class="card shadow-md bg-primary text-primary-content">
                    <div class="card-body">
                        <h2 class="card-title text-white">{{$point3}}</h2>
                        {{-- <p></p> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

@endsection