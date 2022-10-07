@extends('wakil.navbar')

@section('title')
    <title>Daftar Pengajuan</title>
@endsection

@section('nav')
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="/home-uups"><i class="bi bi-house-fill"></i> Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="/pengajuan"><i class="bi bi-people"></i> Daftar Pegajuan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="/laporan-evaluasi-diri"><i class="bi bi-people"></i>LED</a>
    </li>
@endsection

@section('content')

<form class="row g-3 mt-5" action="/register-pengajuan" method="post" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
      <label for="inputUsername" class="form-label">Program</label>
      <input type="text" name="program" class="form-control @error('program') is-invalid @enderror" id="inputUsername" value="{{ old("program") }}" autofocus required>
      @error("program")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror 
    </div>
    <div class="col-md-6">
      <label for="inputName" class="form-label">Nama Progam Studi</label>
      <input type="text" name="nama_program_studi" class="form-control @error('nama_program_studi') is-invalid @enderror" id="inputName" value="{{ old("nama_program_studi") }}" required>
      @error("nama_program_studi")
      <div class="invalid-feedback">
          {{ $message }}
      </div>
    @enderror
    </div>
    <div class="col-md-6">
        <label for="inputName" class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="inputName" value="{{ old("alamat") }}" required>
        @error("alamat")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="col-md-6">
        <label for="inputName" class="form-label">Kota/Kabupaten</label>
        <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" id="nama_unit_pengelolah" value="{{ old("kota") }}" required>
        @error("kota")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="col-md-6">
        <label for="inputName" class="form-label">Nama Unit Pengelolah</label>
        <input type="text" name="nama_unit_pengelolah" class="form-control @error('nama_unit_pengelolah') is-invalid @enderror" id="inputName" value="{{ old("nama_unit_pengelolah") }}" required>
        @error("nama_unit_pengelolah")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="col-md-6">
        <label for="inputName" class="form-label">Nama Perguruan Tinggi</label>
        <input type="text" name="nama_perguruan_tinggi" class="form-control @error('nama_perguruan_tinggi') is-invalid @enderror" id="inputName" value="{{ old("nama_perguruan_tinggi") }}" required>
        @error("nama_perguruan_tinggi")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="col-md-6">
        <label for="inputName" class="form-label">No Telepon PT</label>
        <input type="text" name="no_telepon_pt" class="form-control @error('no_telepon_pt') is-invalid @enderror" id="inputName" value="{{ old("no_telepon_pt") }}" required>
        @error("no_telepon_pt")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="col-md-6">
        <label for="inputName" class="form-label">Alamat Email PT</label>
        <input type="text" name="alamat_email_pt" class="form-control @error('alamat_email_pt') is-invalid @enderror" id="inputName" value="{{ old("alamat_email_pt") }}" required>
        @error("alamat_email_pt")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="col-md-6">
        <label for="inputName" class="form-label">Alamat Website PT</label>
        <input type="text" name="alamat_website_pt" class="form-control @error('alamat_website_pt') is-invalid @enderror" id="inputName" value="{{ old("alamat_website_pt") }}" required>
        @error("alamat_website_pt")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="col-md-6">
        <label for="inputName" class="form-label">TS (Tahun akademik penuh terakir saat pengajuan akredetasi)</label>
        <input type="text" name="ts" class="form-control @error('ts') is-invalid @enderror" id="inputName" value="{{ old("ts") }}" required>
        @error("ts")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="col-md-6">
        <label for="inputName" class="form-label">Nama Narahubung</label>
        <input type="text" name="nama_narahubung" class="form-control @error('nama_narahubung') is-invalid @enderror" id="inputName" value="{{ old("nama_narahubung") }}" required>
        @error("nama_narahubung")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="col-md-6">
        <label for="inputName" class="form-label">Telepon Seluler</label>
        <input type="text" name="telepon_seluler" class="form-control @error('telepon_seluler') is-invalid @enderror" id="inputName" value="{{ old("telepon_seluler") }}" required>
        @error("telepon_seluler")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="col-md-4">
      <label for="inputType" class="form-label">Pilih Acesor</label>
      <select id="inputType" class="form-select @error('type') is-invalid @enderror " name="id_acesor" required>
        @foreach ($asesor as $asesor) 
        <option value="{{ $asesor['id'] }}">{{ $asesor['name'] }}</option>
        @endforeach
      </select>
      @error("type")
      <div class="invalid-feedback">
          Please choose type user
      </div>
    @enderror
    </div>
    <div class="col-12 mb-3">
        <label for="formFileMultiple" class="form-label">File DED</label>
        <input class="form-control @error('file_ded') is-invalid @enderror" type="file" id="formFileMultiple" name="file_ded[]" required multiple>
        @error("file_ded")
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
        @error("file_ded.*")
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
    </div>

    {{-- <div class="mb-3">
      <label for="formFileMultiple" class="form-label">File DED</label>
      <div id="DropzoneDED">
        <div class="dz-default dz-message">
          <button class="dz-button" type="button">Drop files here to upload</button>
        </div>
      </div>
    </div> --}}

    <div class="mb-3">
        <label for="formFileMultiple" class="form-label">File DKPS</label>
        <input class="form-control" type="file" id="formFileMultiple" name="file_dkps[]" required multiple>
    </div>
    <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Lampiran</label>
        <input class="form-control" type="file" id="formFileMultiple" name="lampiran[]" required multiple>
    </div>
    <div class="col-12 text-center">
      <button type="submit" class="btn btn-outline-dark">Ajukan Akredetas</button>
    </div>
    </div>






  </form>
  {{-- <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
  <script>
    Dropzone.autoDiscover = false;
    let myDropzone = new Dropzone("#DropzoneDED", {
      maxfileSize: 10,
      acceptedFile: ".jpg,.jpeg,.png,.gif",
      url:"#!",
      autoProcessQueue: false,
    });

    
  </script> --}}

@endsection