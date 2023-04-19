@php
$title_komunikasi_perubahan_perilaku=StaticContent::getContent('komunikasi-perubahan-perilaku','title_komunikasi_perubahan_perilaku',"Komunikasi Perubahan Perilaku");
$deskripsi_komunikasi_perubahan_perilaku=StaticContent::getContent('komunikasi-perubahan-perilaku','deskripsi_komunikasi_perubahan_perilaku','Data Deskripsi Tidak Ditemukan');
$point1=StaticContent::getContent('komunikasi-perubahan-perilaku','point1',"Pengembangan strategi");
$point2=StaticContent::getContent('komunikasi-perubahan-perilaku','point2',"Penguatan kapasitas");
$point3=StaticContent::getContent('komunikasi-perubahan-perilaku','point3',"Implementasi dan monitoring");
@endphp
@extends('admin.layout.das')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ucwords($admin)}} / {{ucwords($page)}} / {{ucwords($action)}}</span>
     / Komunikasi Perubahan Perilaku
</h4>

<form action="{{route('komunikasi-perubahan-perilaku.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card">
        <h5 class="card-header">Komunikasi Perubahan Perilaku</h5>
        <div class="card-body">
            <div class="row mb-3">
                <label for="title_komunikasi_perubahan_perilaku" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('title_komunikasi_perubahan_perilaku') is-invalid @enderror"
                        id="title_komunikasi_perubahan_perilaku" name="title_komunikasi_perubahan_perilaku" placeholder="title"
                        value="{{$title_komunikasi_perubahan_perilaku}}" />
                    <div id="title_komunikasi_perubahan_perilakuFeedback" class="invalid-feedback">
                        @error('title_komunikasi_perubahan_perilaku') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi_komunikasi_perubahan_perilaku" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control ckeditor @error('deskripsi_komunikasi_perubahan_perilaku') is-invalid @enderror"
                        id="ckeditor" name="deskripsi_komunikasi_perubahan_perilaku"
                        placeholder="Isi deskripsi_komunikasi_perubahan_perilaku">{{$deskripsi_komunikasi_perubahan_perilaku}}</textarea>
                    <div id="layanan_persampahanFeedback" class="invalid-feedback">
                        @error('deskripsi_komunikasi_perubahan_perilaku') {{$message}} @enderror
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