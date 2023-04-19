@php
$title_tujuan=StaticContent::getContent('banyuwangi-hijau','title_tujuan',"TUJUAN");
$gambar_tujuan=StaticContent::getContent('banyuwangi-hijau','gambar_tujuan','vendor/images/bwh-logo.png');
$deskripsi_tujuan=StaticContent::getContent('banyuwangi-hijau','deskripsi_tujuan',"- Deskripsi Kosong -");
$title_tentang=StaticContent::getContent('banyuwangi-hijau','title_tentang',"TENTANG");
$gambar_tentang=StaticContent::getContent('banyuwangi-hijau','gambar_tentang','vendor/images/bwh-logo.png');
$deskripsi_tentang=StaticContent::getContent('banyuwangi-hijau','deskripsi_tentang',"- Deskripsi Kosong -");
$title_layanan_persampahan=StaticContent::getContent('banyuwangi-hijau','title_layanan_persampahan',"Layanan
Persampahan");
$youtube_layanan_persampahan=StaticContent::getContent('banyuwangi-hijau','youtube_layanan_persampahan',"https://www.youtube.com/embed/JKOU6ddb4w4");
$deskripsi_layanan_persampahan=StaticContent::getContent('banyuwangi-hijau','deskripsi_layanan_persampahan',"- Deskripsi
Kosong -");
$footer_title=StaticContent::getContent('banyuwangi-hijau','footer_title',"DINAS LINGKUNGAN HIDUP KABUPATEN
BANYUWANGI");
$footer_address=StaticContent::getContent('banyuwangi-hijau','footer_address',"-JALAN WIJAYA KUSUMA NO 102");
$footer_contact=StaticContent::getContent('banyuwangi-hijau','footer_contact',"(03333) 424113");
$footer_logo=StaticContent::getContent('banyuwangi-hijau','footer_logo',"vendor/images/bwh-logo.png");
$nama_divisi=StaticContent::getContent('banyuwangi-hijau','nama_divisi',"KOMPONEN PROGRAM");
$contact_layanan_persampahan=StaticContent::getContent('banyuwangi-hijau','contact_layanan_persampahan',"085234104447");
$title_inovasi_dan_pendanaan=StaticContent::getContent('inovasi-pendanaan','title_inovasi_dan_pendanaan',"Inovasi Dan
Pendanaan");
$title_komunikasi_perubahan_perilaku=StaticContent::getContent('komunikasi-perubahan-perilaku','title_komunikasi_perubahan_perilaku',"Komunikasi
Perubahan Perilaku");
$title_operasional_persampahan=StaticContent::getContent('operasional-persampahan','title_operasional_persampahan',"Teknis
Operasional Persampahan");
$title_tata_kelola_dan_kelembagaan=StaticContent::getContent('tata-kelola-dan-kelembagaan','title_tata_kelola_dan_kelembagaan',"Tata
Kelola dan Kelembagaan");
@endphp

@extends('layout.index')
@section("content")
<section class="header-section">
    <h1 class="header-title">BANYIWANGI HIJAU</h1>
    <ul class="header-breadcrumb">
        <li><a href="">HOME</a></li>
        <li>BANYIWANGI HIJAU</li>
    </ul>
</section>
<section class="base-content h-screen">
    <div id="tentang-kita" class="owl-carousel owl-theme">
        <div class="grid lg:grid-cols-2">
            <div class="">
                <h1 class="base-title">{{$title_tentang}}</h1>
                <article class="unreset">
                    {!!$deskripsi_tentang!!}
                </article>
            </div>
            <div class="lg:flex justify-end items-center hidden">
                <img src="{{asset($gambar_tentang)}}" />
            </div>
        </div>
        <div class="grid lg:grid-cols-2">
            <div class="">
                <h1 class="base-title">{{$title_tujuan}}</h1>
                <article class="unreset">
                    {!!$deskripsi_tujuan!!}
                </article>
            </div>
            <div class="lg:flex hidden justify-end items-center">
                <img src="{{asset($gambar_tujuan)}}" />
            </div>

        </div>
    </div>

</section>

<section class="base-content bg-neutral" data-aos="fade-up">
    <h1 class="base-title text-center">{{$nama_divisi}}</h1>
    <div class="flex justify-center gap-4 items-start flex-wrap">
        <div data-aos="fade-right" data-aos-duration="2000" data-aos-delay="500">
            <a href="{{route('bwh.operational-persampahan')}}">
                <div class="flex flex-col w-28 justify-center space-y-2">
                    <div class="bg-primary h-28 shadow-md text-white justify-center  flex items-center rounded">
                        <i class="fa-solid fa-person-digging text-5xl align-bottom"></i>
                    </div>
                    <span class="text-primary text-center font-primary">{{$title_operasional_persampahan}}</span>
                </div>
            </a>
        </div>
        <div data-aos="fade-right" data-aos-duration="2000">
            <a href="{{route('bwh.komunikasi-perubahan-perilaku')}}">
                <div class="flex flex-col w-28 justify-center space-y-2">
                    <div class="bg-primary h-28 shadow-md text-white justify-center  flex items-center rounded">
                        <i class="fa-solid fa-bullhorn text-5xl align-bottom"></i>
                    </div>
                    <span class="text-primary text-center font-primary">{{$title_komunikasi_perubahan_perilaku}}</span>
                </div>
            </a>
        </div>
        <div data-aos="fade-left" data-aos-duration="2000">
            <a href="{{route('bwh.tata-kelola-dan-kelembagaan')}}">
                <div class="flex flex-col w-28 justify-center space-y-2">
                    <div class="bg-primary h-28 shadow-md text-white justify-center  flex items-center rounded">
                        <i class="fa-solid fa-industry text-5xl align-bottom"></i>
                    </div>
                    <span class="text-primary text-center font-primary">{{$title_tata_kelola_dan_kelembagaan}}</span>
                </div>
            </a>
        </div>

        <div data-aos="fade-left" data-aos-duration="2500" data-aos-delay="500">
            <a href="{{route('bwh.inovasi-pendanaan')}}">
                <div class="flex flex-col w-28 justify-center space-y-2">
                    <div class="bg-primary h-28 shadow-md text-white justify-center  flex items-center rounded">
                        <i class="fa-solid fa-money-bill-trend-up text-5xl align-bottom"></i>
                    </div>
                    <span class="text-primary text-center font-primary">{{$title_inovasi_dan_pendanaan}}</span>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="base-content">
    <h1 class="base-title text-center text-primary">CAKUPAN PROGRAM</h1>
    <article class="grid lg:grid-cols-5 gap-20">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505255.9300865612!2d114.01402803986589!3d-8.371426420952623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd154169714acef%3A0x3027a76e352bce0!2sKabupaten%20Banyuwangi%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1676640585201!5m2!1sid!2sid"
            style="border:0;width:100%;height:300px" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" class="lg:col-span-2"></iframe>
        <div class="lg:col-span-3">
            Pada fase pertama, Program Banyuwangi Hijau berupaya untuk:
            <ul class="list-disc lg:mt-5">
                <li> Memperluas pelayanan sampah kepada sekitar 250 ribu penduduk pada 33 desa di 6 kecamatan
                    (Singojuruh,
                    Songgon, Rogojampi, Genteng, Sempu, dan Kabat), melalui sistem UPTD PPK BLUD.</li>
                <li> Menciptakan 277 lapangan pekerjaan bagi masyarakat.</li>
                <li> Menghentikan 27.500 ton sampah (termasuk 20.800 ton plastik) per tahun agar tidak mencemari
                    lingkungan.</li>
                <li> Mengumpulkan 3.700 ton plastik per tahun (termasuk 2.600 ton sampah) yang didaur ulang.</li>
                <li> Mengurangi 3.500 ton CO2 emisi bersih per tahun.</li>
            </ul>





        </div>
    </article>


</section>
<section class="base-content bg-neutral" data-aos="fade-up">
    <h1 class="base-title text-center" id="cerita-success">CERITA SUKSES</h1>
    <div class="flex justify-between items-center relative">
        <button id="back-cerita-success"
            class="text-white absolute z-10 hover:scale-105 h-8 w-8 shadow-2xl hover:bg-green-800 bg-primary rounded-full"><i
                class="fa-solid fa-chevron-left"></i></button>
        <div class="owl-carousel cerita-success owl-theme z-0">
            @foreach ($cerita_success as $item)
            <div class="p-5" data-aos="flip-left">
                <div
                    class="flex flex-col bg-white rounded-md shadow-xl hover:shadow-none hover:scale-105 duration-300 overflow-hidden">
                    <img src="{{'storage/'.$item->gambar}}" alt="" class="rounded-t-md h-52 object-cover">
                    <h3 class="line-clamp-1 px-4">{{$item->judul}}</h3>
                    <p class="line-clamp-2 px-4 leading-tight my-3">
                        {{ strip_tags($item->deskripsi)}}
                    </p>
                    <div class="px-4 pb-4 ">
                        <a href="{{route('bwh.cerita-sukses',['ceritaSukses'=>$item->link])}}"
                            class="text-white px-4 bg-primary rounded-md py-2 hover:bg-green-800 shadow-xl hover:scale-105 duration-300 font-primary">Berita
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <button id="next-cerita-success"
            class="text-white absolute right-0 hover:scale-105 h-8 w-8 shadow-2xl hover:bg-green-800 bg-primary rounded-full"><i
                class="fa-solid fa-chevron-right"></i></button>
    </div>
</section>

<section class="base-content">
    <div class="flex flex-wrap lg:flex-nowrap gap-10">
        <div class="lg:w-1/2 w-full bg-neutral h-72 flex justify-center items-center">
            <iframe width="100%" height="100%" src={{asset($youtube_layanan_persampahan)}} frameborder="0"
                allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="w-full lg:w-1/2 ">
            <h1 class="mb-2 base-title">{{$title_layanan_persampahan}}</h1>
            <p class="text-justify">{!!$deskripsi_layanan_persampahan!!}</p>
        </div>
    </div>
</section>
<section class="base-content bg-secondary flex justify-between items-center">
    <h1 class="text-white font-primary text-sm lg:text-3xl tracking-wide"><i class="fa-brands fa-whatsapp"></i>
        KONTAK INFORMASI LAYANAN SAMPAH</h3>
        <div>
            <a href="https://wa.me/{{$contact_layanan_persampahan}}" class="btn btn-primary btn-sm lg:btn-md text-white" target="_blank">
                HUBUNGI KAMI
            </a>
        </div>
</section>
@endsection
@section('javascript')

<script src="{{asset('js/bwh/index.js')}}"></script>
{{-- @vite('resources/js/bwh/chart.js') --}}
@endsection