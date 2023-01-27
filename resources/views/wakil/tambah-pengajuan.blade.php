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

@endsection

@section('content')

<form class="row g-3 mt-5" action="/register-buat-pengajuan" method="post" enctype="multipart/form-data">
  @csrf
  <div class="col-md-6">
    <label for="inputUsername" class="form-label">Program</label>
    <input type="text" name="program" class="form-control @error('program') is-invalid @enderror" id="inputUsername" value="{{ old("program") }}" autofocus >
    @error("program")
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="inputName" class="form-label">Nama Progam Studi</label>
    <input type="text" name="nama_program_studi" class="form-control @error('nama_program_studi') is-invalid @enderror" id="inputName" value="{{ old("nama_program_studi") }}" >
    @error("nama_program_studi")
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="inputName" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="inputName" value="{{ old("alamat") }}" >
    @error("alamat")
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="inputName" class="form-label">Kota/Kabupaten</label>
    <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" id="nama_unit_pengelolah" value="{{ old("kota") }}" >
    @error("kota")
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="inputName" class="form-label">Nama Unit Pengelolah</label>
    <input type="text" name="nama_unit_pengelolah" class="form-control @error('nama_unit_pengelolah') is-invalid @enderror" id="inputName" value="{{ old("nama_unit_pengelolah") }}" >
    @error("nama_unit_pengelolah")
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="inputName" class="form-label">Nama Perguruan Tinggi</label>
    <input type="text" name="nama_perguruan_tinggi" class="form-control @error('nama_perguruan_tinggi') is-invalid @enderror" id="inputName" value="{{ old("nama_perguruan_tinggi") }}" >
    @error("nama_perguruan_tinggi")
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="inputName" class="form-label">No Telepon PT</label>
    <input type="text" name="no_telepon_pt" class="form-control @error('no_telepon_pt') is-invalid @enderror" id="inputName" value="{{ old("no_telepon_pt") }}" >
    @error("no_telepon_pt")
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="inputName" class="form-label">Alamat Email PT</label>
    <input type="text" name="alamat_email_pt" class="form-control @error('alamat_email_pt') is-invalid @enderror" id="inputName" value="{{ old("alamat_email_pt") }}" >
    @error("alamat_email_pt")
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="inputName" class="form-label">Alamat Website PT</label>
    <input type="text" name="alamat_website_pt" class="form-control @error('alamat_website_pt') is-invalid @enderror" id="inputName" value="{{ old("alamat_website_pt") }}" >
    @error("alamat_website_pt")
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="inputName" class="form-label">TS (Tahun akademik penuh terakir saat pengajuan akredetasi)</label>
    <input type="text" name="ts" class="form-control @error('ts') is-invalid @enderror" id="inputName" value="{{ old("ts") }}" >
    @error("ts")
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="inputName" class="form-label">Nama Narahubung</label>
    <input type="text" name="nama_narahubung" class="form-control @error('nama_narahubung') is-invalid @enderror" id="inputName" value="{{ old("nama_narahubung") }}" >
    @error("nama_narahubung")
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="inputName" class="form-label">Telepon Seluler</label>
    <input type="text" name="telepon_seluler" class="form-control @error('telepon_seluler') is-invalid @enderror" id="inputName" value="{{ old("telepon_seluler") }}" >
    @error("telepon_seluler")
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  {{-- <div class="col-md-4">
    <label for="inputType" class="form-label">Pilih Acesor</label>
    <select id="inputType" class="form-select @error('type') is-invalid @enderror " name="id_acesor" required>
      @foreach ($asesor as $asesor)
      <option value="{{ $asesor['id'] }}">{{ $asesor['name'] }}</option>
      @endforeach
    </select>
    @error("type")
    <div class="invalid-feedback">
      Pilih asesor
    </div>
    @enderror
  </div>
  <div class="col-12 mb-3">
    <label for="formFileMultiple" class="form-label">File DED</label>
    <input class="form-control @error('file_ded') is-invalid @enderror" type="file" id="formFileMultiple" name="file_ded"
     >
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

  <div class="mb-3">
    <label for="formFileMultiple" class="form-label">File DKPS</label>
    <input class="form-control @error('file_dkps') is-invalid @enderror" type="file" id="formFileMultiple" name="file_dkps" >
    @error("file_dkps")
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
    @error("file_dkps.*")
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="formFileMultiple" class="form-label">Lampiran</label>
    <input class="form-control" type="file" id="formFileMultiple" name="lampiran[]" multiple>
  </div> --}}
  <div class="col-12 text-center">
    <button type="submit" class="btn btn-outline-dark">Ajukan Akredetas</button>
  </div>
  </div>






</form>

@endsection