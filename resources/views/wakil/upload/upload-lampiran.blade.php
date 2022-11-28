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
    <form class="row g-3 mt-5" action="/pengajuan/detail/upload-lampiran/{{ $data['id'] }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="col-12 mb-3">
            <label for="formFileMultiple" class="form-label">Lampiran</label>
            <input class="form-control" type="file" id="formFileMultiple" name="lampiran[]" multiple>
            @error("lampiran")
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
            @error("lampiran")
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
        </div>

    
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-outline-dark">Upload File</button>
        </div>
        </div>

    </form>
    
@endsection