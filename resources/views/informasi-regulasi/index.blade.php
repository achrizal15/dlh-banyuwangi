@extends('layout.index')
@section("content")
<section class="header-section">
    <h1 class="header-title uppercase">INFORMASI DAN REGULASI</h1>
    <ul class="header-breadcrumb">
        <li><a href="">HOME</a></li>
        <li class="uppercase">INFORMASI DAN REGULASI</li>
    </ul>
    <div class="grid lg:grid-cols-3 mt-5">
        <div class="col-span-2 text-justify">
            @isset($description)
            {{$description->keterangan}}
            @else
            Menu ini berisi ragam informasi dan publikasi yang
            berkaitan dengan Dinas Lingkungan Hidup (DLH) Kabupaten Banyuwangi dan mitra DLH. Di sini, Anda dapat
            mengakses
            dan mengunduh sejumlah laporan, data, maupun dokumen kebijakan terkait lingkungan hidup, termasuk
            persampahan.
            Silakan pilih kategori informasi dan regulasi yang ingin Anda akses, ataupun mengisi pada bagian cari di
            bawah.
            @endisset
        </div>
    </div>
</section>
<section class="base-content">
    <div class="grid lg:grid-cols-3">
        <div class="col-span-2">
            <form action="" method="get">
                <div class="flex lg:flex-nowrap flex-wrap gap-4">
                    <select name="kategori" class="select w-full lg:w-auto select-primary outline-none focus:border-none">
                        <option selected value="" class="mt-5">Semua</option>
                        @foreach ($categories as $item)
                        <option value="{{$item->id}}" {{request()->kategori==$item->id?'selected':''}}>{{$item->nama}}
                        </option>
                        @endforeach
                    </select>
                    <input type="search" value="{{request()->search}}" name="search" placeholder="Cari dokumen ..."
                        class="input focus:border-none input-primary w-full">
                    <button class="btn btn-primary lg:btn-wide btn-block" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
            @if($documents->count()==0)
            <p class="text-center mt-10">Data tidak ditemukan...</p>
            @endif
            <ul class="mt-10">
                @foreach ($documents as $key=> $item)
                <li class="border mb-5 px-4 rounded-md py-4 shadow-xl hover:bg-gray-100" data-aos="fade-up" data-aos-delay="500"
                    data-aos-duration="{{500*$key}}">
                    <a href="{{route('ir.show',['dokumen'=>$item->link])}}" class="w-full">
                        <div class="flex items-center space-x-5">
                            <i class="text-3xl text-primary fa-solid fa-book"></i>
                            <div>
                                <h4 class="line-clamp-1 text-lg font-black">{{$item->nama}}</h4>
                                <p class="line-clamp-2">{{ strip_tags($item->keterangan)}}</p>
                                <i class="font-thin text-sm">{{$item->created_at->format('j F Y')}}</i>
                            </div>

                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
            {{$documents->links()}}
        </div>
    </div>
</section>

@endsection
@section('javascript')
@endsection