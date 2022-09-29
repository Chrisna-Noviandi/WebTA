@extends('asesor.navbar')

@section('title')
    <title>Detail Pengajuan</title>
@endsection

@section('nav')

<li class="nav-item">
    <a class="nav-link" aria-current="page" href="/home-asesor"><i class="bi bi-house-fill"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/daftar-pengajuan-asesor"><i class="bi bi-people"></i>Daftar Pengajuan</a>
  </li>
@endsection

@section('content')
<div class="card mt-5">
    <div class="card-header">
      Program : {{ $pengajuan['program'] }}
    </div>
    <div class="card-body">
      <h5 class="card-title">Nama Program Studi : {{ $pengajuan['nama_program_studi'] }}</h5>
      <p class="card-text">Alamat : {{ $pengajuan['alamat'] }}</p>
      <p class="card-text">Kota   : {{ $pengajuan['kota'] }}</p>
      <p class="card-text">Nama Unit Pengelolah : {{ $pengajuan['nama_unit_pengelolah'] }}</p>
      <p class="card-text">Nama Perguruan Tinggi : {{ $pengajuan['nama_perguruan_tinggi'] }}</p>
      <p class="card-text">No Telepon PT : {{ $pengajuan['no_telepon_pt'] }}</p>
      <p class="card-text">Alamat Email PT : {{ $pengajuan['alamat_email_pt'] }}</p>
      <p class="card-text">Alamat Website PT : {{ $pengajuan['alamat_website_pt'] }}</p>
      <p class="card-text">TS (Tahun akademik penuh terakir saat pengajuan akredetasi) : {{ $pengajuan['ts'] }}</p>
      <p class="card-text">Nama Narahubung : {{ $pengajuan['nama_narahubung'] }}</p>
      <p class="card-text">Telepon Seluler : {{ $pengajuan['telepon_seluler'] }}</p>

      
    </div>
    @php
      use Carbon\Carbon;
      $Date = Carbon::parse($pengajuan['created_at'])->format('Y-m-d');
    @endphp 
    <div class="card-footer text-muted">
        {{ $Date }}
      </div>
  </div>

  <div class="row mt-4">

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">DED</h5>
          @foreach ($file_ded as $file)
            <p class="card-text"><a href="download/{{ $file['id'] }}">{{ $file['nama_asli_file'] }}</a></p>
          @endforeach
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">DKPS</h5>
          @foreach ($file_dkps as $file)
            <p class="card-text"><a href="download/{{ $file['id'] }}">{{ $file['nama_asli_file'] }}</a></p>
          @endforeach        
        </div>
      </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Lampiran</h5>
            @foreach ($lampiran as $file)
                <p class="card-text"><a href="download/{{ $file['id'] }}">{{ $file['nama_asli_file'] }}</a></p>
            @endforeach
            </div>
        </div>
    </div>
  </div>


@endsection