@extends('layouts.admin')

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Beasiswa</h1>
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
         <label for="title">Title</label>
         <input type="text" class="form-control" name="title" value="{{ $data->title }}" placeholder="Title">
       </div>
       <div class="form-group">
        <label for="tenggat">Tenggat</label>
        <input type="text" class="form-control" name="tenggat" value="{{ $data->tenggat }}" placeholder="Tenggat">
      </div>
      <div class="form-group">
        <label for="description">Deskripsi</label>
        <input type="text" class="form-control" name="description" value="{{ $data->description }}" placeholder="Deskripsi">
      </div>
      <div class="form-group">
        <label for="image">Berkas</label> <br>
        <input type="file" name="image">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Simpan</button>
     </form>
   </div>
 </div>



</div>
@endsection