@php
$deskripsi_operasional_persampahan=StaticContent::getContent('operasional-persampahan','deskripsi_operasional_persampahan','Data Deskripsi Tidak Ditemukan');
$point1=StaticContent::getContent('operasional-persampahan','point1',"Desain dan konstruksi TPS 3R");
$point2=StaticContent::getContent('operasional-persampahan','point2',"Desain dan konstruksi TPS 3R");
$point3=StaticContent::getContent('operasional-persampahan','point3',"Desain dan konstruksi TPS 3R");
@endphp

@extends('layout.index')
@section("content")
<section class="header-section">
    <h1 class="header-title">OPERASIONAL PERSAMPAHAN</h1>
    <ul class="header-breadcrumb">
        <li><a href="">HOME</a></li>
        <li><a href="{{route('bwh.index')}}">BANYUWANGI HIJAU</a></li>
        <li class="text-primary">OPERASIONAL PERSAMPAHAN</li>
    </ul>
</section>
<section class="base-content bg-white ">
    <div class="grid lg:grid-cols-3">
        <div class="col-span-2">
            <article class="unreset">
                {!!$deskripsi_operasional_persampahan!!}
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
                <div class="card shadow-md bg-neutral text-neutral-content">
                    <div class="card-body">
                        <h2 class="card-title text-white">{{$point3}}</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

@endsection