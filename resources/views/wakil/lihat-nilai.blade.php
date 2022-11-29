@extends('wakil.navbar')

@section('title')
    <title>Lihat Nilai</title>
@endsection

@section('nav')

  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="/home-uups"><i class="bi bi-house-fill"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/pengajuan"><i class="bi bi-people"></i> Daftar Pegajuan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="/laporan-evaluasi-diri"><i class="bi bi-people"></i>LED</a>
  </li>
@endsection

@section('content')
@foreach ($data as $d)
    
<h1 class="mt-5">Nilai Akredetasi :<span class="badge bg-dark">{{ $d['nilai'] }}</span></h1>

<table class="table mt-5">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Eleman</th>
        <th scope="col">Indikator</th>
        <th scope="col">DESKRIPSI PENILAIAN ASESOR</th>
        <th scope="col">Skor</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <th scope="row">A. Kondisi Eksternal</th>
        <td>
            Konsistensi dengan hasil analisis SWOT dan/atau analisis lain serta rencana pengembangan ke depan.
        </td>
        <td>
            {{ $d['f1'] }}
        </td>
        <td>
            {{ $d['n1'] }}
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <th scope="row">B. Profil Unit Pengelola Program Studi</th>
        <td>
            Keserbacakupan informasi dalam profil dan konsistensi antara profil dengan data dan informasi yang disampaikan pada masing-masing kriteria.
        </td>
        <td>
            {{ $d['f2'] }}
        </td>
        <td>
            {{ $d['n2'] }}
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <th scope="row"> C. Kriteria <br> C.1. Visi, Misi, Tujuan dan Strategi <br> C.1.4. Indikator Kinerja Utama</th>
        <td>
            Kesesuaian Visi, Misi, Tujuan dan Strategi (VMTS) Unit Pengelola Program Studi (UPPS) terhadap VMTS Perguruan Tinggi (PT) dan Program Studi (PS) yang dikelolanya
        </td>
        <td>
            {{ $d['f3'] }}
        </td>
        <td>
            {{ $d['n3'] }}
        </td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <th scope="row"></th>
        <td>
            Mekanisme dan keterlibatan pemangku kepentingan dalam penyusunan VMTS UPPS.
        </td>
        <td>
            {{ $d['f4'] }}
        </td>
        <td>
            {{ $d['n4'] }}
        </td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <th scope="row"></th>
        <td>
            Strategi pencapaian tujuan disusun berdasarkan analisis yang sistematis, serta pada pelaksanaannya dilakukan pemantauan dan evaluasi yang ditindaklanjuti
        </td>
        <td>
            {{ $d['f5'] }}
        </td>
        <td>
            {{ $d['n5'] }}
        </td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <th scope="row"> C.2. Tata Pamong, Tata Kelola dan Kerjasama
            <br> C.2.4. Indikator Kinerja Utama
            <br> C.2.4.a) Sistem Tata Pamong
            </th>
        <td>
            A. Kelengkapan struktur organisasi dan keefektifan penyelenggaraan organisasi.
            <br>
            B. Perwujudan good governance dan pemenuhan lima pilar sistem tata pamong.
        </td>
        <td>
            {{ $d['f6'] }}
        </td>
        <td>
            {{ $d['n6'] }}
        </td>
      </tr>
    <tr>
      <th scope="row">7</th>
      <th scope="row"> C.2.4.b) Kepemimpinan dan Kemampuan Manajerial</th>
      <td>
        A. Komitmen pimpinan UPPS.
        <br>
        B. Kapabilitas pimpinan UPPS.
      </td>
      <td>
        {{ $d['f7'] }}
    </td>
    <td>
        {{ $d['n7'] }}
    </td>
    </tr>
    <tr>
        <th scope="row">8</th>
        <th scope="row">  C.2.4.c) Kerjasama</th>
        <td>
            Mutu, manfaat, kepuasan dan keberlanjutan kerjasama pendidikan, penelitian dan PkM yang relevan dengan program studi.
        </td>
        <td>
            {{ $d['f8'] }}
        </td>
        <td>
            {{ $d['n8'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">9</th>
        <th scope="row"></th>
        <td>  
            A. Kerjasama pendidikan, penelitian, dan PkM yang relevan dengan program studi dan dikelola oleh UPPS dalam 3 tahun terakhir.
            <br>
            B. Kerjasama tingkatinternasional, nasional, wilayah/lokal yang relevan dengan program studi dan dikelola oleh UPPS dalam 3 tahun terakhir. Tabel 1 LKPS
        </td>
        <td>
            {{ $d['f9'] }}
        </td>
        <td>
            {{ $d['n9'] }}
        </td>
    </tr>
        
    <tr>
        <th scope="row">10</th>
        <th scope="row"> C.2.5 Indikator Kinerja Tambahan</th>
        <td>
            Pelampauan SN-DIKTI (indikator kinerja tambahan) yang ditetapkan oleh Unit Pengelola pada tiap kriteria
        </td>
        <td>
            {{ $d['f10'] }}
        </td>
        <td>
            {{ $d['n10'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">11</th>
        <th scope="row"> C.2.6 Evaluasi Capaian Kinerja
            </th>
        <td>
            Analisis keberhasilan dan/atau ketidakberhasilan pencapaian kinerja UPPS yang telah ditetapkan di tiap kriteria.
        </td>
        <td>
            {{ $d['f11'] }}
        </td>
        <td>
            {{ $d['n11'] }}
        </td>
    </tr>
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
        <th scope="row">13</th>
        <th scope="row"> C.2.8. Kepuasan Pemangku Kepentingan
            </th>
        <td>
            Pengukuran kepuasan para pemangku kepentingan (mahasiswa, dosen, tenaga kependidikan, lulusan, pengguna, mitra industri, dan mitra lainnya) terhadap layanan manajemen
        </td>
        <td>
            {{ $d['f13'] }}
        </td>
        <td>
            {{ $d['n13'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">14</th>
        <th scope="row"> C.3. Mahasiswa
            <br>
            C.3.4. Indikator Kinerja Utama
            <br>
            C.3.4.a) Kualitas Input Mahasiswa
        </th>
        <td>
            Metoda rekrutmen dan keketatan seleksi. Tabel 2.a LKPS
        </td>
        <td>
            {{ $d['f14'] }}
        </td>
        <td>
            {{ $d['n14'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">15</th>
        <th scope="row"> C.3.4.b) Daya Tarik Program Studi
            </th>
        <td>Peningkatan animo calon mahasiswa. Tabel 2.a LKPS.Mahasiswa asing. Tabel 2.b LKPS
        </td>
        <td>
            {{ $d['f15'] }}
        </td>
        <td>
            {{ $d['n15'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">16</th>
        <th scope="row"> C.3.4.c) Layanan Kemahasiswaan

            </th>
        <td>A. Ketersediaan layanan kemahasiswaan.
            <br>B. Akses dan mutu layanan kemahasiswaan.           
        </td>
        <td>
            {{ $d['f16'] }}
        </td>
        <td>
            {{ $d['n16'] }}
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
        <th scope="row">20</th>
        <th scope="row"> 

        </th>
        <td>
            Rasio jumlah mahasiswa program studi terhadap jumlah DTPS.
            <br>
            Tabel 2.a LKPS
            <br>
            Tabel 3.a.1) LKPS
        </td>
        <td>
            {{ $d['f20'] }}
        </td>
        <td>
            {{ $d['n20'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">21</th>
        <th scope="row">

        </th>
        <td>
            Penugasan dosen sebagai pembimbing utama tugas akhir mahasiswa. Tabel 
            <br>
            3.a.2) LKPS.            
        </td>
        <td>
            {{ $d['f21'] }}
        </td>
        <td>
            {{ $d['n21'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">22</th>
        <th scope="row">

        </th>
        <td>
            Ekuivalensi Waktu Mengajar Penuh DTPS. 
            <br>
            Tabel 3.a.3) LKPS
        </td>
        <td>
            {{ $d['f22'] }}
        </td>
        <td>
            {{ $d['n22'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">23</th>
        <th scope="row">

        </th>
        <td>
            Dosen tidak tetap. 
            <br>
            Tabel 3.a.4) LKPS
        </td>
        <td>
            {{ $d['f23'] }}
        </td>
        <td>
            {{ $d['n23'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">24</th>
        <th scope="row">
            C.4.4.b) Kinerja Dosen
        </th>
        <td>
            Pengakuan/rekognisi atas kepakaran/prestasi/kinerja DTPS 
            <br>
            Tabel 3.b.1) LKPS
        </td>
        <td>
            {{ $d['f24'] }}
        </td>
        <td>
            {{ $d['n24'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">25</th>
        <th scope="row">

        </th>
        <td>
            Kegiatan penelitian DTPS yang relevan dengan bidang program studi dalam 3 tahun terakhir. 
            <br>
            Tabel 3.b.2) LKPS
        </td>
        <td>
            {{ $d['f25'] }}
        </td>
        <td>
            {{ $d['n25'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">26</th>
        <th scope="row">

        </th>
        <td>
            Kegiatan PkM DTPS yang relevan dengan bidangprogram studi dalam 3 tahun terakhir. 
            <br>
            Tabel 3.b.3) LKPS
        </td>
        <td>
            {{ $d['f26'] }}
        </td>
        <td>
            {{ $d['n26'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">27</th>
        <th scope="row">

        </th>
        <td>
            Publikasi ilmiah dengan tema yang relevan dengan bidang program studi yang dihasilkan DTPS dalam 3 tahun terakhir.
            <br>
            Tabel 3.b.4) LKPS
        </td>
        <td>
            {{ $d['f27'] }}
        </td>
        <td>
            {{ $d['n27'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">28</th>
        <th scope="row">

        </th>
        <td>
            Artikel karya ilmiah dosen tetap yang disitasi dalam 3 tahun terakhir. 
            <br>
            Tabel 3.b.5) LKPS            
        </td>
        <td>
            {{ $d['f28'] }}
        </td>
        <td>
            {{ $d['n28'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">29</th>
        <th scope="row">

        </th>
        <td>
            Luaran penelitian dan PkM yang dihasilkan DTPS dalam 3 tahun terakhir.
            <br>
            Tabel 3.b.7) LKPS
        </td>
        <td>
            {{ $d['f29'] }}
        </td>
        <td>
            {{ $d['n29'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">30</th>
        <th scope="row">
            C.4.4.c) Pengembangan Dosen
        </th>
        <td>
            Upaya pengembangan dosen unit pengelola dan program studi.
        </td>
        <td>
            {{ $d['f30'] }}
        </td>
        <td>
            {{ $d['n30'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">31</th>
        <th scope="row">
            C.4.4.d) Tenaga Kependidikan
        </th>
        <td>
            A. Kualifikasi dan kecukupan tenaga kependidikan berdasarkan jenis pekerjaannya (administrasi, pustakawan, teknisi, dll.).
            <br>
            B. Kualifikasi dan kecukupan laboran untuk mendukung proses pembelajaran sesuai dengan kebutuhan program studi. 
        </td>
        <td>
            {{ $d['f31'] }}
        </td>
        <td>
            {{ $d['n31'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">32</th>
        <th scope="row">
            C.5. Keuangan, Sarana dan Prasarana
            <br>
            C.5.4. Indikator Kinerja Utama
            <br>
            C.5.4.a) Keuangan
        </th>
        <td>
            Biaya operasional pendidikan.
            <br>
            Tabel 4 LKPS
        </td>
        <td>
            {{ $d['f32'] }}
        </td>
        <td>
            {{ $d['n32'] }}
        </td>
    </tr>    
    <tr>
        <th scope="row">33</th>
        <th scope="row">

        </th>
        <td>
            Dana penelitian DTPS. 
            <br>
            Tabel 4 LKPS
        </td>
        <td>
            {{ $d['f33'] }}
        </td>
        <td>
            {{ $d['n33'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">34</th>
        <th scope="row">

        </th>
        <td>
            Dana pengabdian kepada masyarakat DTPS. 
            <br>
            Tabel 4 LKPS
        </td>
        <td>
            {{ $d['f34'] }}
        </td>
        <td>
            {{ $d['n34'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">35</th>
        <th scope="row">

        </th>
        <td>
            Realisasi investasi (SDM, sarana dan prasarana) yang mendukung penyelenggaraan tridharma.
        </td>
        <td>
            {{ $d['f35'] }}
        </td>
        <td>
            {{ $d['n35'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">36</th>
        <th scope="row">

        </th>
        <td>
            Kecukupan dana untuk menjamin pencapaian capaian pembelajaran
        </td>
        <td>
            {{ $d['f36'] }}
        </td>
        <td>
            {{ $d['n36'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">37</th>
        <th scope="row">
            C.5.4.b) Sarana dan Prasarana
        </th>
        <td>
            Kecukupan, aksesibilitas dan mutu sarana dan prasarana untuk menjamin pencapaian capaian pembelajaran dan meningkatkan suasana akademik.
        </td>
        <td>
            {{ $d['f37'] }}
        </td>
        <td>
            {{ $d['n37'] }}
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
    <tr>
        <th scope="row">39</th>
        <th scope="row">
            C.6.4.b) Karakteristik Proses Pembelajaran
        </th>
        <td>
            Pemenuhan karakteristik proses pembelajaran, yang terdiri atas sifat: 
            <br>
            1) interaktif, 
            <br>
            2) holistik, 
            <br>
            3) integratif, 
            <br>
            4) saintifik, 
            <br>
            5) kontekstual, 
            <br>
            6) tematik,
            <br>
            7) efektif, 
            <br>
            8) kolaboratif
            <br>
            9) berpusat pada mahasiswa
        </td>
        <td>
            {{ $d['f39'] }}
        </td>
        <td>
            {{ $d['n39'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">40</th>
        <th scope="row">
            C.6.4.c) Rencana Proses Pembelajaran
        </th>
        <td>
            A. Ketersediaan dan kelengkapan dokumen rencana pembelajaran semester (RPS).
            <br>
            B. Kedalaman dan keluasan RPS sesuai dengan capaian pembelajaran lulusan
        </td>
        <td>
            {{ $d['f40'] }}
        </td>
        <td>
            {{ $d['n40'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">41</th>
        <th scope="row">
            C.6.4.d) Pelaksanaan Proses Pembelajaran
        </th>
        <td>
            A. Bentuk interaksi antara dosen, mahasiswa dan sumber belajar.
            <br>
            B. Pemantauan kesesuaian proses terhadap rencana pembelajaran.
            <br>
            C. Proses pembelajaran yang terkait dengan penelitian harus mengacu SN Dikti Penelitian.
            <br>
            D. Proses pembelajaran yang terkait dengan PkM harus mengacu SN Dikti PkM.
            <br>
            E. Kesesuaian metode pembelajaran dengan capaian pembelajaran. Contoh: RBE (research based education), IBE (industry based education), teaching factory/teaching industry, dll.            
        </td>
        <td>
            {{ $d['f41'] }}
        </td>
        <td>
            {{ $d['n41'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">42</th>
        <th scope="row">

        </th>
        <td>
            Pembelajaran yang dilaksanakan dalam bentuk praktikum, praktik studio, praktik bengkel, atau praktik lapangan. Tabel 5.a LKPS.
        </td>
        <td>
            {{ $d['f42'] }}
        </td>
        <td>
            {{ $d['n42'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">43</th>
        <th scope="row">
            C.6.4.e) Monitoring dan Evaluasi Proses Pembelajaran
        </th>
        <td>
            Monitoring dan evaluasi pelaksanaan proses pembelajaran mencakup karakteristik, perencanaan, pelaksanaan, proses pembelajaran dan beban belajar mahasiswa untuk memperoleh capaian pembelajaran lulusan.
        </td>
        <td>
            {{ $d['f43'] }}
        </td>
        <td>
            {{ $d['n43'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">44</th>
        <th scope="row">
            C.6.4.f) Penilaian Pembelajaran
        </th>
        <td>
            A. Mutu pelaksanaan penilaian pembelajaran (proses dan hasil belajar mahasiswa) untuk mengukur ketercapaian capaian pembelajaran berdasarkanprinsip-prnsip penilaian yang dilakukan secara terintegrasi.
            <br>
            B. Pelaksanaan penilaian terdiri atas teknik dan instrumen penilaian.
            <br>
            C. Pelaksanaan penilaian memuat 7 unsur penilaian
        </td>
        <td>
            {{ $d['f44'] }}
        </td>
        <td>
            {{ $d['n44'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">45</th>
        <th scope="row">
            C.6.4.g) Integrasi kegiatan penelitian dan PkM dalam pembelajaran
        </th>
        <td>
            Integrasi kegiatan penelitian dan PkM dalam pembelajaran oleh DTPS dalam 3 tahun terakhir.
        </td>
        <td>
            {{ $d['f45'] }}
        </td>
        <td>
            {{ $d['n45'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">46</th>
        <th scope="row">
            C.6.4.h) Suasana Akademik
        </th>
        <td>
            Keterlaksanaan dan keberkalaan program dan kegiatan diluar kegiatan pembelajaran terstruktur untuk meningkatkan suasana akademik.
            <br>
            Contoh: kegiatan himpunan mahasiswa, kuliah umum/studium generale, seminar ilmiah, bedah buku.
        </td>
        <td>
            {{ $d['f46'] }}
        </td>
        <td>
            {{ $d['n46'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">47</th>
        <th scope="row">
            C.6.4.i) Kepuasan Mahasiswa            
        </th>
        <td>
            A. Tingkat kepuasan mahasiswa terhadap proses pendidikan. Tabel 5.c LKPS
            <br>
            B. Analisis dan tindak lanjut dari hasil pengukuran kepuasan mahasiswa
        </td>
        <td>
            {{ $d['f47'] }}
        </td>
        <td>
            {{ $d['n47'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">48</th>
        <th scope="row">
            C.7. Penelitian
            <br>
            C.7.4. Indikator Kinerja Utama
            <br>
            C.7.4.a) Relevansi Penelitian
        </th>
        <td>
            Relevansi penelitian pada unit pengelola mencakup 4 unsur.
        </td>
        <td>
            {{ $d['f48'] }}
        </td>
        <td>
            {{ $d['n48'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">49</th>
        <th scope="row">
            C.7.4.b) Penelitian Dosen dan Mahasiswa
        </th>
        <td>
            Penelitian DTPS yang dalam pelaksanaannya melibatkan mahasiswa program studi dalam 3 tahun terakhir. Tabel 6.a LKPS
        </td>
        <td>
            {{ $d['f49'] }}
        </td>
        <td>
            {{ $d['n49'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">50</th>
        <th scope="row">
            C.8. Pengabdian kepada Masyarakat
            <br>
            C.8.4. Indikator Kinerja Utama
            <br>
            C.8.4.a) Relevansi PkM
        </th>
        <td>
            Relevansi PkM pada unit pengelola mencakup 4 unsur. 
        </td>
        <td>
            {{ $d['f50'] }}
        </td>
        <td>
            {{ $d['n50'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">51</th>
        <th scope="row">
            C.8.4.b) PkM Dosen dan Mahasiswa
        </th>
        <td>
            PkM DTPS yang dalam pelaksanaannya melibatkan mahasiswa program studi dalam 3 tahun terakhir. Tabel 7 LKPS.
        </td>
        <td>
            {{ $d['f51'] }}
        </td>
        <td>
            {{ $d['n51'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">52</th>
        <th scope="row">
            C.9. Luaran dan Capaian Tridharma
            <br>
            C.9.4. Indikator Kinerja Utama
            <br>
            C.9.4.a) Luaran Dharma Pendidikan
        </th>
        <td>
            Analisis pemenuhan capaian pembelajaran lulusan (CPL) yang diukur dengan metoda yang sahih dan relevan.
        </td>
        <td>
            {{ $d['f52'] }}
        </td>
        <td>
            {{ $d['n52'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">53</th>
        <th scope="row">

        </th>
        <td>
            PK lulusan. RIPK = Rata-rata IPK lulusan dalam 3 tahun terakhir.
            <br> 
            Tabel 8.a LKPS
        </td>
        <td>
            {{ $d['f53'] }}
        </td>
        <td>
            {{ $d['n53'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">54</th>
        <th scope="row">

        </th>
        <td>
            Prestasi mahasiswa di bidang akademik dalam 3 tahun terakhir. 
            <br>
            Tabel 8.b.1) LKPS
        </td>
        <td>
            {{ $d['f54'] }}
        </td>
        <td>
            {{ $d['n54'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">55</th>
        <th scope="row">

        </th>
        <td>
            Prestasi mahasiswa dibidang non-akademik dalam 3 tahun terakhir. 
            <br>
            Tabel 8.b.2) LKPS
        </td>
        <td>
            {{ $d['f55'] }}
        </td>
        <td>
            {{ $d['n55'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">56</th>
        <th scope="row">

        </th>
        <td>
            Masa studi. MS = Rata-rata masa studi lulusan (tahun). 
            <br>
            Tabel 8.c LKPS
        </td>
        <td>
            {{ $d['f56'] }}
        </td>
        <td>
            {{ $d['n56'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">57</th>
        <th scope="row">

        </th>
        <td>
            Kelulusan tepat waktu. PTW = Persentase kelulusan tepat waktu. 
            <br>
            Tabel 8.c LKPS
        </td>
        <td>
            {{ $d['f57'] }}
        </td>
        <td>
            {{ $d['n57'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">58</th>
        <th scope="row">

        </th>
        <td>
            Keberhasilan studi. PPS = Persentase keberhasilan studi. 
            <br>
            Tabel 8.c LKPS
        </td>
        <td>
            {{ $d['f58'] }}
        </td>
        <td>
            {{ $d['n58'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">59</th>
        <th scope="row">

        </th>
        <td>
            Pelaksanaan tracer study yang mencakup 5 aspek.
        </td>
        <td>
            {{ $d['f59'] }}
        </td>
        <td>
            {{ $d['n59'] }}
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
    <tr>
        <th scope="row">62</th>
        <th scope="row">

        </th>
        <td>
            Tingkat dan ukuran tempat kerja lulusan. 
            <br>
            Tabel 8.e.1) LKPS
        </td>
        <td>
            {{ $d['f62'] }}
        </td>
        <td>
            {{ $d['n62'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">63</th>
        <th scope="row">

        </th>
        <td>
            Tingkat kepuasan pengguna lulusan. 
            <br>
            Tabel 8.e.2) LKPS
        </td>
        <td>
            {{ $d['f63'] }}
        </td>
        <td>
            {{ $d['n63'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">64</th>
        <th scope="row">
            C.9.4.b) Luaran Dharma Penelitian dan PkM
        </th>
        <td>
            Publikasi ilmiah mahasiswa, yang dihasilkan secara mandiri atau bersama DTPS, dengan judul yang relevan dengan bidang program studi dalam 3 tahun terakhir. 
            <br>
            Tabel 8.f.1) LKPS
        </td>
        <td>
            {{ $d['f64'] }}
        </td>
        <td>
            {{ $d['n64'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">65</th>
        <th scope="row">

        </th>
        <td>
            Luaran penelitian dan PkM yang dihasilkan mahasiswa, baik secara mandiri atau bersama DTPS dalam 3 tahun terakhir. 
            <br>
            Tabel 8.f.4) LKPS
            
        </td>
        <td>
            {{ $d['f65'] }}
        </td>
        <td>
            {{ $d['n65'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">66</th>
        <th scope="row">
            D Analisis dan Penetapan Program Pengembangan
            <br>
            D.1 Analisis dan Capaian Kinerja
        </th>
        <td>
            Keserbacakupan (kelengkapan, keluasan, dan kedalaman), ketepatan, ketajaman, dan kesesuaian analisis capaian kinerja serta konsistensi dengan setiap kriteria.
        </td>
        <td>
            {{ $d['f66'] }}
        </td>
        <td>
            {{ $d['n66'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">67</th>
        <th scope="row">
            D.2 Analisis SWOT atau Analisis Lain yang Relevan
        </th>
        <td>
            Ketepatan analisis SWOT atau analisis yang relevan didalam mengembangkan strategi institusi
        </td>
        <td>
            {{ $d['f67'] }}
        </td>
        <td>
            {{ $d['n67'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">68</th>
        <th scope="row">
            D.3 Program Pengembangan
        </th>
        <td>
            Ketepatan di dalam menetapkan prioritas program pengembangan
        </td>
        <td>
            {{ $d['f68'] }}
        </td>
        <td>
            {{ $d['n68'] }}
        </td>
    </tr>
    <tr>
        <th scope="row">69</th>
        <th scope="row">
            D.4 Program Keberlanjutan
        </th>
        <td>
            UPPS memiliki kebijakan, ketersediaan sumberdaya, kemampuan melaksanakan, dan kerealistikan program
        </td>
        <td>
            {{ $d['f69'] }}
        </td>
        <td>
            {{ $d['n69'] }}
        </td>
    </tr>
    </tbody>
</table>


 @endforeach
@endsection