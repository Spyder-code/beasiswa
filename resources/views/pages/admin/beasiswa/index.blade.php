@extends('layouts.admin')

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Beasiswa</h1>
    <a href="{{ url('admin/tambah-beasiswa') }}" class="btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Beasiswa
    </a>
</div>

<div class="row">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Tenggat</th>
            <th>Deskripsi</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($items as $item)
          <tr>
            <th>{{ $item->id }}</th>
            <th>{{ $item->title }}</th>
            <th>{{ $item->tenggat }}</th>
            <th>{{ $item->description }}</th>
            <th>{{ $item->image }}</th>
            <th>
              <a href="{{ url('admin/edit-beasiswa/'.$item->id) }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>Edit Beasiswa
              </a>
              <form method="post" action="{{ url('admin/delete') }}">
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