@php
$deskripsi_visi=StaticContent::getContent('tentang-kami','deskripsi_visi',"- Data Visi Tidak Tersedia -");
$deskripsi_misi=StaticContent::getContent('tentang-kami','deskripsi_misi','- Data Misi Tidak Tersedia -');
$deskripsi_tugas_pokok=StaticContent::getContent('tentang-kami','deskripsi_tugas_pokok',"- Deskripsi Tugas Pokok Tidak
Tersedia -");
$deskripsi_fungsi1=StaticContent::getContent('tentang-kami','deskripsi_fungsi1',"- Deskripsi Fungsi Tidak Tersedia -");
$deskripsi_fungsi2=StaticContent::getContent('tentang-kami','deskripsi_fungsi2',"- Deskripsi Fungsi Tidak Tersedia -");
$deskripsi_fungsi3=StaticContent::getContent('tentang-kami','deskripsi_fungsi3',"- Deskripsi Fungsi Tidak Tersedia -");
$deskripsi_fungsi4=StaticContent::getContent('tentang-kami','deskripsi_fungsi4',"- Deskripsi Fungsi Tidak Tersedia -");
@endphp

@extends('layout.index')
@section("content")
<section class="header-section">
    <h1 class="header-title">TENTANG KAMI</h1>
    <ul class="header-breadcrumb">
        <li><a href="">HOME</a></li>
        <li class="text-primary">TENTANG KAMI</li>
    </ul>
</section>
<section class="base-content bg-white ">
    <h1 class="text-center base-title">Visi</h1>
    <p class="text-center">{!!$deskripsi_visi!!}</p>
</section>
<section class="base-content bg-white flex justify-center flex-col items-center">

        <h1 class="base-title text-center">Misi</h1>
                   {!!$deskripsi_misi!!}

</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff291" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,240C384,235,480,149,576,138.7C672,128,768,192,864,197.3C960,203,1056,149,1152,138.7C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<section class="base-content bg-neutral" >
    <div class="grid lg:grid-cols-2 gap-4">
        <div class="">
            <h1 class="base-title">Tugas Pokok & Fungsi</h1>
            <p>{!!$deskripsi_tugas_pokok!!}</p>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-[#b49483] text-sm lg:text-base w-full border-white shadow-xl border-2 h-32 rounded-md  text-center flex items-center text-white font-primary p-4 tracking-widest" data-aos="fade-right">{{$deskripsi_fungsi1}}</div>
            <div class="bg-[#729ca4] text-sm lg:text-base w-full border-white shadow-xl border-2 h-32 rounded-md  text-center flex items-center text-white font-primary p-4 tracking-widest"data-aos="fade-left">{{$deskripsi_fungsi2}}</div>
            <div class="bg-[#acb483] text-sm lg:text-base w-full border-white shadow-xl border-2 h-32 rounded-md  text-center flex items-center text-white font-primary p-4 tracking-widest" data-aos="fade-right">{{$deskripsi_fungsi3}}</div>
            <div class="bg-[#edcf6f] text-sm lg:text-base w-full border-white shadow-xl border-2 h-32 rounded-md  text-center flex items-center text-white font-primary p-4 tracking-widest"data-aos="fade-left"> {{$deskripsi_fungsi4}}</div>
        </div>
    </div>    
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff291" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,240C384,235,480,149,576,138.7C672,128,768,192,864,197.3C960,203,1056,149,1152,138.7C1248,128,1344,160,1392,176L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

@endsection