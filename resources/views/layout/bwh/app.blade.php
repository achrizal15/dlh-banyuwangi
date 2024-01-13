<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banyuwangi Hijau</title>

    @yield('styles')
</head>

<body>
    <main class="min-h-screen">
        @include('layout.bwh.navbar')
        @yield('content')
        @include('layout.bwh.footer')
    </main>
    @yield('js')
</body>

</html>
