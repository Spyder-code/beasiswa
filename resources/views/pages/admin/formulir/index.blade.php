@extends('layouts.admin')

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pendaftar</h1>
    <a href="{{ route('pengumuman.create') }}" class="btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i>Buat pengumuman
    </a>
</div>

<div class="row">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Universitas</th>
            <th>Prodi</th>
            <th>Jenjang Pendidikan</th>
            <th>Alamat</th>
            <th>Berkas 1</th>
            <th>Berkas 2</th>
            <th>Berkas 3</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($items as $item)
          <tr>
            <th>{{ $item->id }}</th>
            <th>{{ $item->nama }}</th>
            <th>{{ $item->universitas }}</th>
            <th>{{ $item->prodi }}</th>
            <th>{{ $item->jenpen }}</th>
            <th>{{ $item->alamat }}</th>
            <th> <a href="{{ url('/').$item->berkas1 }}">Download</a> </th>
            <th> <a href="{{ url('/').$item->berkas2 }}">Download</a> </th>
            <th> <a href="{{ url('/').$item->berkas3 }}">Download</a> </th>
            <th>
              <a href="{{ url('admin/edit-beasiswa/'.$item->id) }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>Edit Beasiswa
              </a>
              <form method="post" action="{{ url('admin/delete/form') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $item->id }}">
                <button class="btn btn-danger" type="submit">Hapus</button>
              </form>
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>



</div>
@endsection
