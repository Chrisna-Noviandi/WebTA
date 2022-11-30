@extends('wakil.navbar')

@section('title')
    <title>Laporan Evaluasi Diri</title>
@endsection

@section('nav')
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="/home-asesor"><i class="bi bi-house-fill"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/pengajuan"><i class="bi bi-people"></i>Daftar Pengajuan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active " href="/laporan-evaluasi-diri"><i class="bi bi-people"></i>LED</a>
  </li>
@endsection

@section('content')
@foreach ($led as $data)
    

  <form action="/laporan-evaluasi-diri/save/{{ $data['id_pengajuan'] }}" method="post" >
    @csrf
    <ol class="mt-5" style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;" type="A">
      <b><li class="mt-3"> Kondisi Eksternal</li></b>
        <p style="text-align: justify;"> 
          Bagian ini menjelaskan kondisi eksternal program studi yang terdiri atas
          lingkungan makro dan lingkungan mikro di tingkat lokal, nasional, dan
          internasional. Lingkungan makro mencakup aspek politik, ekonomi, kebijakan,
          sosial, budaya, perkembangan ilmu pengetahuan dan teknologi. Lingkungan
          Panduan Penyusunan LED – Instrumen Akreditasi Program Studi versi 4.0 14
          mikro mencakup aspek pesaing, pengguna lulusan, sumber calon mahasiswa,
          sumber calon dosen, sumber tenaga kependidikan, e-learning, pendidikan
          jarak jauh, Open Course Ware, kebutuhan dunia usaha/industri dan
          masyarakat, mitra, dan aliansi. UPPS perlu menganalisis aspek-aspek dalam
          lingkungan makro dan lingkungan mikro yang relevan dan dapat
          mempengaruhi eksistensi dan pengembangan UPPS dan program studi yang
          diakreditasi. UPPS harus mampu merumuskan strategi pengembangan
          program studi yang berkesesuaian untuk menghasilkan program-program
          pengembangan alternatif yang tepat, yang dijabarkan lebih rinci pada Bagian
          Kedua huruf D.
        </p>
        <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor1" name="a1" >{!! $data['a1'] !!}</textarea>
      <b><li class="mt-3">Profil Unit Pengelola Program Studi</li></b>
        <p style="text-align: justify;"> 
          Bagian ini berisi deskripsi sejarah Unit Pengelola Program Studi (UPPS), visi,
          misi, tujuan, strategi dan tata nilai, struktur organisasi, mahasiswa dan lulusan,
          sumber daya manusia (dosen dan tenaga kependidikan), keuangan, sarana
          dan prasarana, sistem penjaminan mutu internal, serta kinerja UPPS yang
          disajikan secara ringkas dan mengemukakan hal-hal yang paling penting.
          Aspek yang harus termuat dijelaskan sebagai berikut:
        </p>
        <ol class="mt-1" type="1">

          <b><li class="mt-3">Sejarah Unit Pengelola Program Studi</li></b>
            <p style="text-align: justify;"> 
              Pada bagian ini UPPS harus mampu menjelaskan riwayat pendirian dan
              perkembangan UPPS dan program studi yang diakreditasi secara ringkas
              dan jelas.             
            </p>
            <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor2" name="b1">{!! $data['b1'] !!}</textarea>
          <b><li class="mt-3">Visi, Misi, Tujuan, Strategi, dan Tata Nilai</li></b>
            <p style="text-align: justify;"> 
              Bagian ini berisi deskripsi singkat visi, misi, tujuan, strategi dan tata nilai
              yang diterapkan di UPPS dan program studi (visi keilmuan/scientific
              vision)                
            </p>
            <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor3" name="b2">{!! $data['b2'] !!}</textarea>
          <b><li class="mt-3">Organisasi dan Tata Kerja </li></b>
            <p style="text-align: justify;"> 
              Bagian ini berisi informasi dokumen formal organisasi dan tata kerja yang
              saat ini berlaku, termasuk di dalamnya diuraikan secara ringkas tentang
              struktur organisasi dan tata kerja UPPS dan program studi, tugas pokok,
              dan fungsinya (tupoksi).                              
            </p>
            <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor4" name="b3">{!! $data['b3'] !!}</textarea>
          <b><li class="mt-3">Mahasiswa dan Lulusan</li></b>
            <p style="text-align: justify;"> 
              Bagian ini berisi deskripsi ringkas data jumlah mahasiswa dan lulusan,
              termasuk kualitas masukan, prestasi monumental yang dicapai mahasiswa
              dan lulusan, serta kinerja lulusan.                
            </p>
            <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor5" name="b4">{!! $data['b4'] !!}</textarea>
          <b><li class="mt-3">Dosen dan Tenaga Kependidikan</li></b>
            <p style="text-align: justify;"> 
              Bagian ini berisi informasi ringkas jumlah dan kualifikasi SDM (dosen dan
              tenaga kependidikan), kecukupan dan kinerja, serta prestasi monumental
              yang dicapa              
            </p>
            <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor6" name="b5">{!! $data['b5'] !!}</textarea>
          <b><li class="mt-3">Keuangan, Sarana, dan Prasarana
          </li></b>
            <p style="text-align: justify;"> 
              Berisi deskripsi ringkas kecukupan, kelayakan, kualitas, dan aksesibilitas
              sumberdaya keuangan, sarana dan prasarana.                
            </p>
            <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor7" name="b6">{!! $data['b6'] !!}</textarea>
          <b><li class="mt-3">Sistem Penjaminan Mutu</li></b>
            <p style="text-align: justify;"> 
              Berisi deskripsi implementasi Sistem Penjaminan Mutu yang sesuai
              dengan kebijakan, organisasi, instrumen yang dikembangkan di tingkat
              perguruan tinggi, serta monitoring dan evaluasi, pelaporan, dan tindak
              lanjutnya. Deskripsi dapat dijelaskan dengan siklus PPEPP yang dilakukan
              oleh UPPS dan program studi, termasuk pengakuan mutu dari lembaga
              audit eksternal, lembaga akreditasi, dan lembaga sertifikasi.                
            </p>
            <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor8" name="b7">{!! $data['b7'] !!}</textarea>
          <b><li class="mt-3">Kinerja Unit Pengelola Program Studi</li></b>
            <p style="text-align: justify;"> 
              Berisi deskripsi luaran dan capaian yang paling diunggulkan dari UPPS
              dan program studi yang diakreditasi.                
            </p>
            <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor9" name="b8">{!! $data['b8'] !!}</textarea>
        </ol>
      <b><li class="mt-3">Kriteria</li></b>
      <p style="text-align: justify;"> 
        Bagian ini berisi uraian dan penjelasan mengenai latar belakang, kebijakan,
        strategi, indikator kinerja, evaluasi capaian kinerja, pelaksanaan penjaminan
        mutu, pengukuran kepuasan pengguna, serta simpulan hasil evaluasi dan
        tindak lanjut terkait pelaksanaan dan pengelolaan kegiatan tridharma di UPPS
        dan program studi yang diakreditasi pada 9 kriteria akreditasi, yang meliputi
        kriteria-kriteria:
        <br> 
        1) Visi, Misi, Tujuan, dan Strategi, 
        <br> 
        2) Tata Kelola, Tata Pamong, dan Kerjasama, 
        <br> 
        3) Mahasiswa, 
        <br> 
        4) Sumber Daya Manusia, 
        <br> 
        5) Keuangan, Sarana, dan Prasarana, 
        <br> 
        6) Pendidikan,
        <br> 
        7) Penelitian, 
        <br> 
        8) Pengabdian kepada Masyarakat, dan 
        <br> 
        9) Luaran dan Capaian Tridharma.      
      </p>
      <ol class="mt-1" type="1">

        <b><li class="mt-3">Visi, Misi, Tujuan, dan Stra</li></b>
          <p style="text-align: justify;"> 
            Bagian ini menjelaskan latar belakang, tujuan, rasional, dan mekanisme
            penetapan visi, misi, tujuan, dan strategi (VMTS) UPPS yang
            mencerminkan visi perguruan tinggi dan memayungi visi keilmuan
            program studi yang diakreditasi, serta rencana strategisnya.                       
          </p>
          <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor10" name="c1">{!! $data['c1'] !!}</textarea>
        <b><li class="mt-3">Tata Kelola, Tata Pamong, dan Kerjasama</li></b>
          <p style="text-align: justify;"> 
            Bagian ini mencakup latar belakang, tujuan, dan rasional penentuan
            strategi pencapaian standar pendidikan tinggi yang ditetapkan
            perguruan tinggi terkait tata kelola, tata pamong, dan kerjasama, yang
            mencakup: sistem tata pamong, kepemimpinan, sistem penjaminan
            mutu, dan kerjasama. Tata pamong merujuk pada struktur organisasi,
            mekanisme, dan proses bagaimana UPPS dan program studi yang
            diakreditasi dikendalikan dan diarahkan untuk mencapai visinya. Tata
            Panduan Penyusunan LED – Instrumen Akreditasi Program Studi versi 4.0 18
            pamong juga harus mengimplementasikan manajemen risiko untuk
            menjamin keberlangsungan UPPS dan program studi yang diakreditasi.
            Pada bagian ini harus dideskripsikan perwujudan tata pamong yang
            baik (good governance), sistem pengelolaan, sistem penjaminan mutu,
            dan kerjasama di UPPS dan program studi yang diakreditasi.                       
          </p>
          <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor11" name="c2">{!! $data['c2'] !!}</textarea>
        <b><li class="mt-3">Mahasiswa</li></b>
          <p style="text-align: justify;"> 
            Bagian ini mencakup latar belakang, tujuan, dan rasional penentuan
            strategi pencapaian standar pendidikan tinggi yang ditetapkan
            perguruan tinggi terkait kemahasiswaan yang mencakup kualitas input
            mahasiswa, daya tarik program studi, layanan kemahasiswaan,
            maupun standar khusus lain yang ditetapkan berdasarkan kebutuhan
            dan karakteristik proses pembelajaran di program studi yang
            diakreditasi.                       
          </p>
          <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor12" name="c3">{!! $data['c3'] !!}</textarea>
        <b><li class="mt-3">Sumber Daya Manusia</li></b>
          <p style="text-align: justify;"> 
            Bagian ini mencakup latar belakang, tujuan, dan rasional penentuan
            strategi pencapaian standar pendidikan tinggi yang ditetapkan
            perguruan tinggi terkait sumber daya manusia (SDM) yang mencakup:
            profil dosen (kualifikasi, kompetensi, proporsi dan beban kerja), kinerja
            dosen (kepakaran, kinerja dan prestasi di bidang pendidikan, penelitian
            dan PkM), pengembangan dosen, tenaga kependidikan, serta
            pengelolaan SDM (dosen dan tenaga kependidikan).
          </p>
          <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor13" name="c4">{!! $data['c4'] !!}</textarea>
        <b><li class="mt-3">Keuangan, Sarana, dan Prasarana</li></b>
          <p style="text-align: justify;"> 
            Bagian ini mencakup latar belakang, tujuan, dan rasional penentuan
            strategi pencapaian standar pendidikan tinggi yang ditetapkan
            perguruan tinggi terkait:
            <ol class="mt-1" type="a">
              <li> 
                keuangan yang mencakup aspek perencanaan, pengalokasian,
                realisasi, dan pertanggungjawaban biaya operasional tridharma
                serta investasi, dan
              </li>
              <li>
                sarana dan prasarana yang dimaksudkan untuk menjamin
                pencapaian capaian pembelajaran dan peningkatan suasana
                akademik.
              </li>
            </ol>                      
          </p>
          <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor14" name="c5">{!! $data['c5'] !!}</textarea>
        <b><li class="mt-3">Pendidikan</b>
          <p style="text-align: justify;"> 
            Bagian ini mencakup latar belakang, tujuan, dan rasional penentuan
            strategi pencapaian standar pendidikan tinggi yang ditetapkan
            perguruan tinggi terkait pendidikan, yang mencakup kurikulum,
            pembelajaran (karakteristik proses pembelajaran, rencana proses
            pembelajaran, pelaksanaan proses pembelajaran, monitoring dan
            evaluasi proses pembelajaran, dan penilaian pembelajaran), integrasi
            kegiatan penelitian dan PkM dalam pembelajaran, serta suasana
            akademik yang didasarkan atas faktor internal dan eksternal pada
            program studi yang diakreditasi.                                   
          </p>
          <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor15" name="c6">{!! $data['c6'] !!}</textarea>
        <b><li class="mt-3">Penelitian</li></b>
          <p style="text-align: justify;"> 
            Bagian ini mencakup latar belakang, tujuan, dan rasional penentuan
            strategi pencapaian standar pendidikan tinggi yang ditetapkan
            perguruan tinggi terkait penelitian, yang mencakup perencanaan,
            pelaksanaan, pemantauan, dan pelaporan penelitian yang didasarkan
            atas faktor internal dan eksternal pada bidang keilmuan program studi
            yang diakreditasi.                      
          </p>
          <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor16" name="c7">{!! $data['c7'] !!}</textarea>
        <b><li class="mt-3">Pengabdian kepada Masyarakat</li></b>
          <p style="text-align: justify;"> 
            Bagian ini mencakup latar belakang, tujuan, dan rasional penentuan
            strategi pencapaian standar pendidikan tinggi yang ditetapkan
            perguruan tinggi terkait pengabdian kepada masyarakat (PkM), yang
            mencakup perencanaan, pelaksanaan, pemantauan, dan pelaporan
            PkM yang didasarkan atas faktor internal dan eksternal pada bidang
            keilmuan program studi yang diakreditasi.                      
          </p>
          <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor17" name="c8">{!! $data['c8'] !!}</textarea>
        <b><li class="mt-3">Luaran dan Capaian Tridharma</li></b>
          <p style="text-align: justify;"> 
            Bagian ini mencakup latar belakang, tujuan, dan rasional penentuan
            strategi pencapaian standar pendidikan tinggi yang ditetapkan
            perguruan tinggi terkait pengabdian kepada masyarakat (PkM), yang
            mencakup perencanaan, pelaksanaan, pemantauan, dan pelaporan
            PkM yang didasarkan atas faktor internal dan eksternal pada bidang
            keilmuan program studi yang diakreditasi.                       
          </p>
          <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor18" name="c9">{!! $data['c9'] !!}</textarea>
      </ol>
      <b><li class="mt-3">
        ANALISIS DAN PENETAPAN PROGRAM PENGEMBANGAN UNIT
        PENGELOLA PROGRAM STUDI TERKAIT PROGRAM STUDI YANG
        DIAKREDITASI
      </li></b>
      <ol class="mt-1" type="1">
        <b><li class="mt-3">Analisis Capaian Kinerja</li></b>
          <p style="text-align: justify">
            Aspek-aspek antar kriteria yang dievaluasi mencakup kelengkapan,
            keluasan, kedalaman, ketepatan, dan ketajaman analisis untuk
            mengidentifikasi akar masalah yang didukung oleh data/informasi yang
            andal dan memadai serta konsisten dengan hasil analisis yang
            disampaikan pada setiap kriteria di atas.          
          </p>
          <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor19" name="d1">{!! $data['d1'] !!}</textarea>
        <b><li class="mt-3">Analisis SWOT atau Analisis Lain yang Relevan</li></b>
          <p style="text-align: justify">
            Ketepatan mengidentifikasi kekuatan atau faktor pendorong, kelemahan
            atau faktor penghambat, peluang dan ancaman yang dihadapi dalam
            keterkaitannya dengan hasil analisis capaian kinerja. Hasil identifikasi
            tersebut dianalisis untuk menentukan posisi UPPS dan program studi yang
            diakreditasi, serta menjadi dasar untuk mendapatkan alternatif solusi dan
            menetapkan program pengembangan.          
          </p>
          <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor20" name="d2">{!! $data['d2'] !!}</textarea>
        <b><li class="mt-3"></li></b>
          <p style="text-align: justify">
            Kemampuan UPPS dalam menetapkan strategi dan program
            pengembangan berdasarkan prioritas sesuai dengan kapasitas, kebutuhan,
            dan VMT UPPS secara keseluruhan, terutama pengembangan program
            studi yang diakreditasi.          
          </p>
          <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor21" name="d3">{!! $data['d3'] !!}</textarea>
        <b><li class="mt-3">Program Keberlanjutan </li></b>
          <p style="text-align: justify">
            Mekanisme penjaminan keberlangsungan program pengembangan dan
            good practices yang dihasilkan, serta jaminan ketersediaan sumberdaya
            untuk mendukung pelaksanaan program termasuk rencana penjaminan
            mutu yang berkelanjutan.          
          </p>
          <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor22" name="d4">{!! $data['d4'] !!}</textarea>
      </ol>
      <b><li class="mt-3">PENUTUP</li></b>
      <p style="text-align: justify">
        Bagian ini berisi deskripsi yang memuat kesimpulan akhir dari Laporan Evaluasi
        Diri.      
      </p>
      <textarea class="form-control mt-5" placeholder="Leave a comment here" id="ckeditor23" name="e1">{!! $data['e1'] !!}</textarea>
    </ol>
    
    <div class="d-grid gap-2">
      <button type="submit" class="btn btn-outline-dark btn-lg mt-5 mb-5">Simpan Laporan</button>
    </div>
  </form>
@endforeach


  <script src={{ asset('ckeditor/build/ckeditor.js') }}></script>

@for($i = 1 ; $i <= 23 ; $i++)
  <script>
    ClassicEditor
        .create( document.querySelector( '#ckeditor{{ $i }}' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>
@endfor


@endsection

