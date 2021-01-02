@extends('layouts.user')

@section('title')
  Form Pendaftaran
@endsection

@section('content')
  <!-- form register -->
  <div class="container">
    <div class="tittle-form mt-5">
      <h3>{{ $beasiswa->title }}</h3>
      <p>Untuk Mahasiswa</p>
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
        <form action="{{ route('user.form.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input name="nama" type="text" value="{{ old('nama') }}" class="form-control" id="nama" placeholder="Nama lengkap">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" value="{{ old('email') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="form-group">
            <label for="universitas">Universitas</label>
            <input name="universitas" type="text" value="{{ old('universitas') }}" class="form-control" id="universitas" placeholder="Nama Universitas">
          </div>
          <div class="form-group">
            <label for="prodi">Program Pendidikan</label>
            <input name="prodi" type="text" class="form-control" value="{{ old('prodi') }}" id="prodi" placeholder="Nama Program Pendidikan">
          </div>
          <div class="form-group">
            <label for="jenpen">Jenjenag Pendidikan</label>
            <input name="jenpen" type="text" class="form-control" value="{{ old('jenpen') }}" id="jenpen" placeholder="S1 / S2 / S3">
          </div>
          <div class="form-group">
            <label for="telpon">No. Telpon</label>
            <input name="telpon" type="number" class="form-control" value="{{ old('telpon') }}" id="telpon" placeholder="No. tlp yang bisa dihubungi">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat tempat tinggal</label>
            <textarea name="alamat" class="form-control" id="alamat" rows="5" aria-describedby="sesuaiktp">{{ old('alamat') }}</textarea><small
              id="sesuaiktp" class="form-text text-muted">Alamat sesuai ktp anda.</small>
            <div class="form-group mt-2">
              <label for="berkas">Upload Berkas</label>
              <input name="berkas1" type="file" class="form-control-file">
            </div>
            <div class="form-group mt-2">
              <label for="berkas">Upload Berkas</label>
              <input name="berkas2" type="file" class="form-control-file">
            </div>
            <div class="form-group mt-2">
              <label for="berkas">Upload Berkas</label>
              <input name="berkas3" type="file" class="form-control-file">
            </div>
          </div>
          <div class="row">
            <div class="col-xl-1 col-sm-2 mt-2">
              <a href="/" class="btn btn-warning tombol">Cancel</a>
            </div>
            <div class="col-mxl-1 col-sm-2 mt-2">
              <button type="submit" class="btn btn-secondary tombol">Kirim</a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="kirimmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body text-center">
          <img src="img/Icon.success.png">
          <h3 class="mt-4 mb-2">Semoga Beruntung</h3>
          <p>Data yang anda berikan sudah terkirim. kami akan menghubungi jika anda terpilih. <br>Terima Kasih</p>
          <a href="/" class="btn btn-secondary tombol">DONE</a>
        </div>
      </div>
    </div>
  </div>
  @endsection
