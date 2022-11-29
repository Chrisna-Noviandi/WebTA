@extends('admin.navbar')

@section('title')
    <title>Daftar Pengajuan</title>
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
<form action="/tolak/{{ $id }}" method="post" >
    @csrf
    <center><h4 class="mt-5 mb-5">Alasan Menolak</h4></center>
    <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor1" name="tolak"></textarea>
    
    <center>
        <div class="d-grid gap-2 col-4">
            <button type="submit" class="btn btn-outline-dark btn-lg mt-5 mb-5">Tolak Pengajuan</button>
        </div>
    </center>
</form>


<script src={{ asset('ckeditor/build/ckeditor.js') }}></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#ckeditor1' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>
@endsection