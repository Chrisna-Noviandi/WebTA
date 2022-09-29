@extends('asesor.navbar')


@section('title')
    <title>Edit Profile</title>
@endsection

@section('nav')
<li class="nav-item">
  <a class="nav-link" aria-current="page" href="/home-asesor"><i class="bi bi-house-fill"></i> Home</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="/daftar-pengajuan-asesor"><i class="bi bi-people"></i>Daftar Pengajuan</a>
</li>
@endsection

@section('content')


<form action="/profile1/editprofile/update" method="post">
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





@endsection