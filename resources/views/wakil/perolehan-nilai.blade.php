@extends('wakil.navbar')

@section('title')
    <title>Detail Perolehan Nilai</title>
@endsection

@section('nav')

  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="/home-uups"><i class="bi bi-house-fill"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/pengajuan"><i class="bi bi-people"></i> Daftar Pegajuan</a>
  </li>
@endsection

@section('content')

<table class="table mt-3">
    <center>
    <h3 class="mt-5">Total Poin Nilai Akreditasi (NA) :<span class="badge bg-dark">{{ $NA }}</span></h3>
    </center>

    <thead>
      <tr>
        <th scope="col">Poin Ke</th>
        <th scope="col">Elemen</th>
        <th scope="col">Indikator</th>
        <th scope="col">DESKRIPSI PENILAIAN ASESOR</th>
        <th scope="col">Skor</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">12</th>
            <th scope="row"> 
                C.2.7. Penjaminan Mutu
            </th>
            <td>
                Keterlaksanaan Sistem Penjaminan Mutu Internal (akademik dan non akademik).
            </td>
            <td>
                {{ $d['f12'] }}
            </td>
            <td>
                {{ $d['n12'] }}
            </td>
        </tr>
        <tr>
            <th scope="row">17</th>
            <th scope="row">
                C.4. Sumber Daya Manusia
                <br>
                C.4.4. Indikator Kinerja Utama
                <br>
                C.4.4.a) Profil Dosen            
            </th>
            <td>
                Kecukupan jumlah dosen tetap. 
                <br>
                Tabel 3.a.1) LKPS
            </td>
            <td>
                {{ $d['f17'] }}
            </td>
            <td>
                {{ $d['n17'] }}
            </td>
        </tr>
        <tr>
            <th scope="row">38</th>
            <th scope="row">
                C.6. Pendidikan
                <br>
                C.6.4. Indikator Kinerja Utama
                <br>
                C.6.4.a) Kurikulum
            </th>
            <td>
                A. Keterlibatan pemangku kepentingan dalam proses evaluasi dan pemutakhiran kurikulum.
                <br>
                B. Kesesuaian capaian pembelajaran dengan profil lulusan dan jenjang KKNI/SKKNI.
                <br>
                C. Ketepatan struktur kurikulum dalam pembentukan capaian pembelajaran.
            </td>
            <td>
                {{ $d['f38'] }}
            </td>
            <td>
                {{ $d['n38'] }}
            </td>
        </tr>
    </tbody>
</table>
<center>
    <p style="color:red; font-size: 10pt;">Untuk Memenuhi Syarat Terakredetasi Poin ke-12, ke-17, ke-38 harus >= 2  </p>

    @if ($d["n12"] >= 2 && $d["n17"] >= 2 && $d["n38"] >= 2)
        <h3 class="mt-1">Syarat Terakreditasi :<span class="badge bg-dark">Memenuhi</span></h3>
    @else
        <h3 class="mt-1">Syarat Terakredetasi :<span class="badge bg-dark">Tidak Memenuhi</span></h1>
    @endif
</center>


<table class="table mt-3">
<thead>
    <tr>
      <th scope="col">Poin ke</th>
      <th scope="col">Elemen</th>
      <th scope="col">Indikator</th>
      <th scope="col">DESKRIPSI PENILAIAN ASESOR</th>
      <th scope="col">Skor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th scope="row">18</th>
        <th scope="row">

        </th>
        <td>
            Kualifikasi akademik dosen tetap.
            <br> 
            Tabel 3.a.1) LKPS
        </td>
        <td>
            {{ $d['f18'] }}
        </td>
        <td>
            {{ $d['n18'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">19</th>
        <th scope="row">

        </th>
        <td>
            Jabatan akademik DTPS. 
            <br>
            Tabel 3.a.1) LKPS
        </td>
        <td>
            {{ $d['f19'] }}
        </td>
        <td>
            {{ $d['n19'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">60</th>
        <th scope="row">

        </th>
        <td>
            Waktu tunggu. WT = waktu tunggu lulusan untuk mendapatkan pekerjaan pertama dalam 3 tahun, mulai TS-4 s.d. TS-2. 
            <br>
            Tabel 8.d.1) LKPS
        </td>
        <td>
            {{ $d['f60'] }}
        </td>
        <td>
            {{ $d['n60'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">61</th>
        <th scope="row">

        </th>
        <td>
            Kesesuaian bidang kerja. PBS = Kesesuaian bidang kerja lulusan saat mendapatkan pekerjaan pertama dalam 3 tahun, mulai TS-4 s.d. TS-2. 
            <br>
            Tabel b.d.2) LKPS
        </td>
        <td>
            {{ $d['f61'] }}
        </td>
        <td>
            {{ $d['n61'] }}
        </td>
    </tr>
  </tbody>
</table>

<center>
    <p style="color:red; font-size: 10pt;">Untuk Memenuhi Syarat Peringkat Unggul Poin ke-18, ke-19, ke-60, ke-61 harus >= 3.5  </p>
    <p style="color:red; font-size: 10pt;">Untuk Memenuhi Syarat Peringkat Baik Sekali Poin ke-18, ke-19, ke-60, ke-61 harus >= 3 dan < 3.5 </p>

    @if ($d["n18"] >= 3.5 && $d["n19"] >= 3.5 && $d["n60"] >= 3.5 && $d["n61"] >= 3.5)
        <h3 class="mt-1">Memenuhi Syarat Peringkat Unggul :<span class="badge bg-dark">Memenuhi</span></h3>
    @else
        @if ($d["n12"] >= 2 && $d["n17"] >= 2 && $d["n38"] >= 2)
            <h3 class="mt-1">Memenuhi Syarat Peringkat Baik Sekali :<span class="badge bg-dark">Memenuhi</span></h3>
        @else
            <h3 class="mt-1">Memenuhi Syarat Peringkat Unggul / Baik Sekali<span class="badge bg-dark">Tidak Memenuhi</span></h3>
        @endif
    @endif
</center>
<center>
<img class="img-fluid" src="/image/Akreditasi.png" alt="" >
<h1 class="my-5">Diberikan Akreditasi : <span class="badge bg-dark">{{ $d['nilai'] }}</span></h1>
</center>




@endsection