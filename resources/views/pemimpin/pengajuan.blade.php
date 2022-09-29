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

@foreach ($data as $datas)
    

<div class="card mt-5 text-bg-dark">
  <div class="card-header">
    Tanggal Pengajuan : {{  $datas['created_at'] }}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{  $datas['nama_program_studi'] }}</h5>

    @if ($datas['status'] == "sudah")
    <a href="/daftar-pengajuan-pemimpin/lihat-nilai/{{ $datas['id'] }}" class="btn btn-primary">Lihat Nilai</a>       
    @else
    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
      <button class="btn btn-lg btn-danger" type="button" disabled>Belum Dinilai</button>
    </span>  
    @endif

    <a href="/daftar-pengajuan-pemimpin/detail-pengajuan/{{ $datas['id'] }}" class="btn btn-primary">Lihat Detail</a>
  </div>
</div>
@endforeach
<div class="mt-5">
  {{ $data -> links() }}
</div>
@endsection