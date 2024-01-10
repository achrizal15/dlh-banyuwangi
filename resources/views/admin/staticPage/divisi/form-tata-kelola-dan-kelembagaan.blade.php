@php
$title_tata_kelola_dan_kelembagaan=StaticContent::getContent('tata-kelola-dan-kelembagaan','title_tata_kelola_dan_kelembagaan',"Tata Kelola dan Kelembagaan");
$deskripsi_tata_kelola_dan_kelembagaan=StaticContent::getContent('tata-kelola-dan-kelembagaan','deskripsi_tata_kelola_dan_kelembagaan','Data Deskripsi Tidak Ditemukan');
$point1=StaticContent::getContent('tata-kelola-dan-kelembagaan','point1',"Tarif retribusi sampah");
$point2=StaticContent::getContent('tata-kelola-dan-kelembagaan','point2',"Kelembagaan");
$point3=StaticContent::getContent('tata-kelola-dan-kelembagaan','point3',"Komitmen kabupaten dan desa");
$point4=StaticContent::getContent('tata-kelola-dan-kelembagaan','point4',"Dukungan pendanaan pemerintah");
@endphp
@extends('admin.layout.das')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ucwords($admin)}} / {{ucwords($page)}} / {{ucwords($action)}}</span>
     / Tata Kelola dan Kelembagaan
</h4>

<form action="{{route('tata-kelola-dan-kelembagaan.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card">
        <h5 class="card-header">Tata Kelola dan Kelembagaan</h5>
        <div class="card-body">
            <div class="row mb-3">
                <label for="title_tata_kelola_dan_kelembagaan" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('title_tata_kelola_dan_kelembagaan') is-invalid @enderror"
                        id="title_tata_kelola_dan_kelembagaan" name="title_tata_kelola_dan_kelembagaan" placeholder="title"
                        value="{{$title_tata_kelola_dan_kelembagaan}}" />
                    <div id="title_tata_kelola_dan_kelembagaanFeedback" class="invalid-feedback">
                        @error('title_tata_kelola_dan_kelembagaan') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi_tata_kelola_dan_kelembagaan" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control ckeditor @error('deskripsi_tata_kelola_dan_kelembagaan') is-invalid @enderror"
                        id="ckeditor" name="deskripsi_tata_kelola_dan_kelembagaan"
                        placeholder="Isi deskripsi_tata_kelola_dan_kelembagaan">{{$deskripsi_tata_kelola_dan_kelembagaan}}</textarea>
                    <div id="layanan_persampahanFeedback" class="invalid-feedback">
                        @error('deskripsi_tata_kelola_dan_kelembagaan') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="point1" class="col-sm-2 col-form-label">Point 1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('point1') is-invalid @enderror"
                        id="point1" name="point1" placeholder="Point 1"
                        value="{{$point1}}" />
                    <div id="point1Feedback" class="invalid-feedback">
                        @error('point1') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="point2" class="col-sm-2 col-form-label">Point 2</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('point2') is-invalid @enderror"
                        id="point2" name="point2" placeholder="Point 2"
                        value="{{$point2}}" />
                    <div id="point2Feedback" class="invalid-feedback">
                        @error('point2') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="point3" class="col-sm-2 col-form-label">Point 3</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('point3') is-invalid @enderror"
                        id="point3" name="point3" placeholder="title"
                        value="{{$point3}}" />
                    <div id="point3Feedback" class="invalid-feedback">
                        @error('point3') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="point4" class="col-sm-2 col-form-label">Point 4</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('point4') is-invalid @enderror"
                        id="point4" name="point4" placeholder="title"
                        value="{{$point4}}" />
                    <div id="point4Feedback" class="invalid-feedback">
                        @error('point4') {{$message}} @enderror
                    </div>
                </div>
            </div>
       
            <div class="row justify-content-end mb-4">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>

</form>
</div>
</div>
@endsection