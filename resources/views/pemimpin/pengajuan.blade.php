@extends('pemimpin.navbar')

@section('title')
    <title>Daftar Pengajuan</title>
@endsection

@section('nav')
<li class="nav-item">
  <a class="nav-link" aria-current="page" href="/home-pemimpin"><i class="bi bi-house-fill"></i> Home</a>
</li>
<li class="nav-item">
  <a class="nav-link active" href="/daftar-pengajuan-pemimpin"><i class="bi bi-people"></i> Daftar Pengajuan</a>
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

    @if ($datas['status'] == "belum")
    <h5 class="card-title">Status : Masih Melengkapi data</h5>
      <a href="/daftar-pengajuan-pemimpin/detail-pengajuan/{{ $datas['id'] }}" class="btn btn-primary">Detail Pengajuan</a>

    @elseif ($datas['status'] == "pengajuan")
    <h5 class="card-title">Status : Menunggu Validasi Admin</h5>
      <a href="/daftar-pengajuan-pemimpin/detail-pengajuan/{{ $datas['id'] }}" class="btn btn-primary">Detail Pengajuan</a>
      
    @elseif ($datas['status'] == "penilaian")
      {{-- status Asesor 1 --}}
      <h5 class="card-title">Status : Berhasil Melakukan Pengajuan</h5>
      @if ($datas['status_acesor1'] == "sudah")
        <a href="/daftar-pengajuan-pemimpin/lihat-nilai/{{ $datas['id'] }}/{{ $datas['id_acesor1'] }}" class="btn btn-primary">Nilai Acesor 1</a>       
      @else
        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
          <button class="btn btn-lg btn-danger" type="button" disabled>Nilai Acesor 1</button>
        </span>  
      @endif
      {{-- status Asesor 2 --}}
      @if ($datas['status_acesor2'] == "sudah")
        <a href="/daftar-pengajuan-pemimpin/lihat-nilai/{{ $datas['id'] }}/{{ $datas['id_acesor2'] }}" class="btn btn-primary">Nilai Acesor 2</a>       
      @else
        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
          <button class="btn btn-lg btn-danger" type="button" disabled>Nilai Acesor 2</button>
        </span>  
      @endif
      <a href="/daftar-pengajuan-pemimpin/detail-pengajuan/{{ $datas['id'] }}" class="btn btn-primary">Detail Pengajuan</a>

    @elseif ($datas['status'] == "tolak")
    <h5 class="card-title">Status : Pengajuan ditolak oleh Admin</h5>
      <a href="/daftar-pengajuan-pemimpin/detail-pengajuan/{{ $datas['id'] }}" class="btn btn-primary">Detail Pengajuan</a>

    @else
    
    @endif
    
  </div>
</div>
@endforeach
<div class="mt-5">
  {{ $data -> links() }}
</div>
@endsection