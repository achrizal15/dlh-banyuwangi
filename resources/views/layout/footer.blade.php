@php
$logo=StaticContent::getContent('home','footer_logo','/vendor/PNG/LOGO DLH.png');
$footer_title=StaticContent::getContent('home','footer_title','DINAS LINGKUNGAN HIDUP KABUPATEN BANYUWANGI');
$footer_address=StaticContent::getContent('home','footer_address','JALAN WIJAYA KUSUMA NO 102');
$footer_contact=StaticContent::getContent('home','footer_contact','(03333) 424113');
$footer_youtube=StaticContent::getContent('home','footer_youtube','https://www.youtube.com/@dlhbanyuwangi8131');
$footer_facebook=StaticContent::getContent('home','footer_facebook','https://www.facebook.com/@dlhbanyuwangi8131');
$footer_instagram=StaticContent::getContent('home','footer_instagram','https://www.instagram.com/@dlhbanyuwangi');
$footer_title_bwh=StaticContent::getContent('banyuwangi-hijau','footer_title_bwh',"DINAS LINGKUNGAN HIDUP KABUPATEN
BANYUWANGI");
$footer_address_bwh=StaticContent::getContent('banyuwangi-hijau','footer_address_bwh',"-JALAN WIJAYA KUSUMA NO 102");
$footer_contact_bwh=StaticContent::getContent('banyuwangi-hijau','footer_contact_bwh',"(03333) 424113");
$footer_logo_bwh=StaticContent::getContent('banyuwangi-hijau','footer_logo_bwh',"vendor/images/bwh-logo.png");
$link_instagram_bwh=StaticContent::getContent('banyuwangi-hijau','link_instagram_bwh',"https://www.instagram.com/dlh.banyuwangi/");
$link_facebook_bwh=StaticContent::getContent('banyuwangi-hijau','link_facebook_bwh',"https://www.facebook.com/DLHBanyuwangi/");
$link_youtube_bwh=StaticContent::getContent('banyuwangi-hijau','link_youtube_bwh',"https://www.youtube.com/watch?v=eip4WZqymiY");

@endphp
@if($footer=='dlh')
<footer class="footer px-10 py-5 mt-10 bg-primary text-white">
  <div class="flex justify-items-center gap-4">

    <img src="{{asset($logo)}}" loading="lazy" width="100" alt="">
    <div class="mt-3">
      <h3 class="footer-logo-head">{{$footer_title}}</h3>
      <sub>{{$footer_address}}</sub> <br>
      <sub>NO TELPON/FAX: {{$footer_contact}}</sub>
    </div>
  </div>
  <div>

    <span class="footer-title">MEDIA SOSIAL</span>
    <div class="grid grid-flow-col gap-4">
      <a href="{{$footer_youtube}}" target="_blank"> <i class="fa-brands fa-youtube text-2xl"></i></a>
      <a href="{{$footer_facebook}}" target="_blank"> <i class="fa-brands fa-facebook-f text-2xl"></i></a>
      <a href="{{$footer_instagram}}" target="_blank"><i class="fa-brands fa-instagram text-2xl"></i></a>
    </div>
  </div>
</footer>
@else
{{-- BWH --}}
<div class="mt-10 text-primary flex justify-end items-center mb-2 mr-4">
  <div class="flex space-x-2 border-r-2 border-primary pr-2 mr-2">
    <a target="_blank" href="{{$link_youtube_bwh}}">
      <div class="w-8 border-2 flex items-center justify-center rounded-full h-8 border-primary">
        <i class="fa-brands fa-youtube"></i>
      </div>
    </a>
    <a target="_blank" href="{{$link_facebook_bwh}}">
      <div class="w-8 border-2 flex items-center justify-center rounded-full h-8 border-primary">
        <i class="fa-brands fa-facebook-f"></i>
      </div>
    </a>
    <a target="_blank"  href="{{$link_instagram_bwh}}">
      <div class="w-8 border-2 flex items-center justify-center rounded-full h-8 border-primary">
        <i class="fa-brands fa-instagram font-bold"></i>
      </div>
    </a>
  </div>
  <h3 class="font-primary ">BANYUWANGI HIJAU</h3>
</div>
<footer class="footer px-10 py-5  bg-primary text-white ">
  <div class="flex justify-items-center gap-4">
    <img src="{{asset($logo)}}" loading="lazy" width="100" alt="">
    <div class="mt-3">
      <h3 class="footer-logo-head">{{$footer_title_bwh}}</h3>
      <sub>{{$footer_address_bwh}}</sub> <br>
      <sub>NO TELPON/FAX: {{$footer_contact_bwh}}</sub>
    </div>

  </div>
  <div class="justify-end flex w-full">
    <img width="150" src="{{asset($footer_logo_bwh)}}" />
  </div>
</footer>
@endif