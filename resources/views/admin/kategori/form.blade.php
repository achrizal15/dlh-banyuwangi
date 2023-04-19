@extends('admin.layout.das')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ucwords($admin)}} / {{ucwords($page)}} / </span>
    {{ucwords($action)}}
</h4>
<div class="card">
    <div class="card-body">
        <form action="{{$action=='create'?url($admin.'/'.$page):url($admin.'/'.$page.'/'.$category->id)}}" method="POST">
            @csrf
            @method($action=="create"?'POST':'PUT')


            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        placeholder="nama" value="@isset($category){{$category->nama}}@endisset" />
                    <div id="namaFeedback" class="invalid-feedback">
                        @error('nama') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan"
                        name="keterangan" placeholder="Isi keterangan">@isset($category){{$category->keterangan}}@endisset</textarea>
                    <div id="keteranganFeedback" class="invalid-feedback">
                        @error('keterangan') {{$message}} @enderror
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