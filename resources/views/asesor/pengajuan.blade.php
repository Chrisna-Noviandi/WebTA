@extends('asesor.navbar')

@section('title')
    <title>Daftar Pengajuan</title>
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
    <a href="/daftar-pengajuan-asesor/detail-penilaian/{{ $datas['id'] }}" class="btn btn-primary">Detail Nilai</a>    
    @else
    <a href="/daftar-pengajuan-asesor/form-penilaian/{{ $datas['id'] }}" class="btn btn-primary">Nilai</a>   
    @endif
    <a href="/daftar-pengajuan-asesor/detail-pengajuan/{{ $datas['id'] }}" class="btn btn-primary">Lihat Detail</a>
  </div>
</div>
@endforeach

<div class="mt-5">
  {{ $data -> links() }}
</div>


@endsection