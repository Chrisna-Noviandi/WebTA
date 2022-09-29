@extends('admin.navbar')


@section('title')
    <title>Register User</title>
@endsection

@section('nav')
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="/home1"><i class="bi bi-house-fill"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/usermanagement"><i class="bi bi-people"></i> User Management</a>
  </li>
@endsection

@section('content')
<form class="row g-3 mt-5" action="/register" method="post">
    @csrf
    <div class="col-md-6">
      <label for="inputUsername" class="form-label">Username</label>
      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="inputUsername" value="{{ old("username") }}" autofocus required>
      @error("username")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror 
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword4" value="{{ old("password") }}" required>
      @error("password")
      <div class="invalid-feedback">
          {{ $message }}
      </div>
    @enderror
    </div>
    <div class="col-md-6">
      <label for="inputPassword5" class="form-label">Password comfirmation</label>
      <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="inputPassword4" value="{{ old("password") }}" required>
      @error("password_confirmation")
      <div class="invalid-feedback">
          {{ $message }}
      </div>
    @enderror
    </div>
    <div class="col-md-6">
      <label for="inputName" class="form-label">Name</label>
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName" value="{{ old("name") }}" required>
      @error("name")
      <div class="invalid-feedback">
          {{ $message }}
      </div>
    @enderror
    </div>
    <div class="col-md-4">
      <label for="inputType" class="form-label">Type User</label>
      <select id="inputType" class="form-select @error('type') is-invalid @enderror " name="type" required>
        <option selected>Choose...</option>
        <option>Admin</option>
        <option>Acesor</option>
        <option>Wakil Prodi</option>
        <option>Pemimpin</option>
      </select>
      @error("type")
      <div class="invalid-feedback">
          Please choose type user
      </div>
    @enderror
    </div>
    <div class="col-12 text-center">
      <button type="submit" class="btn btn-outline-dark">Register User</button>
    </div>
  </form>

  <a href="/usermanagement">
    <div class="col-12 mt-2">
      <button type="submit" class="btn btn-outline-dark">Back to User Management</button>
    </div>
  </a>

@endsection