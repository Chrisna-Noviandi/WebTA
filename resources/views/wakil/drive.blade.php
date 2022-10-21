@extends('wakil.navbar')

@section('title')
    <title>Google Drive</title>
@endsection

@section('nav')
<li class="nav-item">
  <a class="nav-link" aria-current="page" href="/home-uups"><i class="bi bi-house-fill"></i> Home</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="/pengajuan"><i class="bi bi-people"></i> Daftar Pegajuan</a>
</li>
<li class="nav-item">
  <a class="nav-link " href="/laporan-evaluasi-diri"><i class="bi bi-people"></i>LED</a>
</li>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
          <iframe src="https://drive.google.com/file/d/1DuXvIZVv7swjh5dRyh3A837oIEnzlcxcHu9bRRFpv4E/preview" width="640" height="480" allow="autoplay"></iframe>
        </div>
    </div>
</div>

@endsection