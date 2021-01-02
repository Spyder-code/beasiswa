@extends('layouts.user')

@section('title')
  Home
@endsection

@section('content')
  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Mari Berkembang dan Sukses Bersama Demi <span>INDONESIA</span> Lebih Baik.</h1>
    </div>
  </div>
  <!-- akhir jumbotron -->

  <!-- Content -->
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

    <div class="lebih-banyak text-center">
      <!-- {{ $data->links() }} -->
      <a href="{{ url('katalok') }}">lebih banyak</a>
    </div>

    <div class="sponsor-kita text-center">
      <h3>Sponsor Kita</h3>
    </div>

    <div class="row sponsor">
      <div class="col-xl-4 mt-2"><img src="img/logo1.png" class="img-fluid"></div>
      <div class="col-xl-4 mt-2"><img src="img/logo1.png" class="img-fluid"></div>
      <div class="col-xl-4 mt-2"><img src="img/logo1.png" class="img-fluid"></div>
    </div>
  </div>
  @endsection
