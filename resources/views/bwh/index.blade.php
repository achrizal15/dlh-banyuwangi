@extends('layout.bwh.app')
@section('styles')
    <meta http-equiv="Permissions-Policy" content="interest-cohort=()">
@endsection
@section('content')
    @include('bwh._section.banner')
    <div class="grid grid-cols-2">
        <div class="grid grid-cols-3">
            <x-ig-feed />
            <x-ig-feed />
            <x-ig-feed />
        </div>
    </div>
@endsection
@section('js')
    <script async src="//www.instagram.com/embed.js"></script>
@endsection
