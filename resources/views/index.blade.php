@php
$title_target_program=StaticContent::getContent('home','title_target_program',"TARGET PROGRAM");
$keterangan_target_program=StaticContent::getContent('home','keterangan_target_program',"Dinas Lingkungan Hidup
Kabupaten Banyuwangi");
$sampah_harian=StaticContent::getContent('home','sampah_harian',"-");
$sampah_bulanan=StaticContent::getContent('home','sampah_bulanan',"-");
$sampah_tahunan=StaticContent::getContent('home','sampah_tahunan',"-");
@endphp

@extends('layout.index')
@section("content")
<section class="banner-carousel">
    <div class="owl-carousel banner-carousel-i owl-theme">
        @foreach ($banners as $item)
        <div class="item" style="width:100%;"><img src="{{asset('storage/'.$item->gambar)}}" class="h-[150px] lg:h-[300px] object-fill" loading="lazy" /></div>
        @endforeach
    </div>
    </div>
</section>
{{-- <section class="base-content bg-white hidden" data-aos="fade-up">
    <h1 class="base-title text-center">{{$title_target_program}}</h1>

    <div class="flex justify-center items-center my-5">
        <div class="w-1/4 border-r-2 border-primary text-center">
            <h1>{{$sampah_harian}} </h1>
            <p class="text-sm font-bold text-primary">Ton/HARI</p>
        </div>
        <div class="w-1/4 border-r-2 border-primary text-center">
            <h1>{{$sampah_bulanan}}</h1>
            <p class="text-sm font-bold text-primary">Ton/BULAN</p>
        </div>
        <div class="w-1/4 border-primary text-center">
            <h1>{{$sampah_tahunan}}</h1>
            <p class="text-sm font-bold text-primary">Ton/TAHUN</p>
        </div>
    </div>
    <div class="flex justify-center items-center">
        <p><b>*Sumber: </b> <i> {!!$keterangan_target_program!!}</i></p>

    </div>
</section> --}}
<section class="mx-auto base-content grid  grid-cols-1 lg:grid-cols-3 lg:gap-10">
    <article class="lg:col-span-2">
        <h1 class="base-title">Artikel</h1>
        <p>Dinas Lingkungan Hidup memiliki tugas untuk melaksanakan penyusunan dan pelaksanaan kebijakan daerah di
            bidang lingkungan hidup. DLH juga memiliki kegiatan di bidang lingkungan hidup. Berikut kegiatan yang telah
            berjalan:</p>
        <div class="mt-4 grid lg:grid-cols-3 grid-cols-1 md:grid-cols-2 gap-4 relative" id="main-article">
            @foreach ($articles as $key=> $item)
            <div class="article relative  @if($key!=5) shadow-lg @endif" data-aos="flip-left" data-aos-duration="500"
                data-aos-delay="500">
                <div class="article-thumbnail bg-white">
                    <img src="{{asset('storage/'.$item->gambar)}}" loading="lazy" alt="">
                </div>
                <div class="content">
                    <a href="{{route('artikel.show',['artikel'=>$item->link])}}"
                        class="article-title">{{$item->judul}}</a>
                    <span class="article-published align-bottom">{{$item->created_at->format('j F Y')}}</span>
                </div>

                @if($key==5)
                <div
                    class=" right-0 top-0 bottom-0 bg-gradient-to-l from-white absolute flex justify-center items-center group duration-300 transition-[width] ease-in-out hover:w-full w-16">
                    <a href="{{route('artikel.index')}}"
                        class="text-primary font-primary text-2xl relative overflow-hidden group-hover:overflow-visible group-hover:scale-125 flex items-center">
                        <i class="fa-solid fa-angles-right"></i>
                        <div class="translate-x-32 group-hover:-translate-x-0 transition duration-300">Lainnya </div>
                    </a>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </article>
    <article>
        <div class="mb-5 w-ful">
            <a href="https://banyuwangikab.go.id/">
                <div class="rounded-md shadow-lg overflow-hidden mb-10 bg-white">
                    <img src="{{asset('vendor/JPEG/bu_ipuk.jpg')}}" alt="image" class="w-full">
                    <div class="px-6 py-4">
                        <div class="font-bold text-primary text-xl mb-2">Kabupaten Banyuwangi</div>
                        <p class="text-sm text-slate-600">Pusat Informasi Pemerintahan Kabupaten Banyuwangi.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="w-full relative overflow-hidden">
            <div id="my-calendar"></div>
            <div class="mt-2">
                <ul id="list-agenda">

                </ul>
            </div>
        </div>

    </article>
</section>
<section class="mb-10 relative">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 260" class="z-0">
        <path fill="#189637" fill-opacity="0.6"
            d="M0,96L60,117.3C120,139,240,181,360,181.3C480,181,600,139,720,101.3C840,64,960,32,1080,53.3C1200,75,1320,149,1380,186.7L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 260" class="absolute top-0">
        <path fill="#189637" fill-opacity="1"
            d="M0,192L60,165.3C120,139,240,85,360,90.7C480,96,600,160,720,192C840,224,960,224,1080,213.3C1200,203,1320,181,1380,170.7L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
    <section class="base-content bg-primary min-h-[200px] relative">
        <h1 class="base-title text-white text-right">Galeri</h1>
        <div class="flex justify-center items-center relative">
            <button id="back-galery-carousel"
                class="text-primary absolute z-[2] left-0 hover:scale-105 h-8 w-8 shadow-2xl hover:bg-white bg-white rounded-full"><i
                    class="fa-solid fa-chevron-left"></i></button>
            <div class="owl-carousel owl-theme galery-carousel">
                @foreach ($galery as $item)
                <div data-aos="fade-left" data-aos-delay="500" class="pb-10 pt-10">
                    <img class="lg:h-52 h-28 w-full bg-gray-200 item rounded-md shadow-lg" src="{{'storage/'.$item->gambar}}"
                        object-fit="contain" alt="{{$item->nama}}" />
                </div>
                @endforeach
            </div>
            <button id="next-galery-carousel"
                class="text-primary absolute right-0 z-[1] hover:scale-105 h-8 w-8 shadow-2xl hover:bg-white bg-white rounded-full"><i
                    class="fa-solid fa-chevron-right"></i></button>
        </div>
    </section>

</section>
<section class="mb-10 base-content relative">
    <h1 class="base-title text-primary text-center">Mitra</h1>
    <div class="flex flex-wrap gap-5 justify-center">
        @foreach ($mitra as $key=> $item)
        <a data-aos="fade-up" target="_blank" data-aos-delay="{{200*$key}}" data-aos-duration="{{200*$key}}" class="tooltip" href="{{$item->link}}" data-tip="{{$item->name}}">
            <img class="w-32 h-32 object-contain shadow-xl" alt="{{$item->name}}" src="{{'storage/'.$item->gambar}}" />
        </a>
        @endforeach

    </div>
</section>

@endsection
@section('javascript')
<script>
    $(document).ready(function () {
   
    $('#my-calendar').zabuto_calendar({
    classname: 'table table-compact w-full',
    ajax:{
        url:'',
    }
  });
});
$('#my-calendar').on('zabuto:calendar:goto',function(e){
    $('#list-agenda').html('')
})

$('#my-calendar').on('zabuto:calendar:day-event',function(e){
    const events=e.eventdata.events[0]  
    if($("."+events.id).length==0){
        const dateEnd=events.tanggal_selesai!=events.tanggal?` - ${events.tanggal_selesai} `:''
        $('#list-agenda').append( `<li class="${events.id}"><p><b><i>${events.tanggal} ${dateEnd} ${events.title}</i></b></p>
                        <span class="font-serif line-clamp-2">${events.description}</span> </li>`)
    }
})


</script>
@endsection