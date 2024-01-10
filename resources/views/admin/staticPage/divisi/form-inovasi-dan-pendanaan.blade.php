@php
$title_inovasi_dan_pendanaan=StaticContent::getContent('inovasi-pendanaan','title_inovasi_dan_pendanaan',"Inovasi Dan Pendanaan");
$deskripsi_inovasi_dan_pendanaan=StaticContent::getContent('inovasi-pendanaan','deskripsi_inovasi_dan_pendanaan','Data Deskripsi Tidak Ditemukan');
$point1=StaticContent::getContent('inovasi-pendanaan','point1',"Perdagangan Komuditas");
$point2=StaticContent::getContent('inovasi-pendanaan','point2',"Sumber Pendanaan");
@endphp
@extends('admin.layout.das')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ucwords($admin)}} / {{ucwords($page)}} / {{ucwords($action)}}</span>
     / Inovasi Dan Pendanaan
</h4>

<form action="{{route('inovasi-pendanaan.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card">
        <h5 class="card-header">Inovasi Dan Pendanaan</h5>
        <div class="card-body">
            <div class="row mb-3">
                <label for="title_inovasi_dan_pendanaan" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('title_inovasi_dan_pendanaan') is-invalid @enderror"
                        id="title_inovasi_dan_pendanaan" name="title_inovasi_dan_pendanaan" placeholder="title"
                        value="{{$title_inovasi_dan_pendanaan}}" />
                    <div id="title_inovasi_dan_pendanaanFeedback" class="invalid-feedback">
                        @error('title_inovasi_dan_pendanaan') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi_inovasi_dan_pendanaan" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control ckeditor @error('deskripsi_inovasi_dan_pendanaan') is-invalid @enderror"
                        id="ckeditor" name="deskripsi_inovasi_dan_pendanaan"
                        placeholder="Isi deskripsi_inovasi_dan_pendanaan">{{$deskripsi_inovasi_dan_pendanaan}}</textarea>
                    <div id="layanan_persampahanFeedback" class="invalid-feedback">
                        @error('deskripsi_inovasi_dan_pendanaan') {{$message}} @enderror
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