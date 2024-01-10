@extends('admin.layout.das')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Agenda
</h4>
<div class="card">

    <div class="card-body">
        @if(session("message"))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{session("message")}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>@endif
        <div class="table-responsive">
        <table class="table datatable" data-url="{{route('agendas.create')}}">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($agenda as $item)
                <tr>
                    <td>{{$item->judul}}</td>
                    <td>{{$item->tanggal_mulai}}</td>
                    <td>{{$item->tanggal_selesai}}</td>
                    <td>{{$item->deskripsi}}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('agendas.edit',$item->id)}}"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <form action="{{route('agendas.destroy',$item->id)}}" method="post">
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