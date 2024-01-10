@extends('admin.layout.das')
@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ucwords($admin)}} / {{ucwords($page)}} / </span>
    {{ucwords($action)}}
</h4>
<div class="card">
    <div class="card-body">
        <form action= "{{$action=='create'?url($admin.'/'.$page):url($admin.'/'.$page.'/'.$document->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method($action=="create"?'POST':'PUT')


            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        placeholder="nama" value="@isset($document){{$document->nama}}@endisset"/>
                    <div id="namaFeedback" class="invalid-feedback">
                        @error('nama') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="kategori_id" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select class="select2 form-control @error('kategori_id') is-invalid @enderror" id="kategori_id"
                        style="width: 100%" name="kategori_id">
                        <option value="" selected>Select one</option>
                        @foreach($kategori as $item)
                        <option value="{{$item->id}}" @isset($document) {{$document->kategori_id==$item->id?'selected':''}}
                            @endisset>{{$item->nama}}</option>
                        @endforeach
                    </select>
                    <div id="akun_idFeedback" class="invalid-feedback">
                        @error('kategori_id') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control ckeditor @error('keterangan') is-invalid @enderror" id="ckedtor"
                        name="keterangan" placeholder="Isi keterangan">@isset($document){{$document->keterangan}}@endisset</textarea>
                    <div id="keteranganFeedback" class="invalid-feedback">
                        @error('keterangan') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="file" class="col-sm-2 col-form-label">Dokumen</label>
                <div class="col-sm-10">
                    <input type="file" class="dropify" id="file" name="file"
                        data-allowed-file-extensions="pdf"data-default-file="@isset($document){{asset('storage/dokumen'.$document->file)}}@endisset" />
                    <div id="fileFeedback" class="invalid-feedback">
                        @error('file') {{$message}} @enderror
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