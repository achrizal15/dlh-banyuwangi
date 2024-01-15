@extends('layout.bwh.app')
@section('styles')
    <meta http-equiv="Permissions-Policy" content="interest-cohort=()">
@endsection
@section('content')
    @include('bwh._section.banner')
    @include('bwh._section.feeds')
    @include('bwh._section.about-us')
    @include('bwh._section.news')
    @include('bwh._section.target')
    @include('bwh._section.area')
    @include('bwh._section.programs')
    @include('bwh._section.cta')
@endsection
@section('js')
    <script>
        // setTimeout(() => {
        //     console.clear();
        // }, 1000);
    </script>
@endsection
