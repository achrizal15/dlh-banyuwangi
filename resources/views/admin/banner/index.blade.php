@extends('admin.layout.das')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Banner
</h4>

<div class="card">

    <div class="card-body">
        @if(session("message"))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{session("message")}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>@endif
        <div class="table-responsive">
        <table class="table datatable" data-url="{{route('banners.create')}}">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Link</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($banner as $item)
                <tr>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->link}}</td>
                    <td><a target="_blank" href="{{asset('/storage/'.$item->gambar)}}"><img src="{{asset('/storage/'.$item->gambar)}}" alt="" width="100" height="25"></a></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('banners.edit',$item->id)}}"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <form action="{{route('banners.destroy',$item->id)}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="dropdown-item" href="javascript:void(0);"><i
                                            class="bx bx-trash me-1"></i>
                                        Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection