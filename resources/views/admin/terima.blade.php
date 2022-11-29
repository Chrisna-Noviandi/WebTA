@extends('admin.navbar')

@section('title')
    <title>Terima Pengajuan</title>
@endsection

@section('nav')
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="/home1"><i class="bi bi-house-fill"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/usermanagement"><i class="bi bi-people"></i> User Management</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/pengajuan-admin"><i class="bi bi-people"></i>Daftar Pengajuan</a>
  </li>
@endsection

@section('content')
<form action="/terima/{{ $id }}" method="post" >
    @csrf
    <center>
    <h4 class="mt-5 mb-4">Terima Pengajuan</h4>
    <div class="col-md-4">
        <label for="inputType" class="form-label">Pilih Acesor Ke-1</label>
        <select id="inputType" class="form-select @error('id_acesor1') is-invalid @enderror " name="id_acesor1">
          @foreach ($asesor as $asesor1)
          <option value="{{ $asesor1['id'] }}">{{ $asesor1['name'] }}</option>
          @endforeach
        </select>
        @error("id_acesor1")
        <div class="invalid-feedback">
            Asesor Tidak boleh sama
        </div>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="inputType" class="form-label">Pilih Acesor Ke-2</label>
        <select id="inputType" class="form-select @error('id_acesor2') is-invalid @enderror " name="id_acesor2">
          @foreach ($asesor as $asesor2)
          <option value="{{ $asesor2['id'] }}">{{ $asesor2['name'] }}</option>
          @endforeach
        </select>
        @error("id_acesor2")
        <div class="invalid-feedback">
            Asesor Tidak boleh sama
        </div>
        @enderror
    </div>
    </center>
    <center>
        <div class="d-grid gap-2 col-4">
            <button type="submit" class="btn btn-outline-dark btn-lg mt-5 mb-5">Terima Pengajuan</button>
        </div>
    </center>
</form>

@endsection