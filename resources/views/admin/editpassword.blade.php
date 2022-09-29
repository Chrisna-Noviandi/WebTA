@extends('admin.navbar')


@section('title')
    <title>Change Password</title>
@endsection

@section('nav')
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="/home1"><i class="bi bi-house-fill"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/usermanagement"><i class="bi bi-people"></i> User Management</a>
  </li>
@endsection

@section('content')

@if (session('error'))
  <div class="alert alert-danger mt-3">
    {{ session('error') }}
  </div>
    
@endif

<form class="row g-3 mt-5" action="/editpassword/update" method="post">
    @csrf
    <div class="md-3">
      <label for="inputPassword4" class="form-label">Old Password</label>
      <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" id="inputPassword4" value="{{ old("password") }}" required>
      @error("old_password")
      <div class="invalid-feedback">
          {{ $message }}
      </div>
    @enderror
    </div>
    <div class="md-3">
        <label for="inputPassword5" class="form-label">Password confirmation</label>
        <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="inputPassword4" value="{{ old("password") }}" required>
        @error("new_password")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
      </div>
    <div class="md-3">
      <label for="inputPassword5" class="form-label">New Password confirmation</label>
      <input type="password" name="new_password_confirmation" class="form-control @error('new_password_confirmation') is-invalid @enderror" id="inputPassword4" value="{{ old("password") }}" required>
      @error("new_password_confirmation")
      <div class="invalid-feedback">
          {{ $message }}
      </div>
    @enderror
    </div>
    <div class="col-12 text-center">
      <button type="submit" class="btn btn-outline-dark">Change Password</button>
    </div>
  </form>

@endsection