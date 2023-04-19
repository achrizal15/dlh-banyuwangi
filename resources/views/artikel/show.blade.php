@extends('layout.index')
@section("content")
<section class="header-section">
    <h1 class="header-title">ARTIKEL</h1>
    <ul class="header-breadcrumb">
        <li><a href="">HOME</a></li>
        <li class="text-primary">ARTIKEL</li>
    </ul>
</section>
<section class="base-content bg-white ">
    <div class="grid lg:grid-cols-3">
        <div class="col-span-2">
            <h1 class="text-center base-title">{{$artikel->judul}}</h1>
            <article class="unreset">
                {!!$artikel->deskripsi!!}
            </article>
        </div>

    </div>

</section>

@endsection