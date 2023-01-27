@extends('admin.navbar')


@section('title')
    <title>Edit User</title>
@endsection

@section('nav')
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="/home1"><i class="bi bi-house-fill"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/usermanagement"><i class="bi bi-people"></i> User Management</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/pengajuan-admin"><i class="bi bi-people"></i>Daftar Pengajuan</a>
  </li>
@endsection

@section('content')


<form action="/usermanagement/update" method="post">
    @csrf
    <div class="mb-3 mt-5">
        <label for="exampleInputPassword2" class="form-label">Type User : {{ $user["type"] }}</label>
    </div>


    <div class="mb-3 mt-3">
      <label for="exampleInputEmail1" class="form-label">Username</label>
      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('username',$user["username"]) }}">
      @error("username")
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    
    </div>
    
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Name</label>
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputPassword1" value="{{ old('name',$user["name"]) }}">
      @error("name")
        <div class="invalid-feedback">
           {{ $message }}
        </div>
      @enderror
   
    </div>
   
    <div class="mb-3">
      <input type="hidden" name="id" class="form-control" id="exampleInputPassword3" value="{{ $user["id"] }}">
    </div>
   

    <div class="col-12 text-center mt-4">
        <button type="submit" class="btn btn-outline-dark">Edit User</button>
    </div>
</form>

<form action="/usermanagement/resetpassword" method="post">
  @csrf



  <div class="mb-3 mt-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error("password")
      <div class="invalid-feedback">
          {{ $message }}
      </div>
    @enderror
  
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password confirmation</label>
    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="exampleInputPassword1">
    @error("password_confirmation")
      <div class="invalid-feedback">
         {{ $message }}
      </div>
    @enderror
 
  </div>
 
  <div class="mb-3">
    <input type="hidden" name="id" class="form-control" id="exampleInputPassword3" value="{{ $user["id"] }}">
  </div>
 

  <div class="col-12 text-center mt-4">
      <button type="submit" class="btn btn-outline-dark">Reset Password</button>
  </div>
</form>


<a href="/usermanagement">
    <div class="col-12 mt-2">
      <button type="submit" class="btn btn-outline-dark">Back to User Management</button>
    </div>
</a>


@endsection