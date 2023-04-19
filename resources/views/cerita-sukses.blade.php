@extends('layout.index')
@section("content")
<section class="header-section">
    <h1 class="header-title">CERITA SUKSES</h1>
    <ul class="header-breadcrumb">
        <li><a href="">HOME</a></li>
        <li><a href="{{route('bwh.index')}}">BANYIWANGI HIJAU</a></li>
        <li class="text-primary">CERITA SUKSES</li>
    </ul>
</section>
<section class="base-content bg-white">
    <div class="grid lg:grid-cols-3">
        <div class="lg:col-span-2">
            <h1 class="text-center base-title">{{$title}}</h1>
            <div class="w-full">
                <img src="{{asset('storage/'.$ceritaSukses->gambar)}}" width="100%" alt="gambar">
                <p class="my-5"><b>Publish: </b><i class="">{{$ceritaSukses->created_at->format("j F Y")}}</i></p>
            </div>

            <div class="unreset">
                {!!$ceritaSukses->deskripsi!!}
            </div>
        </div>

    </div>

</section>

@endsection