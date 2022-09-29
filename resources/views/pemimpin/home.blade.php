@extends('pemimpin.navbar')

@section('title')
    <title>Home</title>
@endsection

@section('nav')
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/home-pemimpin"><i class="bi bi-house-fill"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/daftar-pengajuan-pemimpin"><i class="bi bi-people"></i> Daftar Pengajuan</a>
  </li>
@endsection

@section('content')

<div class="container mt-5 position-relative">
  <div class="card position-absolute start-50 translate-middle-x" style="width: 80%;">
    <img src="/image/KAMPUS.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-center">PEMIMPIN DAPAT MELIHAT PENGAJUAN DAN MELIHAT NILAI AKREDETASI</p>
    </div>
  </div>
</div>
@endsection