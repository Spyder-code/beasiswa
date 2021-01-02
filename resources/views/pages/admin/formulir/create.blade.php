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
  @if ($message = Session::get('success'))
  <div class="row">
      <div class="col mt-3">
          <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong>{{ $message }}</strong>
          </div>
      </div>
  </div>
@endif
 <div class="card shadow">
   <div class="card-body">
     <form action="{{ route('pengumuman.store') }}" method="post">
        @csrf
       <div class="form-group">
         <label for="nama">Nama</label>
         <input type="text" class="form-control" name="nama" placeholder="Nama">
       </div>
       <div class="form-group">
        <label for="universitas">Universitas</label>
        <input type="text" class="form-control" name="universitas" placeholder="universitas">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Simpan</button>
     </form>
   </div>
 </div>



</div>
@endsection
