@extends('layouts.user')

@section('title')
  Pengumuman
@endsection

@section('content')
  <div class="row">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellscaping="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Universitas</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <th>{{ $item->id }}</th>
              <th>{{ $item->nama }}</th>
              <th>{{ $item->universitas }}</th>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection