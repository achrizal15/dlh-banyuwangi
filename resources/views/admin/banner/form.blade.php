@extends('admin.layout.das')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ucwords($admin)}} / {{ucwords($page)}} / </span>
    {{ucwords($action)}}
</h4>
<div class="card">
    <div class="card-body">
        <form action="{{$action=='create'?url($admin.'/'.$page):url($admin.'/'.$page.'/'.$banner->id)}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method($action=="create"?'POST':'PUT')


            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        placeholder="nama" value="@isset($banner){{$banner->nama}}@endisset" />
                    <div id="namaFeedback" class="invalid-feedback">
                        @error('nama') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="link" class="col-sm-2 col-form-label">Link <span class="fs-sm bold">Optional</span></label>
                <div class="col-sm-10">
                <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link"
                placeholder="link halaman" value="@isset($banner){{$banner->link}}@endisset" />
                    <div id="linkFeedback" class="invalid-feedback">
                        @error('link') {{$message}} @enderror
                    </div>
                </div>
            </div>

            
                
            <div class="row mb-3">
                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="file" class="dropify" id="gambar" name="gambar"  data-allowed-file-extensions="jpg png jpeg" data-default-file="@isset($banner){{asset('storage/'.$banner->gambar)}}@endisset"/>
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