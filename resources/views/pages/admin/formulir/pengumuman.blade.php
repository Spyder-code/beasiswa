@extends('layouts.admin')

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Buat Pengumuman</h1>
</div>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

 <div class="card shadow">
   <div class="card-body">
     <form action="{{ url('admin/updateBeasiswa') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $data->id }}" name="id">
       <div class="form-group">
         <label for="title">Nama</label>
         <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" placeholder="Nama">
       </div>
       <div class="form-group">
        <label for="tenggat">Universitas</label>
        <input type="text" class="form-control" name="universitas" value="{{ $data->universitas }}" placeholder="Universitas">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Simpan</button>
     </form>
   </div>
 </div>



</div>
@endsection