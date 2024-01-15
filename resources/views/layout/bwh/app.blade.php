<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
