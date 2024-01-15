<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Program Banyuwangi Hijau (BWH) - Inisiatif Pemerintah Kabupaten Banyuwangi untuk pengelolaan sampah berkelanjutan, menggabungkan model pengelolaan sampah perkotaan dalam konsep sampah sirkular dengan penekanan pada solusi daur ulang.">
    <meta name="keywords"
        content="Banyuwangi Hijau, Program Sampah Berkelanjutan, Pengelolaan Sampah, Daur Ulang Sampah, Ekonomi Sampah, Masyarakat Partisipatif, Banyuwangi Rebound, P4G, Accenture, Kerajaan Norwegia">
    <meta name="author" content="Pemerintah Daerah Kabupaten Banyuwangi">

    <!-- OG Meta Tags -->
    <meta property="og:title" content="Banyuwangi Hijau - Program Sampah Berkelanjutan">
    <meta property="og:description"
        content="Inisiatif Pemerintah Kabupaten Banyuwangi untuk pengelolaan sampah berkelanjutan, menggabungkan model pengelolaan sampah perkotaan dalam konsep sampah sirkular dengan penekanan pada solusi daur ulang.">
    <meta property="og:image" content="{{ Vite::asset('resources/images/dlh-2.webp') }}">
    <!-- Add the actual image URL -->
    <meta property="og:url" content="{{ Vite::asset('resources/images/dlh-2.webp') }}">
    <!-- Add the actual program URL -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Banyuwangi Hijau">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="Banyuwangi Hijau">
    <meta name="twitter:title" content="Banyuwangi Hijau - Program Sampah Berkelanjutan">
    <meta name="twitter:description"
        content="Inisiatif Pemerintah Kabupaten Banyuwangi untuk pengelolaan sampah berkelanjutan, menggabungkan model pengelolaan sampah perkotaan dalam konsep sampah sirkular dengan penekanan pada solusi daur ulang.">
    <meta name="twitter:image" content="{{ Vite::asset('resources/images/dlh-2.webp') }}">
    <!-- Add the actual image URL -->
    <meta name="twitter:url" content="https://dlh.banyuwangikab.go.id/banyuwangi-hijau">
    <!-- Add the actual program URL -->
    <meta name="twitter:site" content="@banyuwangihijau">

    <!-- Additional Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="7 days">

    <title>Banyuwangi Hijau</title>




    @livewireStyles
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://kit.fontawesome.com/bb21b3c852.js" crossorigin="anonymous"></script>
    @vite('resources/js/bwh.js')
    @yield('styles')
</head>

<body>
    <main class="min-h-screen flex flex-col justify-between pt-20">
        @include('layout.bwh.navbar')
        @yield('content')
        @include('layout.bwh.footer')
    </main>
    @livewireScripts
    @yield('js')
</body>

</html>
