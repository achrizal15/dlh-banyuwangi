@extends('admin.layout.das')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ucwords($admin)}} / {{ucwords($page)}} / </span>
    {{ucwords($action)}}
</h4>
<div class="card">
    <div class="card-body">
        <form action="{{$action=='create'?url($admin.'/'.$page):url($admin.'/'.$page.'/'.$mitraDLH->id)}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method($action=="create"?'POST':'PUT')


            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                        placeholder="name" value="@isset($mitraDLH){{$mitraDLH->name}}@endisset" />
                    <div id="nameFeedback" class="invalid-feedback">
                        @error('name') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="link" class="col-sm-2 col-form-label">Link</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link"
                        placeholder="link" value="@isset($mitraDLH){{$mitraDLH->link}}@endisset" />
                    <div id="linkFeedback" class="invalid-feedback">
                        @error('link') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="file" class="dropify" id="gambar" name="gambar" multiple
                         data-allowed-file-extensions="jpg png jpeg" data-default-file="@isset($mitraDLH){{asset('storage/'.$mitraDLH->gambar)}}@endisset"/>
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