@extends('wakil.navbar')

@section('title')
    <title>Home</title>
@endsection

@section('nav')
<li class="nav-item">
  <a class="nav-link active" aria-current="page" href="/home-uups"><i class="bi bi-house-fill"></i> Home</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="/pengajuan"><i class="bi bi-people"></i> Daftar Pegajuan</a>
</li>
@endsection

@section('content')

<div class="container mt-5 position-relative">
  <div class="card position-absolute start-50 translate-middle-x" style="width: 80%;">
    <img src="/image/KAMPUS.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-center">WAKIL PRODI DAPAT MELAKUKAN PENGAJUAN AKREDETASI DAN MELIHAT NILAI AKREDETASI</p>
    </div>
  </div>
</div>
@endsection