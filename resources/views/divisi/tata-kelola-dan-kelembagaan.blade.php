@php
$deskripsi_tata_kelola_dan_kelembagaan=StaticContent::getContent('tata-kelola-dan-kelembagaan','deskripsi_tata_kelola_dan_kelembagaan','Data Deskripsi Tidak Ditemukan');
$point1=StaticContent::getContent('tata-kelola-dan-kelembagaan','point1',"Tarif retribusi sampah");
$point2=StaticContent::getContent('tata-kelola-dan-kelembagaan','point2',"Kelembagaan");
$point3=StaticContent::getContent('tata-kelola-dan-kelembagaan','point3',"Komitmen kabupaten dan desa");
$point4=StaticContent::getContent('tata-kelola-dan-kelembagaan','point4',"Dukungan pendanaan pemerintah");
@endphp

@extends('layout.index')
@section("content")
<section class="header-section">
    <h1 class="header-title uppercase">Tata Kelola dan Kelembagaan</h1>
    <ul class="header-breadcrumb">
        <li><a href="">HOME</a></li>
        <li><a href="{{route('bwh.index')}}">BANYUWANGI HIJAU</a></li>
        <li class="text-primary uppercase">Tata Kelola dan Kelembagaan</li>
    </ul>
</section>
<section class="base-content bg-white ">
    <div class="grid lg:grid-cols-3">
        <div class="col-span-2">
            <article class="unreset">
                {!!$deskripsi_tata_kelola_dan_kelembagaan!!}
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
                        <h2 class="card-title text-white">{{$point2}}</h2>
                    </div>
                </div>
                <div class="card shadow-md bg-secondary text-secondary-content">
                    <div class="card-body">
                        <h2 class="card-title text-white">{{$point3}}</h2>
                    </div>
                </div>
                <div class="card shadow-md bg-secondary text-secondary-content">
                    <div class="card-body">
                        <h2 class="card-title text-white">{{$point4}}</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

@endsection