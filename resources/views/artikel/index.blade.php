@extends('layout.index')
@section("content")
<section class="header-section">
    <h1 class="header-title uppercase">ARTIKEL</h1>
    <ul class="header-breadcrumb">
        <li><a href="">HOME</a></li>
        <li class="uppercase">ARTIKEL</li>
    </ul>
</section>
<section class="base-content">
    <div class="grid lg:grid-cols-3 gap-10">
        <div class="col-span-2">
            <form action="" method="get">
                <div class="flex space-x-4">
                    <input type="search" value="{{request()->search}}" name="search" placeholder="Cari artikel ..."
                        class="input focus:border-none input-primary w-full">
                    <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
            <div class="mt-4 grid sm:grid-cols-2 lg:grid-cols-3 gap-4 relative" id="main-article">
                @foreach ($artikels as $key=> $item)
                <div class="article relative shadow-lg " data-aos="flip-left" data-aos-duration="500"
                    data-aos-delay="500">
                    <div class="article-thumbnail bg-white">
                        <img src="{{asset('storage/'.$item->gambar)}}" loading="lazy" alt="">
                    </div>
                    <div class="content">
                        <a href="{{route('artikel.show',['artikel'=>$item->link])}}"
                            class="article-title">{{$item->judul}}</a>
                        <span class="article-published align-bottom">{{$item->created_at->format('j F Y')}}</span>
                    </div>
                </div>
                @endforeach
            </div>
            {{$artikels->links()}}
        </div>
    </div>
</section>

@endsection
@section('javascript')
@endsection