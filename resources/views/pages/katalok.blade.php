@extends('layouts.user')

@section('title')
  Katalok Beasiswa
@endsection

@section('content')
<div class="container">
    <div class="tittle">
      <h3 class="text-center">Katalog Beasiswa</h3>
      <p class="text-center">Pilihlah Beasiswa yang ingin anda daftar</p>
    </div>

    @foreach ($data as $item)
    <div class="row content-beasiswa">
      <div class="col-xl-4 img-content">
        <img src="{{ $item->image }}" class="img-fluid">
      </div>
      <div class="col-xl-8">
        <h3>{{ $item->title }}</h3>
        <p style="color: grey; margin-top: -5px;">Tenggat: {{ $item->tenggat }}</p>
        <p class="text-justify">{{ substr($item->description,1,200) }}</p>
        <a href="{{ url('info/'.$item->id) }}" class="btn btn-secondary tombol">Pilih</a>
        <a href="{{ url('pengumuman') }}" class="btn btn-primary tombol">Lihat Penerima</a>
      </div>
    </div>
    @endforeach
  </div>
@endsection
