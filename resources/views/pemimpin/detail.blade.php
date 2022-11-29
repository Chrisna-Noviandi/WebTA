@extends('pemimpin.navbar')

@section('title')
    <title>Detail Pengajuan</title>
@endsection

@section('nav')
<li class="nav-item">
    <a class="nav-link" aria-current="page" href="/home-pemimpin"><i class="bi bi-house-fill"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/daftar-pengajuan-pemimpin"><i class="bi bi-people"></i> Daftar Pengajuan</a>
  </li>
@endsection

@section('content')
<center>
  <div class="card mt-5 col-8" style="font-size: 22pt;text-align:left">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-6">
            Program : {{ $pengajuan['program'] }}
          </div>
        </div>
      </div>
      <div class="card-body" style="font-size: 16pt">
        <table class="table table-borderless table-striped">
          <thead>
            <tr>
              <th scope="col"><h5 class="card-title mb-4">Nama Program Studi</h5></th>
              <th scope="col"><h5 class="card-title mb-4">{{ $pengajuan['nama_program_studi'] }}</h5></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Alamat</td>
              <td>{{ $pengajuan['alamat'] }}</td>
            </tr>
            <tr>
              <td>Kota</td>
              <td>{{ $pengajuan['kota'] }}</td>
            </tr>
            <tr>
              <td>Nama Unit Pengelolah</td>
              <td>{{ $pengajuan['nama_unit_pengelolah'] }}</td>
            </tr>
            <tr>
              <td>Nama Perguruan Tinggi</td>
              <td>{{ $pengajuan['nama_perguruan_tinggi'] }}</td>
            </tr>
            <tr>
              <td>No Telepon PT</td>
              <td>{{ $pengajuan['no_telepon_pt'] }}</td>
            </tr>
            <tr>
              <td>Alamat Email PT :</td>
              <td>{{ $pengajuan['alamat_email_pt'] }}</td>
            </tr>
            <tr>
              <td>Alamat Website PT :</td>
              <td>{{ $pengajuan['alamat_website_pt'] }}</td>
            </tr>
            <tr>
              <td>TS (Tahun akademik penuh terahkir <br> saat pengajuan akredetasi)</td>
              <td>{{ $pengajuan['ts'] }}</td>
            </tr>
            <tr>
              <td>Nama Narahubung :</td>
              <td>{{ $pengajuan['nama_narahubung'] }}</td>
            </tr>
            <tr>
              <td>Telepon Seluler </td>
              <td>{{ $pengajuan['telepon_seluler'] }}</td>
            </tr>
            @if ($pengajuan['status'] == 'tolak')
            <tr style="color: red">
              <td style="color: red">Pengajuan di Tolak Karena</td>
              <td style="color: red">{!! $pengajuan['tolak'] !!}</td>
            </tr>  
            @endif      
          </tbody>
        </table>
      @php
          use Carbon\Carbon;
          $Date = Carbon::parse($pengajuan['created_at'])->format('Y-m-d');
      @endphp 
      </div>
      <div class="card-footer text-muted">
        <center>{{ $Date }}</center>
      </div>
    </div>
</center>

  <div class="row mt-4">

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">DED</h5>
          @if (count($file_ded) == 0)
            <center><p class="card-text mt-3" style="color:red;">File DED Kosong</p></center>
          @else
            <ul>
              @foreach ($file_ded as $file)
              <li>
                <p class="card-text mt-2"><a href="download/{{ $file['id'] }}">{{ $file['nama_asli_file'] }}</a></p>
              </li>
              @endforeach
            </ul>
          @endif
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">DKPS</h5>
          @if (count($file_dkps) == 0)
            <center><p class="card-text mt-3" style="color:red;">File DKPS Kosong</p></center>
          @else
            @foreach ($file_dkps as $file)
              <p class="card-text mt-2"><a href="download/{{ $file['id'] }}">{{ $file['nama_asli_file'] }}</a></p>
            @endforeach    
          @endif 
        </div>
      </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Lampiran</h5>
            @if (count($lampiran) == 0)
            <center><p class="card-text mt-3" style="color:red;">File Lampiran Kosong</p></center>
            @else
              <ul>
                @foreach ($lampiran as $file)
                    <li>
                      <p class="card-text mt-2"><a href="download/{{ $file['id'] }}">{{ $file['nama_asli_file'] }}</a></p>
                    </li>
                @endforeach  
              </ul>
              @endif 
            </div>
        </div>
    </div>
  </div>
  
@endsection