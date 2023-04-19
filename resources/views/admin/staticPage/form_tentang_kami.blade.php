@extends('admin.layout.das')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ucwords($admin)}} / {{ucwords($page)}} / </span>
    {{ucwords($action)}}
</h4>
@php
$deskripsi_visi=StaticContent::getContent('tentang-kami','deskripsi_visi',"TERWUJUDNYA KABUPATEN BANYUWANGI TERBEBAS DARI PENCEMARAN DAN KERUSAKAN LINGKUNGAN HIDUP");
$deskripsi_misi=StaticContent::getContent('tentang-kami','deskripsi_misi','mengendalikan pencemaran baik tanah, udara dan air & meningkatkan kualitas sumber daya alam dan lingkungan hidup');
$deskripsi_tugas_pokok=StaticContent::getContent('tentang-kami','deskripsi_tugas_pokok',"Dinas Lingkungan Hidup mempunyai tugas pokok melaksanakan penyusunan dan pelaksanaan kebijakan daerah di bidang lingkungan hidup.");
$deskripsi_fungsi1=StaticContent::getContent('tentang-kami','deskripsi_fungsi1',"Perumusan kebijakan teknis di bidang lingkungan hidup");
$deskripsi_fungsi2=StaticContent::getContent('tentang-kami','deskripsi_fungsi2',"Pengkoordinasian penyusunan tugas di bidang lingkungan hidup");
$deskripsi_fungsi3=StaticContent::getContent('tentang-kami','deskripsi_fungsi3',"Pembinaan dan pelaksanaan tugas di bidang lingkungan hidup");
$deskripsi_fungsi4=StaticContent::getContent('tentang-kami','deskripsi_fungsi4',"Pelaksanaan tugas lain yang diberikan oleh Bupati sesuai dengan tugas dan fungsinya");
@endphp
<form action="{{route('tentang-kami.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card">
        <h5 class="card-header">Visi dan Misi</h5>
        <div class="card-body">
            <div class="row mb-3">
                <label for="deskripsi_visi" class="col-sm-2 col-form-label">Visi</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control @error('deskripsi_visi') is-invalid @enderror"
                         name="deskripsi_visi"
                        placeholder="Isi deskripsi_visi">{{$deskripsi_visi}}</textarea>
                    <div id="deskripsi_visiFeedback" class="invalid-feedback">
                        @error('deskripsi_visi') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi_misi" class="col-sm-2 col-form-label">Misi</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control @error('deskripsi_misi') is-invalid @enderror"
                         name="deskripsi_misi"
                        placeholder="Isi deskripsi_misi">{{$deskripsi_misi}}</textarea>
                    <div id="deskripsi_misiFeedback" class="invalid-feedback">
                        @error('deskripsi_misi') {{$message}} @enderror
                    </div>
                </div>
            </div>


        </div>


        <hr class="m-0" />
        <h5 class="card-header">TUPOKSI</h5>
        <div class="card-body">
            <div class="row mb-3">
                <label for="deskripsi_tugas_pokok" class="col-sm-2 col-form-label">Deskripsi Tugas Pokok</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control  @error('deskripsi_tugas_pokok') is-invalid @enderror"
                         name="deskripsi_tugas_pokok"
                        placeholder="Isi deskripsi_tugas_pokok">{{$deskripsi_tugas_pokok}}</textarea>
                    <div id="deskripsi_tugas_pokokFeedback" class="invalid-feedback">
                        @error('deskripsi_tugas_pokok') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi_fungsi1" class="col-sm-2 col-form-label">Deskripsi Fungsi 1</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control  @error('deskripsi_fungsi1') is-invalid @enderror"
                         name="deskripsi_fungsi1"
                        placeholder="Isi deskripsi_fungsi1">{{$deskripsi_fungsi1}}</textarea>
                    <div id="deskripsi_fungsi1Feedback" class="invalid-feedback">
                        @error('deskripsi_fungsi1') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi_fungsi2" class="col-sm-2 col-form-label">Deskripsi Fungsi 2</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control  @error('deskripsi_fungsi2') is-invalid @enderror"
                         name="deskripsi_fungsi2"
                        placeholder="Isi deskripsi_fungsi2">{{$deskripsi_fungsi2}}</textarea>
                    <div id="deskripsi_fungsi2Feedback" class="invalid-feedback">
                        @error('deskripsi_fungsi2') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi_fungsi3" class="col-sm-2 col-form-label">Deskripsi Fungsi 3</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control  @error('deskripsi_fungsi3') is-invalid @enderror"
                         name="deskripsi_fungsi3"
                        placeholder="Isi deskripsi_fungsi3">{{$deskripsi_fungsi3}}</textarea>
                    <div id="deskripsi_fungsi3Feedback" class="invalid-feedback">
                        @error('deskripsi_fungsi3') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi_fungsi4" class="col-sm-2 col-form-label">Deskripsi Fungsi 4</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control  @error('deskripsi_fungsi4') is-invalid @enderror"
                         name="deskripsi_fungsi4"
                        placeholder="Isi deskripsi_fungsi4">{{$deskripsi_fungsi4}}</textarea>
                    <div id="deskripsi_fungsi4Feedback" class="invalid-feedback">
                        @error('deskripsi_fungsi4') {{$message}} @enderror
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
</div>
@endsection