@extends('admin.navbar')

@section('title')
    <title>User Management</title>
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
<a href="/register">
<div class="d-grid gap-2">
  <button type="button" class="btn btn-outline-dark mt-5">Add User</button>
</div>
</a>
<form action="/usermanagement">
  <div class="input-group mb-3 mt-3">
    <input type="text" name="search" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ request('search') }}">
    <button class="btn btn-outline-dark" type="submit" id="button-addon2">Search</button>
  </div>
</form>
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if ($user->count())
    

<table class="table table-striped mt-5 table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th> 
      <th scope="col">Action</th>    
    </tr>
  </thead>
  <tbody>

    @php
        $no = 1;
    @endphp
    @foreach ($user as $users)
        
    
      <tr>
        <th scope="row">{{ $no }}</th>
        <td>{{ $users["username"] }}</td>
        <td>{{ $users["name"] }}</td>
        <td>{{ $users["type"] }}</td>
        <td>@if ( $users["type"] == "Admin")
            
        @else    
              <a href="/usermanagement/edit/{{ $users["id"] }}"><i class="bi bi-pen-fill"></i></a> 

              <form action="/usermanagement/delete/{{ $users["id"] }}" method="post" class="d-inline">
                
                
                @csrf

                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure delete user?')">
                  <i class="bi bi-x-square-fill"></i> 
                </button>

              </form>
              
        @endif      
        </td>
      </tr>

    @php
      $no = $no + 1;
    @endphp

    @endforeach

    
  </tbody>
</table>

@else
   <p class="text-center fs-4">Data Not Found</p> 
@endif
{{ $user -> links() }}
@endsection