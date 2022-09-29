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
<a href="/pengajuan/tambah-pengajuan">
  <div class="d-grid gap-2">
    <button type="button" class="btn btn-outline-dark mt-5">Tambah Pengajuan Akredetasi</button>
  </div>
</a>
@php
      use Carbon\Carbon;
@endphp

@foreach ($data as $datas)
    
@php
  $Date = Carbon::parse($datas['created_at'])->format('Y-m-d');
@endphp
<div class="card mt-5 text-bg-dark">
  <div class="card-header">

    Tanggal Pengajuan : {{  $Date }}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{  $datas['nama_program_studi'] }}</h5>

    @if ($datas['status'] == "sudah")
    <a href="/pengajuan/lihat-nilai/{{ $datas['id'] }}" class="btn btn-primary">Lihat Nilai</a>       
    @else
    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
      <button class="btn btn-lg btn-danger" type="button" disabled>Belum Dinilai</button>
    </span>  
    @endif

    <a href="/pengajuan/detail/{{ $datas['id'] }}" class="btn btn-primary">Lihat Detail</a>
  </div>
</div>
@endforeach
<div class="mt-5">
  {{ $data -> links() }}
</div>
@endsection