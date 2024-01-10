@extends('admin.layout.das')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Article
</h4>

<div class="card">

    <div class="card-body">
        @if(session("message"))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{session("message")}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>@endif
        <div class="table-responsive">
        <table class="table datatable" data-url="{{route('articles.create')}}">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>tag</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Penulis</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artikel as $item)
                <tr>
                    <td class="align-top">{{$item->judul}}</td>
                    <td class="align-top">{{$item->link}}</td>
                    <td class="align-top">
                       <div style="max-width: 300px;overflow:hidden;max-height:300px">
                        {!!Str::limit($item->deskripsi,100)!!}
                       </div>
                        <a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#basicModal"
                            id="ketArtikel" data-deskripsi="{{$item->deskripsi}}">Read More</a>
                    </td>
                    <td class="align-top"><a target="_blank" href="{{asset('/storage/'.$item->gambar)}}"><img
                                src="{{asset('/storage/'.$item->gambar)}}" alt="" width="50" height="50"></a></td>
                    <td class="align-top">{{$item->created_by}}</td>
                    <td class="align-top">
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('articles.edit',$item->id)}}"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <form action="{{route('articles.destroy',$item->id)}}" method="post">
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
                <!-- Modal -->
                <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Deskripsi Lengkap</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="overflow: auto;" id="deskripsi">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection