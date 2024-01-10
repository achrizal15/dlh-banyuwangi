@extends('admin.layout.das')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ucwords($admin)}} / {{ucwords($page)}} / </span>
    {{ucwords($action)}}
</h4>
<div class="card">
    <div class="card-body">
        <form action="{{$action=='create'?url($admin.'/'.$page):url($admin.'/'.$page.'/'.$galery->id)}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method($action=="create"?'POST':'PUT')


            <div class="row mb-3">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul"
                        placeholder="judul" value="@isset($galery){{$galery->judul}}@endisset" />
                    <div id="judulFeedback" class="invalid-feedback">
                        @error('judul') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control ckeditor @error('deskripsi') is-invalid @enderror" id="ckeditor"
                        name="deskripsi"
                        placeholder="Isi deskripsi">@isset($galery){{$galery->deskripsi}}@endisset</textarea>
                    <div id="deskripsiFeedback" class="invalid-feedback">
                        @error('deskripsi') {{$message}} @enderror
                    </div>
                </div>
            </div>

            <input type="hidden" class="form-control @error('link') is-invalid @enderror" id="link" name="link"
                placeholder="link halaman" value="@isset($galery){{$galery->link}}@endisset" />


            <div class="row mb-3">
                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="file" class="dropify" id="gambar" name="gambar" multiple
                         data-allowed-file-extensions="jpg png jpeg" data-default-file="@isset($galery){{asset('storage/'.$galery->gambar)}}@endisset"/>
                    <div id="gambarFeedback" class="invalid-feedback">
                        @error('gambar') {{$message}} @enderror
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
        </form>
    </div>



</div>
</div>
@endsection