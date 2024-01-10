@php
$title_tujuan=StaticContent::getContent('banyuwangi-hijau','title_tujuan',"TUJUAN");
$gambar_tujuan=StaticContent::getContent('banyuwangi-hijau','gambar_tujuan','vendor/images/bwh-logo.png');
$deskripsi_tujuan=StaticContent::getContent('banyuwangi-hijau','deskripsi_tujuan',"- Deskripsi Kosong -");
$title_tentang=StaticContent::getContent('banyuwangi-hijau','title_tentang',"TENANG");
$gambar_tentang=StaticContent::getContent('banyuwangi-hijau','gambar_tentang','vendor/images/bwh-logo.png');
$deskripsi_tentang=StaticContent::getContent('banyuwangi-hijau','deskripsi_tentang',"- Deskripsi Kosong -");
$title_layanan_persampahan=StaticContent::getContent('banyuwangi-hijau','title_layanan_persampahan',"Layanan Persampahan");
$youtube_layanan_persampahan=StaticContent::getContent('banyuwangi-hijau','youtube_layanan_persampahan',"https://www.youtube.com/embed/JKOU6ddb4w4");
$nama_divisi=StaticContent::getContent('banyuwangi-hijau','nama_divisi',"KOMPONEN PROGRAM");
$contact_layanan_persampahan=StaticContent::getContent('banyuwangi-hijau','contact_layanan_persampahan',"085234104447");
$deskripsi_layanan_persampahan=StaticContent::getContent('banyuwangi-hijau','deskripsi_layanan_persampahan',"- Deskripsi Kosong -");
$footer_title_bwh=StaticContent::getContent('banyuwangi-hijau','footer_title_bwh',"DINAS LINGKUNGAN HIDUP KABUPATEN BANYUWANGI");
$footer_address_bwh=StaticContent::getContent('banyuwangi-hijau','footer_address_bwh',"-JALAN WIJAYA KUSUMA NO 102");
$footer_contact_bwh=StaticContent::getContent('banyuwangi-hijau','footer_contact_bwh',"(03333) 424113");
$footer_logo_bwh=StaticContent::getContent('banyuwangi-hijau','footer_logo_bwh',"vendor/images/bwh-logo.png");
$link_instagram_bwh=StaticContent::getContent('banyuwangi-hijau','link_instagram_bwh',"https://www.instagram.com/dlh.banyuwangi/");
$link_facebook_bwh=StaticContent::getContent('banyuwangi-hijau','link_facebook_bwh',"https://www.facebook.com/DLHBanyuwangi/");
$link_youtube_bwh=StaticContent::getContent('banyuwangi-hijau','link_youtube_bwh',"https://www.youtube.com/watch?v=eip4WZqymiY");
@endphp
@extends('admin.layout.das')
@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ucwords($admin)}} / {{ucwords($page)}} / </span>
    {{ucwords($action)}}
</h4>

<form action="{{route('banyuwangi-hijau.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card">
        <h5 class="card-header">Tujuan Banyuwangi Hijau</h5>
        <div class="card-body">
            <div class="row mb-3">
                <label for="title_tujuan" class="col-sm-2 col-form-label">Title Tujuan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('title_tujuan') is-invalid @enderror"
                        id="title_tujuan" name="title_tujuan" placeholder="title_tujuan" value="{{$title_tujuan}}" />
                    <div id="title_tujuanFeedback" class="invalid-feedback">
                        @error('title_tujuan') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="gambar_tujuan" class="col-sm-2 col-form-label">Gambar Tujuan</label>
                <div class="col-sm-10">
                    <input type="file" class="dropify" id="gambar_tujuan" name="gambar_tujuan"
                        data-allowed-file-extensions="jpg png jpeg" data-default-file="{{asset($gambar_tujuan)}}" />
                    <div id="gambar_tujuanFeedback" class="invalid-feedback">
                        @error('gambar_tujuan') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi_tujuan" class="col-sm-2 col-form-label">Deskripsi Tujuan</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control ckeditor @error('deskripsi_tujuan') is-invalid @enderror"
                        id="ckeditor" name="deskripsi_tujuan"
                        placeholder="Isi deskripsi_tujuan">{{$deskripsi_tujuan}}</textarea>
                    <div id="deskripsi_tujuanFeedback" class="invalid-feedback">
                        @error('deskripsi_tujuan') {{$message}} @enderror
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-0" />
        <h5 class="card-header">Tentang Banyuwangi Hijau</h5>
        <div class="card-body">
            <div class="row mb-3">
                <label for="title_tentang" class="col-sm-2 col-form-label">Title Tentang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('title_tentang') is-invalid @enderror"
                        id="title_tentang" name="title_tentang" placeholder="title_tentang"
                        value="{{$title_tentang}}" />
                    <div id="title_tentangFeedback" class="invalid-feedback">
                        @error('title_tentang') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="gambar_tentang" class="col-sm-2 col-form-label">Gambar Tentang</label>
                <div class="col-sm-10">
                    <input type="file" class="dropify" id="gambar_tentang" name="gambar_tentang"
                        data-allowed-file-extensions="jpg png jpeg" data-default-file="{{asset($gambar_tentang)}}" />
                    <div id="gambar_tentangFeedback" class="invalid-feedback">
                        @error('gambar_tentang') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi_tentang" class="col-sm-2 col-form-label">Deskripsi Tentang</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control ckeditor @error('deskripsi_tentang') is-invalid @enderror"
                        id="ckeditor" name="deskripsi_tentang"
                        placeholder="Isi deskripsi_tentang">{{$deskripsi_tentang}}</textarea>
                    <div id="layanan_persampahanFeedback" class="invalid-feedback">
                        @error('deskripsi_tentang') {{$message}} @enderror
                    </div>
                </div>
            </div>
        </div>


        <hr class="m-0" />
        <h5 class="card-header">Layanan Persampahan</h5>
        <div class="card-body">
            <div class="row mb-3">
                <label for="title_layanan_persampahan" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title_layanan_persampahan" class="form-control @error('title_layanan_persampahan') is-invalid @enderror"
                    value="{{$title_layanan_persampahan}}"
                    placeholder="title"
                    />
                </div>
                <div id="title_layanan_persampahanFeedback" class="invalid-feedback">
                    @error('title_layanan_persampahan') {{$message}} @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="contact_layanan_persampahan" class="col-sm-2 col-form-label">Contact</label>
                <div class="col-sm-10">
                    <input type="text" name="contact_layanan_persampahan" class="form-control @error('contact_layanan_persampahan') is-invalid @enderror"
                    value="{{$contact_layanan_persampahan}}"
                        placeholder="Contact Layanan Persampahan"
                        />
                </div>
                <div id="contact_layanan_persampahanFeedback" class="invalid-feedback">
                    @error('contact_layanan_persampahan') {{$message}} @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_divisi" class="col-sm-2 col-form-label">Nama Divisi</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_divisi" class="form-control @error('nama_divisi') is-invalid @enderror"
                    value="{{$nama_divisi}}"
                        placeholder="Nama Divisi"
                        />
                </div>
                <div id="nama_divisiFeedback" class="invalid-feedback">
                    @error('nama_divisi') {{$message}} @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="youtube_layanan_persampahan" class="col-sm-2 col-form-label">Link Youtube</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('youtube_layanan_persampahan') is-invalid @enderror"
                        placeholder="URL" name="youtube_layanan_persampahan" id="basic-url1"
                        value={{$youtube_layanan_persampahan}}
                        aria-describedby="basic-addon14" />
                </div>
                <div id="youtube_layanan_persampahanFeedback" class="invalid-feedback">
                    @error('youtube_layanan_persampahan') {{$message}} @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi_layanan_persampahan" class="col-sm-2 col-form-label">Layanan Persampahan</label>
                <div class="col-sm-10">
                    <textarea type="text"
                        class="form-control ckeditor @error('deskripsi_layanan_persampahan') is-invalid @enderror"
                        id="ckeditor" name="deskripsi_layanan_persampahan"
                        placeholder="Isi deskripsi_layanan_persampahan">{{$deskripsi_layanan_persampahan}}</textarea>
                    <div id="layanan_persampahanFeedback" class="invalid-feedback">
                        @error('deskripsi_layanan_persampahan') {{$message}} @enderror
                    </div>
                </div>
            </div>
        </div>


        <hr class="m-0" />
        <h5 class="card-header">Footer</h5>
        <div class="card-body">
            <div class="row mb-3">
                <label for="footer_title_bwh" class="col-sm-2 col-form-label">Footer Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('footer_title_bwh') is-invalid @enderror"
                        id="footer_title_bwh" name="footer_title_bwh" placeholder="footer_title_bwh"
                        value="{{$footer_title_bwh}}" />
                    <div id="footer_title_bwhFeedback" class="invalid-feedback">
                        @error('footer_title') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="footer_address_bwh" class="col-sm-2 col-form-label">Footer Address</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control @error('footer_address_bwh') is-invalid @enderror"
                        id="footer_address_bwh" name="footer_address_bwh" placeholder="footer_address_bwh"
                        value="{{$footer_address_bwh}}" />
                    <div id="footer_address_bwhFeedback" class="invalid-feedback">
                        @error('footer_address_bwh') {{$message}} @enderror
                    </div>
                </div>
                <label for="footer_contact_bwh" class="col-sm-2 col-form-label">Footer Contact</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control @error('footer_contact_bwh') is-invalid @enderror"
                        id="footer_contact_bwh" name="footer_contact_bwh" placeholder="footer_contact_bwh"
                        value="{{$footer_contact_bwh}}" />
                    <div id="footer_contact_bwhFeedback" class="invalid-feedback">
                        @error('footer_contact_bwh') {{$message}} @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="footer_logo_bwh" class="col-sm-2 col-form-label">Footer Logo</label>
                <div class="col-sm-10">
                    <input type="file" class="dropify" id="footer_logo_bwh" name="footer_logo_bwh"
                        data-allowed-file-extensions="jpg png jpeg"
                        data-default-file="{{asset($footer_logo_bwh)}}" />
                    <div id="footer_logo_bwhFeedback" class="invalid-feedback">
                        @error('footer_logo_bwh') {{$message}} @enderror
                    </div>
                </div>
            </div>
        </div>

        <hr class="m-0" />
        <h5 class="card-header">LINK</h5>
        <div class="card-body">

            <div class="row mb-3">
                <label for="link_facebook_bwh" class="col-sm-2 col-form-label">Link Facebook</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control @error('link_facebook_bwh') is-invalid @enderror"
                            placeholder="URL" id="basic-url1"
                            value="{{$link_facebook_bwh}}"
                            name="link_facebook_bwh"
                            aria-describedby="basic-addon14" />
                    </div>
                    <div id="link_facebook_bwhFeedback" class="invalid-feedback">
                        @error('link_facebook_bwh') {{$message}} @enderror
                    </div>
            </div>

            <div class="row mb-3">
                <label for="link_instagram_bwh" class="col-sm-2 col-form-label">Link Instagram</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control @error('link_instagram_bwh') is-invalid @enderror"
                            placeholder="URL" id="basic-url1"
                            value="{{$link_instagram_bwh}}"
                            name="link_instagram_bwh"
                            aria-describedby="basic-addon14" />
                    </div>
                    <div id="link_instagram_bwhFeedback" class="invalid-feedback">
                        @error('link_instagram_bwh') {{$message}} @enderror
                    </div>
            </div>

            <div class="row mb-3">
                <label for="link_youtube_bwh" class="col-sm-2 col-form-label">Link Youtube</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control @error('link_youtube_bwh') is-invalid @enderror"
                            placeholder="URL" id="basic-url1"
                            name="link_youtube_bwh"
                            value="{{$link_youtube_bwh}}"
                            aria-describedby="basic-addon14" />
                    </div>
                    <div id="link_youtube_bwhFeedback" class="invalid-feedback">
                        @error('link_youtube_bwh') {{$message}} @enderror
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