@extends('admin.navbar')

@section('title')
    <title>Profile</title>
@endsection

@section('nav')
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="/home1"><i class="bi bi-house-fill"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/usermanagement"><i class="bi bi-people"></i> User Management</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/pengajuan-admin"><i class="bi bi-people"></i>Daftar Pengajuan</a>
  </li>
@endsection

@section('content')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row g-3 mt-5">

    <table class="table table-hover">
        <tbody>
          <tr>
            <th scope="row"><h1 class="display-4">Username</h1></th>
            <td><h1 class="display-4">{{ $user[0]["username"] }}</h1></td>
          </tr>
          <tr>
            <th scope="row"><h1 class="display-4">Name</h1></th>
            <td><h1 class="display-4">{{ $user[0]["name"] }}</h1></td>
          </tr>
          <tr>
            <th scope="row"><h1 class="display-4">Type User</h1></th>
            <td><h1 class="display-4">{{ $user[0]["type"] }}</h1></td>
          </tr>
    </tbody> 
</div>


<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="profile/editprofile">  
        <button type="button" class="btn btn-outline-dark mt-5">Edit Data</button>
    </a>
    <a href="profile/editpassword">
        <button type="button" class="btn btn-outline-dark mt-5">Edit Password</button>
    </a>
</div>


@endsection