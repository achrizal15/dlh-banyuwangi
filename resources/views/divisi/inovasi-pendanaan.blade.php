@php
$deskripsi_inovasi_dan_pendanaan=StaticContent::getContent('inovasi-pendanaan','deskripsi_inovasi_dan_pendanaan','Data Deskripsi Tidak Ditemukan');
$point1=StaticContent::getContent('inovasi-pendanaan','point1',"Perdagangan Komuditas");
$point2=StaticContent::getContent('inovasi-pendanaan','point2',"Sumber Pendanaan");
@endphp

@extends('layout.index')
@section("content")
<section class="header-section">
    <h1 class="header-title">INOVASI PENDANAAN</h1>
    <ul class="header-breadcrumb">
        <li><a href="">HOME</a></li>
        <li><a href="{{route('bwh.index')}}">BANYIWANGI HIJAU</a></li>
        <li class="text-primary">INOVASI PENDANAAN</li>
    </ul>
</section>
<section class="base-content bg-white ">
    <div class="grid lg:grid-cols-3">
        <div class="col-span-2">
            <article class="unreset">
                {!!$deskripsi_inovasi_dan_pendanaan!!}
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
                <div class="card shadow-md bg-secondary text-secondary-content">
                    <div class="card-body">
                        <h2 class="card-title text-white">{{$point2}}</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

@endsection