@php
$header_title=StaticContent::getContent('home','header_title',"DLH BANYUWANGI");
$header_logo=StaticContent::getContent('home','header_logo','vendor/PNG/LOGO DLH.png');
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$title}}</title>
  <link rel="stylesheet" href="{{asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/aos-master/dist/aos.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/calendar/index.css')}}">
  <script src="https://kit.fontawesome.com/bb21b3c852.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://uicdn.toast.com/calendar/latest/toastui-calendar.min.css" />
  @vite('resources/css/app.css')
  @yield("styles")
</head>

<body>
  <nav class="navbar bg-base-100 lg:text-xl top-0  pl-4 lg:pl-0 font-semibold text-primary p-0">
    <div class="navbar-start lg:w-32">
      <div class="dropdown">
        <label tabindex="0" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </label>
        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
          <li><a class="items-nav  {{ request()->is('/') ? 'selected' : '' }}" href="{{route('home')}}">HOME</a></li>
          <li><a class="items-nav {{ request()->is('tentang-kami') ? 'selected' : '' }}" href="{{route('tentang.kami')}}">
              TENTANG KAMI
            </a></li>
          <li tabindex="0">
            <a href="{{route('ir.index')}}"
              class="items-nav {{ request()->is('informasi-dan-regulasi')||request()->is('informasi-dan-regulasi/*') ? 'selected' : '' }}">
              INFORMASI DAN REGULASI
              <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
              </svg>
            </a>
            <ul class="p-2 bg-secondary/90 z-10 text-white w-full mt-1">
              @foreach ($navinformasidanregulasi as $item)
              <li><a href="{{route('ir.index')}}?kategori={{$item->id}}">{{$item->nama}}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a class="items-nav {{ request()->is('banyuwangi-hijau') ? 'selected' : '' }}"
              href="{{route('bwh.index')}}">
              BANYUWANGI HIJAU
            </a></li>
        </ul>
      </div>
    </div>
    <!-- nav lg -->
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal p-0 space-x-5">
        <li><a class="items-nav  {{ request()->is('/') ? 'selected' : '' }}" href="{{route('home')}}">HOME</a></li>
        <li><a class="items-nav {{ request()->is('tentang-kami') ? 'selected' : '' }}" href="{{route('tentang.kami')}}">
            TENTANG KAMI
          </a></li>
        <li tabindex="0">
          <a href="{{route('ir.index')}}"
            class="items-nav {{ request()->is('informasi-dan-regulasi')||request()->is('informasi-dan-regulasi/*') ? 'selected' : '' }}">
            INFORMASI DAN REGULASI
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
              <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
            </svg>
          </a>
          <ul class="p-2 bg-secondary/90 z-10 text-white w-full mt-1">
            @foreach ($navinformasidanregulasi as $item)
            <li><a href="{{route('ir.index')}}?kategori={{$item->id}}">{{$item->nama}}</a></li>
            @endforeach
          </ul>
        </li>
        <li><a class="items-nav {{ request()->is('banyuwangi-hijau') ? 'selected' : '' }}"
            href="{{route('bwh.index')}}">
            BANYUWANGI HIJAU
          </a></li>
      </ul>
    </div>
    <div class="navbar-end w-10/12">
      <a href="/">
        <div class="p-4 flex items-center space-x-2">
          <div class="w-10 h-10 rounded-full ">
            <img src="{{asset($header_logo)}}" alt="">
          </div>
          <span>{{$header_title}}</span>
        </div>
      </a>
    </div>
  </nav>
  <div class="min-h-screen">
    <div>
      @yield('content')
    </div>
  </div>
  @include('layout.footer')
  <script src="{{asset('sneat/assets')}}/vendor/libs/jquery/jquery.js"></script>
  <script src="{{asset('vendor/owl-carousel/dist/owl.carousel.js')}}"></script>
  <script src="{{asset('vendor/aos-master/dist/aos.js')}}"></script>
  <script src="{{asset('vendor/calendar/index.js')}}"></script>
  <script src="{{asset('js/app_frontend.js?v='.date('ymdhi',strtotime('now')))}}"></script>
  <script>
    AOS.init({
        once:true
    });
  </script>
  @yield('javascript')
</body>

</html>