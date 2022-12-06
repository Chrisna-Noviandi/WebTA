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

    @php
            use Carbon\Carbon;
    @endphp
    
    @foreach ($data as $datas)
        
    @php
        $Date = Carbon::parse($datas['created_at'])->format('Y-m-d');
    @endphp
    <div class="card mt-5 text-bg-dark">
        <div class="card-header">
    
        Tanggal Pengajuan : {{  $Date }}
        </div>
        <div class="card-body">
        <h5 class="card-title">{{  $datas['nama_program_studi'] }}</h5>
    

    
        @if ($datas['status'] == "pengajuan")
            <a href="/pengajuan-admin/detail/{{ $datas['id'] }}" class="btn btn-primary">Detail Pengajuan</a>
            
        @elseif ($datas['status'] == "penilaian")
            {{-- status Asesor 1 --}}
            @if ($datas['status_acesor1'] == "sudah")
            <a href="/pengajuan-admin/lihat-nilai/{{ $datas['id'] }}/{{ $datas['id_acesor1'] }}" class="btn btn-primary">Nilai Acesor 1</a>       
            @else
            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                <button class="btn btn-lg btn-danger" type="button" disabled>Nilai Acesor 1</button>
            </span>  
            @endif
            {{-- status Asesor 1 --}}
            @if ($datas['status_acesor2'] == "sudah")
            <a href="/pengajuan-admin/lihat-nilai/{{ $datas['id'] }}/{{ $datas['id_acesor2'] }}" class="btn btn-primary">Nilai Acesor 2</a>       
            @else
            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                <button class="btn btn-lg btn-danger" type="button" disabled>Nilai Acesor 2</button>
            </span>  
            @endif
            <a href="/pengajuan-admin/detail/{{ $datas['id'] }}" class="btn btn-primary">Detail Pengajuan</a>
        @else
        
        @endif
        </div>
    </div>
    @endforeach
    <div class="mt-5">
        {{ $data -> links() }}
    </div>
  @endsection