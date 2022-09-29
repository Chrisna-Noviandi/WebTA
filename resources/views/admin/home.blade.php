@extends('admin.navbar')

@section('title')
    <title>Home</title>
@endsection

@section('nav')
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/home1"><i class="bi bi-house-fill"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/usermanagement"><i class="bi bi-people"></i> User Management</a>
  </li>
@endsection

@section('content')

<div class="container mt-5 position-relative">
  <div class="card position-absolute start-50 translate-middle-x" style="width: 80%;">
    <img src="/image/KAMPUS.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-center">ADMIN DAPAT MENAMBAHKAN USER</p>
    </div>
  </div>
</div>
@endsection