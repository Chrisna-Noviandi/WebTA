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
    <form class="row g-3 mt-5" action="/pengajuan/detail/upload-ded/{{ $data['id'] }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="col-12 mb-3">
            <label for="formFileMultiple" class="form-label">File DED</label>
            <center><p style="color:red; font-size: 10pt;">Format file yang didukung .pdf, .doc, .docx dan batas file yang bisa di upload 1  </p></center>

            <input class="form-control @error('file_ded') is-invalid @enderror" type="file" id="formFileMultiple" name="file_ded" accept=".pdf, .doc, .docx">
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

    
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-outline-dark">Upload File</button>
        </div>
        </div>

    </form>
    
@endsection