@extends('layout.index')
@section("content")
<section class="header-section">
    <h1 class="header-title uppercase">INFORMASI DAN REGULASI</h1>
    <ul class="header-breadcrumb">
        <li><a href="">HOME</a></li>
        <li class="uppercase">INFORMASI DAN REGULASI</li>
    </ul>
</section>
<section class="base-content  grid lg:grid-cols-3 gap-10 mb-10">
    <div class="col-span-2">
        <h1 class="base-title mb-0">{{$document->nama}}</h1>
        <i class="font-thin text-sm">{{$document->created_at->format('j F Y')}}</i>
        @if ($document->file!='')
        <iframe src="{{asset('/storage/'.$document->file)}}" height="800" width="100%" class="w-full"></iframe>
        @endif
        <div class="mt-5">
     
        </div>
        <div class="mt-5">

            {!!$document->keterangan!!}
        </div>
    </div>
</section>

@endsection
@section('javascript')
@endsection