@extends('admin.layout.das')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ucwords($admin)}} / {{ucwords($page)}} / </span>
    {{ucwords($action)}}
</h4>
<div class="card">
    <div class="card-body">
        <form action="{{$action=='create'?url($admin.'/'.$page):url($admin.'/'.$page.'/'.$agenda->id)}}" method="POST">
            @csrf
            @method($action=="create"?'POST':'PUT')


            <div class="row mb-3">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul"
                        placeholder="judul" value="@isset($agenda){{$agenda->judul}}@endisset" />
                    <div id="judulFeedback" class="invalid-feedback">
                        @error('judul') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="tanggal_mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control @error('tanggal_mulai') is-invalid @enderror" id="tanggal_mulai" name="tanggal_mulai"
                        placeholder="tanggal_mulai" value="@isset($agenda){{date('Y-m-d', strtotime($agenda->tanggal_mulai))}}@endisset" />
                    <div id="tanggal_mulaiFeedback" class="invalid-feedback">
                        @error('tanggal_mulai') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="tanggal_selesai" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control @error('tanggal_selesai') is-invalid @enderror" id="tanggal_selesai" name="tanggal_selesai"
                        placeholder="tanggal_selesai" value="@isset($agenda){{date('Y-m-d', strtotime($agenda->tanggal_selesai))}}@endisset" />
                    <div id="tanggal_selesaiFeedback" class="invalid-feedback">
                        @error('tanggal_selesai') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                        name="deskripsi" placeholder="Isi deskripsi">@isset($agenda){{$agenda->deskripsi}}@endisset</textarea>
                    <div id="deskripsiFeedback" class="invalid-feedback">
                        @error('deskripsi') {{$message}} @enderror
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