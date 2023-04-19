@extends('admin.layout.das')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ucwords($admin)}} / {{ucwords($page)}} / </span>
    {{ucwords($action)}}
</h4>
@php
$header_title=StaticContent::getContent('home','header_title',"DLH BANYUWANGI");
$header_logo=StaticContent::getContent('home','header_logo','vendor/PNG/LOGO DLH.png');
$title_target_program=StaticContent::getContent('home','title_target_program',"TARGET PROGRAM");
$keterangan_target_program=StaticContent::getContent('home','keterangan_target_program',"Dinas Lingkungan Hidup Kabupaten Banyuwangi");
$sampah_harian=StaticContent::getContent('home','sampah_harian',"-");
$sampah_bulanan=StaticContent::getContent('home','sampah_bulanan',"-");
$sampah_tahunan=StaticContent::getContent('home','sampah_tahunan',"-");
$footer_title=StaticContent::getContent('home','footer_title',"DINAS LINGKUNGAN HIDUP KABUPATEN BANYUWANGI");
$footer_address=StaticContent::getContent('home','footer_address',"JALAN WIJAYA KUSUMA NO 102");
$footer_contact=StaticContent::getContent('home','footer_contact',"(03333) 424113");
$footer_logo=StaticContent::getContent('home','footer_logo','vendor/PNG/LOGO DLH.png');
$link_instagram=StaticContent::getContent('home','link_instagram',"https://www.instagram.com/dlh.banyuwangi/");
$link_facebook=StaticContent::getContent('home','link_facebook',"https://www.facebook.com/DLHBanyuwangi/");
$link_youtube=StaticContent::getContent('home','link_youtube',"https://www.youtube.com/watch?v=eip4WZqymiY");
@endphp
<form action="{{route('home-page.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card">
        <h5 class="card-header">Header</h5>
        <div class="card-body">
            <div class="row mb-3">
                <label for="header_title" class="col-sm-2 col-form-label">Header Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('header_title') is-invalid @enderror"
                        id="header_title" name="header_title" placeholder="header_title" value="{{$header_title}}" />
                    <div id="header_titleFeedback" class="invalid-feedback">
                        @error('header_title') {{$message}} @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="header_logo" class="col-sm-2 col-form-label">Header Logo</label>
                <div class="col-sm-10">
                    <input type="file" class="dropify" id="header_logo" name="header_logo"
                        data-allowed-file-extensions="jpg png jpeg" data-default-file="{{asset($header_logo)}}" />
                    <div id="header_logoFeedback" class="invalid-feedback">
                        @error('header_logo') {{$message}} @enderror
                    </div>
                </div>
            </div>
        </div>


        <!-- <hr class="m-0" />
        <h5 class="card-header">Target Program</h5>
        <div class="card-body">
            <div class="row mb-3">
                <label for="title_target_program" class="col-sm-2 col-form-label">Title </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('title_target_program') is-invalid @enderror"
                    value="{{$title_target_program}}"
                        id="title_target_program" name="title_target_program" placeholder="title_target_program" />
                    <div id="title_target_programFeedback" class="invalid-feedback">
                        @error('title_target_program') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="keterangan_target_program" class="col-sm-2 col-form-label">Sumber</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control ckeditor @error('keterangan_target_program') is-invalid @enderror"
                        id="ckeditor" name="keterangan_target_program"
                        placeholder="Isi keterangan_target_program">{{$keterangan_target_program}}</textarea>
                    <div id="keterangan_target_programFeedback" class="invalid-feedback">
                        @error('keterangan_target_program') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="sampah_harian" class="col-sm-2 col-form-label">Harian</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('sampah_harian') is-invalid @enderror"
                    value="{{$sampah_harian}}" id="sampah_harian" name="sampah_harian" placeholder="sampah_harian" />
                    <div id="sampah_harianFeedback" class="invalid-feedback">
                        @error('sampah_harian') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="sampah_bulanan" class="col-sm-2 col-form-label">Bulanan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('sampah_bulanan') is-invalid @enderror"
                        id="sampah_bulanan" name="sampah_bulanan" placeholder="sampah_bulanan"
                        value="{{$sampah_bulanan}}" />
                    <div id="sampah_bulananFeedback" class="invalid-feedback">
                        @error('sampah_bulanan') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="sampah_tahunan" class="col-sm-2 col-form-label">Tahunan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('sampah_tahunan') is-invalid @enderror"
                        id="sampah_tahunan" name="sampah_tahunan" placeholder="sampah_tahunan"
                        value="{{$sampah_tahunan}}" />
                    <div id="sampah_tahunanFeedback" class="invalid-feedback">
                        @error('sampah_tahunan') {{$message}} @enderror
                    </div>
                </div>
            </div>
        </div> -->

    <hr class="m-0" />
    <h5 class="card-header">Footer</h5>
    <div class="card-body">
        <div class="row mb-3">
            <label for="footer_title" class="col-sm-2 col-form-label">Footer Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('footer_title') is-invalid @enderror" id="footer_title"
                    name="footer_title" placeholder="footer_title" value="{{$footer_title}}" />
                <div id="footer_titleFeedback" class="invalid-feedback">
                    @error('footer_title') {{$message}} @enderror
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="footer_address" class="col-sm-2 col-form-label">Footer Address</label>
            <div class="col-sm-4">
                <input type="text" class="form-control @error('footer_address') is-invalid @enderror"
                    id="footer_address" name="footer_address" placeholder="footer_address"
                    value="{{$footer_address}}" />
                <div id="footer_addressFeedback" class="invalid-feedback">
                    @error('footer_address') {{$message}} @enderror
                </div>
            </div>
            <label for="footer_contact" class="col-sm-2 col-form-label">Footer Contact</label>
            <div class="col-sm-4">
                <input type="text" class="form-control @error('footer_contact') is-invalid @enderror"
                    id="footer_contact" name="footer_contact" placeholder="footer_contact"
                    value="{{$footer_contact}}" />
                <div id="footer_contactFeedback" class="invalid-feedback">
                    @error('footer_contact') {{$message}} @enderror
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <label for="footer_logo" class="col-sm-2 col-form-label">Footer Logo</label>
            <div class="col-sm-10">
                <input type="file" class="dropify" id="footer_logo" name="footer_logo"
                    data-allowed-file-extensions="jpg png jpeg" data-default-file="{{asset($footer_logo)}}" />
                <div id="footer_logoFeedback" class="invalid-feedback">
                    @error('footer_logo') {{$message}} @enderror
                </div>
            </div>
        </div>
    </div>


    <hr class="m-0" />
    <h5 class="card-header">LINK</h5>
    <div class="card-body">

        <div class="row mb-3">
            <label for="link_facebook" class="col-sm-2 col-form-label">Link Facebook</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('link_facebook') is-invalid @enderror"
                    placeholder="https://www.facebook.com/DLHBanyuwangi/" id="basic-url1" value="{{$link_facebook}}"
                    aria-describedby="basic-addon14" />
            </div>
            <div id="link_facebookFeedback" class="invalid-feedback">
                @error('link_facebook') {{$message}} @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="link_instagram" class="col-sm-2 col-form-label">Link Instagram</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('link_instagram') is-invalid @enderror"
                    placeholder="https://www.instagram.com/dlh.banyuwangi/" id="basic-url1" value="{{$link_instagram}}"
                    aria-describedby="basic-addon14" />
            </div>
            <div id="link_instagramFeedback" class="invalid-feedback">
                @error('link_instagram') {{$message}} @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="link_youtube" class="col-sm-2 col-form-label">Link Youtube</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('link_youtube') is-invalid @enderror"
                    placeholder="https://www.youtube.com/watch?v=eip4WZqymiY" id="basic-url1" name="link_youtube"
                    value="{{$link_youtube}}" aria-describedby="basic-addon14" />
            </div>
            <div id="link_youtubeFeedback" class="invalid-feedback">
                @error('link_youtube') {{$message}} @enderror
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </div>
    </div>
</form>
</div>
</div>
@endsection