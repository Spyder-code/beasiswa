@extends('layouts.user')

@section('title')
  Informasi Beasiswa
@endsection

@section('content')
<div class="container">
    <div class="breadcumb mt-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detail Beasiswa</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container">
    <div class="tittle">
      <h3>{{ $beasiswa->title }}.</h3>
      <p class="text-justify">
        {{ $beasiswa->description }}
      </p>
      <div class="row">
        <div class="col-xl-1 col-sm-2 mt-2">
          <a href="{{ url('/') }}" class="btn btn-warning tombol">Cancel</a>
        </div>
        <div class="col-mxl-1 col-sm-2 mt-2">
          <a href="{{ url('form/'.$beasiswa->id) }}" class="btn btn-secondary tombol">Daftar</a>
        </div>
      </div>
    </div>
  </div>
  @endsection
