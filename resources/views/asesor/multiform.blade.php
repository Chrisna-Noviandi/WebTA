<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Bootstrap Multi Step Form</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
<div>
  {{-- modal A1 --}}
  <div class="modal fade" id="modala1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Konsistensi dengan hasil analisis SWOT dan/atau analisis lain serta rencana pengembangan ke depan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            Unit Pengelola Program Studi (UPPS) mampu:
            <ol>
              <li>
                mengidentifikasi kondisi lingkungan dan industri yang relevan secara komprehensif dan strategis,
              </li>
              <li>
                menetapkan posisi
                relatif program studi
                terhadap lingkungannya,
              </li>
              <li>
                menggunakan hasil
                identifikasi dan posisi yang
                ditetapkan untuk
                melakukan analisis
                (SWOT/metoda analisis
                lain yang relevan) untuk
                pengembangan program
                studi, dan
              </li>
              <li>
                merumuskan strategi
                pengembangan program
                studi yang berkesesuaian
                untuk menghasilkan
                program-program
                pengembangan alternatif
                yang tepat
              </li>
            </ol>

            <b><li>Nilai 3</li></b>
            Unit Pengelola Program Studi (UPPS) mampu:
            <ol>
              <li>
                mengidentifikasi kondisi
                lingkungan dan industri
                yang relevan secara
                komprehensif
              </li>
              <li>
                menetapkan posisi
                relatif program studi
                terhadap lingkungannya,
                dan
              </li>
              <li>
                menggunakan hasil
                identifikasi dan posisi yang
                ditetapkan untuk
                melakukan analisis
                (SWOT/metoda analisis
                lain yang relevan) untuk
                pengembangan program
                studi
              </li>
            </ol>
            <b><li>Nilai 2</li></b>
            Unit Pengelola Program Studi (UPPS) mampu:
            <ol>
              <li>
                mengidentifikasi kondisi
                lingkungan dan industri
                yang relevan, dan
              </li>
              <li>
                menetapkan posisi 
                relatif program studi 
                terhadap lingkungannya
              </li>
            </ol>
            <b><li>Nilai 1</li></b>
            Unit Pengelola Program Studi (UPPS) kurang mampu:
            <ol>
              <li>
                mengidentifikasi kondisi
                lingkungan dan industri
                yang relevan, dan
              </li>
              <li>
                menetapkan posisi 
                relatif program studi 
                terhadap lingkungannya
              </li>
            </ol>
            <b><li>Nilai 0</li></b>
            Unit Pengelola Program Studi (UPPS) tidak mampu:
            <ol>
              <li>
                mengidentifikasi kondisi
                lingkungan dan industri
                yang relevan, dan
              </li>
              <li>
                menetapkan posisi 
                relatif program studi 
                terhadap lingkungannya
              </li>
            </ol>
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal B1 --}}
  <div class="modal fade" id="modalb1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalb1">Keserbacakupan 
            informasi dalam profil 
            dan konsistensi antara 
            profil dengan data dan 
            informasi yang 
            disampaikan pada 
            masing-masing kriteria, 
            serta menunjukkan iklim 
            yang kondusif untuk 
            pengembangan dan 
            reputasi sebagai rujukan 
            di bidang keilmuannya.</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            Profil UPPS:
            <ol>
              <li>
                menunjukkan 
                keserbacakupan informasi 
                yang jelas dan konsisten 
                dengan data dan informasi 
                yang disampaikan pada 
                masing-masing kriteria
              </li>
              <li>
                menggambarkan 
                keselarasan dengan 
                substansi keilmuan 
                program studi
              </li>
              <li>  
                menunjukkan iklim yang 
                kondusif untuk pengembangan keilmuan 
                program studi.
              </li>
              <li>
                menunjukkan reputasi 
                sebagai rujukan di bidang 
                keilmuannya.
              </li>
            </ol>

            <b><li>Nilai 3</li></b>
            Profil UPPS:
            <ol>
              <li>
                menunjukkan 
                keserbacakupan informasi 
                yang jelas dan konsisten 
                dengan data dan informasi 
                yang disampaikan pada 
                masing-masing kriteria,
              </li>
              <li>
                menggambarkan 
                keselarasan dengan 
                substansi keilmuan 
                program studi. 
              </li>
              <li>
                menunjukkan iklim yang 
                kondusif untuk pengembangan keilmuan 
                program studi.
              </li>
            </ol>
            <b><li>Nilai 2</li></b>
            Profil UPPS:
            <ol>
              <li>
                menunjukkan 
                keserbacakupan informasi 
                yang jelas dan konsisten 
                dengan data dan informasi 
                yang disampaikan pada 
                masing-masing kriteria,
              </li>
              <li>
                menggambarkan 
                keselarasan dengan 
                substansi keilmuan 
                program studi. 
              </li>
            </ol>
            <b><li>Nilai 1</li></b>
            Profil UPPS:
            <ol>
              <li>
                kurang menunjukkan 
                keserbacakupan informasi 
                yang jelas dan konsisten 
                dengan data dan informasi 
                yang disampaikan pada 
                masing-masing kriteria,
              </li>
              <li>
                kurang menggambarkan 
                keselarasan dengan 
                substansi keilmuan 
                program studi. 
              </li>
            </ol>
            <b><li>Nilai 0</li></b>
            Profil UPPS tidak 
            menunjukkan 
            keserbacakupan 
            informasi yang jelas 
            dengan data dan 
            informasi yang 
            disampaikan pada 
            masing-masing kriteria. 
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C3 --}}
  <div class="modal fade" id="modalc3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc3">Kesesuaian Visi, Misi, 
            Tujuan dan Strategi 
            (VMTS) Unit Pengelola 
            Program Studi (UPPS) 
            terhadap VMTS 
            Perguruan Tinggi (PT) 
            dan visi keilmuan 
            Program Studi (PS) 
            yang dikelolanya.
            </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            UPPS memiliki:
            <ol>
              <li>
                visi yang mencerminkan 
                visi perguruan tinggi dan 
                memayungi visi keilmuan 
                terkait keunikan program 
                studi serta didukung data 
                implementasi yang 
                konsisten,                
              </li>
              <li>
                misi, tujuan, dan 
                strategi yang searah dan 
                bersinerji dengan misi, 
                tujuan, dan strategi 
                perguruan tinggi serta 
                mendukung 
                pengembangan program 
                studi dengan data 
                implementasi yang 
                konsisten.
              </li>
            </ol>

            <b><li>Nilai 3</li></b>
            UPPS memiliki:
            <ol>
              <li>
                visi yang mencerminkan 
                visi perguruan tinggi dan 
                memayungi visi keilmuan 
                terkait keunikan program 
                studi,
              </li>
              <li>
                misi, tujuan, dan strategi 
                yang searah dan bersinerji 
                dengan misi, tujuan, dan 
                strategi perguruan tinggi 
                serta mendukung 
                pengembangan program 
                studi
              </li>
            </ol>
            <b><li>Nilai 2</li></b>
            UPPS memiliki: 
            <ol>
              <li>
                visi yang mencerminkan 
                visi perguruan tinggi dan 
                memayungi visi keilmuan 
                terkait program studi,
              </li>
              <li>
                misi, tujuan, dan 
                strategi yang searah 
                dengan misi, tujuan, dan 
                strategi perguruan tinggi 
                serta mendukung 
                pengembangan program 
                studi.
              </li>
            </ol>
            <b><li>Nilai 1</li></b>
            UPPS memiliki:
            <ol>
              <li>
                visi yang mencerminkan 
                visi perguruan tinggi 
                namun tidak memayungi 
                visi keilmuan terkait 
                program studi,
              </li>
              <li>
                kurang menggambarkan 
                keselarasan dengan 
                substansi keilmuan 
                program studi. visi yang mencerminkan 
                visi perguruan tinggi 
                namun tidak memayungi 
                visi keilmuan terkait 
                program studi,  
              </li>
            </ol>
            <b><li>Nilai 0</li></b>
            UPPS memiliki misi, 
            tujuan, dan strategi yang 
            tidak terkait dengan 
            strategi perguruan tinggi 
            dan pengembangan 
            program studi 
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C4 --}}
  <div class="modal fade" id="modalc4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc4">Mekanisme dan 
            keterlibatan pemangku 
            kepentingan dalam 
            penyusunan VMTS 
            UPPS.
            </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            Ada mekanisme dalam 
            penyusunan dan 
            penetapan visi, misi, 
            tujuan dan strategi yang 
            terdokumentasi serta ada 
            keterlibatan semua 
            pemangku kepentingan 
            internal (dosen, 
            mahasiswa dan tenaga 
            kependidikan) dan 
            eksternal (lulusan, 
            pengguna lulusan dan 
            pakar/mitra/organisasi 
            profesi/pemerintah).

            <b><li>Nilai 3</li></b>
            Ada mekanisme dalam 
            penyusunan dan 
            penetapan visi, misi, tujuan 
            dan strategi yang 
            terdokumentasi serta ada 
            keterlibatan pemangku 
            kepentingan internal 
            (dosen, mahasiswa dan 
            tenaga kependidikan) dan 
            pemangku kepentingan 
            eksternal (lulusan dan 
            pengguna lulusan). 
            <b><li>Nilai 2</li></b>
            Ada mekanisme dalam 
            penyusunan dan 
            penetapan visi, misi, 
            tujuan dan strategi yang 
            terdokumentasi serta ada 
            keterlibatan pemangku 
            kepentingan internal 
            (dosen dan mahasiswa) 
            dan pemangku 
            kepentingan eksternal 
            (lulusan).
            <b><li>Nilai 1</li></b>
            Ada mekanisme dalam 
            penyusunan dan 
            penetapan visi, misi, 
            tujuan dan strategi yang 
            terdokumentasi namun 
            tidak melibatkan 
            pemangku kepentingan.
            <b><li>Nilai 0</li></b>
            Tidak ada mekanisme 
            dalam penyusunan dan 
            penetapan visi, misi, 
            tujuan dan strategi.
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C5 --}}
  <div class="modal fade" id="modalc5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc5">Strategi pencapaian 
            tujuan disusun 
            berdasarkan analisis 
            yang sistematis, serta 
            pada pelaksanaannya 
            dilakukan pemantauan 
            dan evaluasi yang 
            ditindaklanjuti. 
            </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            Strategi efektif untuk 
            mencapai tujuan dan 
            disusun berdasarkan 
            analisis yang sistematis
            dengan menggunakan 
            metoda yang relevan dan 
            terdokumentasi serta pada 
            pelaksanaannya dilakukan 
            pemantauan dan evaluasi 
            dan ditindaklanjuti.
            <b><li>Nilai 3</li></b>
            Strategi efektif untuk 
            mencapai tujuan dan 
            disusun berdasarkan 
            analisis yang sistematis 
            dengan menggunakan 
            metoda yang relevan dan 
            terdokumentasi serta pada 
            pelaksanaannya dilakukan 
            pemantauan dan evaluasi.
            <b><li>Nilai 2</li></b>
            Strategi untuk mencapai 
            tujuan dan disusun 
            berdasarkan analisis yang 
            sistematis dengan 
            menggunakan metoda 
            yang relevan serta 
            terdokumentasi namun 
            belum terbukti 
            efektifitasnya.
            <b><li>Nilai 1</li></b>
            Strategi untuk mencapai 
            tujuan disusun 
            berdasarkan analisis yang 
            kurang sistematis serta 
            tidak menggunakan 
            metoda yang relevan.
            <b><li>Nilai 0</li></b>
            Tidak memiliki strategi 
            untuk mencapai tujuan.            
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C6 --}}
  <div class="modal fade" id="modalc6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc6">Cara menghitung Skor ()Skor = (A + (2 x B)) / 3)</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h2 class="fs-5">A. Kelengkapan struktur 
            organisasi dan 
            keefektifan 
            penyelenggaraan 
            organisasi.</h2>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              UPPS memiliki dokumen 
              formal struktur organisasi 
              dan tata kerja yang 
              dilengkapi tugas dan 
              fungsinya, serta telah 
              berjalan secara konsisten 
              dan menjamin tata 
              pamong yang baik serta 
              berjalan efektif dan efisien
              <b><li>Nilai 3</li></b>
              UPPS memiliki dokumen 
              formal struktur organisasi 
              dan tata kerja yang 
              dilengkapi tugas dan 
              fungsinya, serta telah 
              berjalan secara konsisten 
              dan menjamin tata 
              pamong yang baik.              
              <b><li>Nilai 2</li></b>
              UPPS memiliki dokumen 
              formal struktur organisasi 
              dan tata kerja yang 
              dilengkapi tugas dan 
              fungsinya, serta telah 
              berjalan secara konsisten.
              <b><li>Nilai 1</li></b>
              UPPS memiliki dokumen 
              formal struktur organisasi 
              dan tata kerja namun 
              tugas dan fungsi belum 
              berjalan secara konsisten.
              <b><li>Nilai 0</li></b>
              UPPS tidak memiliki 
              dokumen formal struktur 
              organisasi.            
            </ol>
          <hr>
          <h2 class="fs-5">B. Perwujudan good 
            governance dan 
            pemenuhan lima pilar 
            sistem tata pamong, 
            yang mencakup:
            <ol>
              <li>Kredibel,</li>
              <li>Transparan,</li>
              <li>Akuntabel,</li>
              <li>Bertanggung jawab,</li>
              <li>Adil.</li>
            </ol>
          </h2>
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            UPPS memiliki praktek 
            baik (best practices) 
            dalam menerapkan tata 
            pamong yang memenuhi 5 
            kaidah good governance
            untuk menjamin 
            penyelenggaraan program 
            studi yang bermutu.
            <b><li>Nilai 3</li></b>
            UPPS memiliki praktek 
            baik (best practices) dalam 
            menerapkan tata pamong 
            yang memenuhi 4 kaidah 
            good governance untuk 
            menjamin 
            penyelenggaraan program 
            studi yang bermutu.              
            <b><li>Nilai 2</li></b>
            UPPS memiliki praktek 
            baik (best practices) 
            dalam menerapkan tata 
            pamong yang memenuhi 3 
            kaidah good governance
            untuk menjamin 
            penyelenggaraan program 
            studi yang bermutu
            <b><li>Nilai 1</li></b>
            UPPS memiliki praktek 
            baik (best practices) 
            dalam menerapkan tata 
            pamong yang memenuhi 1 
            s.d. 2 kaidah good 
            governance untuk 
            menjamin 
            penyelenggaraan program 
            studi yang bermutu.
            <b><li>Tidak ada Skor kurang dari 1.</li></b>         
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C7 --}}
  <div class="modal fade" id="modalc7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc7">Cara menghitung Skor ()Skor = (A + (2 x B)) / 3)</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h2 class="fs-5">A. Komitmen pimpinan 
            UPPS.</h2>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Terdapat bukti/pengakuan 
              yang sahih bahwa 
              pimpinan UPPS memiliki 
              karakter kepemimpinan 
              operasional, 
              organisasi, dan publik.
              <b><li>Nilai 3</li></b>
              Terdapat bukti/pengakuan 
              yang sahih bahwa 
              pimpinan UPPS memiliki 2 
              karakter diantara 
              kepemimpinan 
              operasional, 
              organisasi, dan publik.              
              <b><li>Nilai 2</li></b>
              Terdapat bukti/pengakuan 
              yang sahih bahwa 
              pimpinan UPPS memiliki 
              salah satu karakter 
              diantara kepemimpinan 
              operasional, 
              organisasi, dan publik. 
              <b><li>Tidak ada skor kurang dari 2.</li></b>           
            </ol>
          <hr>
          <h2 class="fs-5">B. Kapabilitas pimpinan 
            UPPS, mencakup 
            aspek:            
            <ol>
              <li>perencanaan,</li>
              <li>pengorganisasian,</li>
              <li>penempatan personel, </li>
              <li>pelaksanaan,</li>
              <li>pengendalian dan 
                pengawasan, dan</li>
              <li> pelaporan yang 
                menjadi dasar tindak 
                lanjut.</li>
            </ol>
          </h2>
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            Pimpinan UPPS mampu :
            <ol>
              <li>melaksanakan 6 fungsi 
                manajemen secara efektif 
                dan efisien,</li>
              <li>mengantisipasi dan 
                menyelesaikan masalah
                pada situasi yang tidak 
                terduga,</li>
              <li>melakukan inovasi 
                untuk menghasilkan nilai 
                tambah.</li>
            </ol>
            <b><li>Nilai 3</li></b>
            Pimpinan UPPS mampu :
            <ol>
              <li>melaksanakan 6 fungsi 
                manajemen secara efektif 
                dan efisien,</li>
              <li>mengantisipasi dan 
                menyelesaikan masalah   
                pada situasi yang tidak 
                terduga. </li>
            </ol>         
            <b><li>Nilai 2</li></b>
            Pimpinan UPPS mampu 
            melaksanakan 6 fungsi 
            manajemen secara efektif.
            <b><li>Nilai 1</li></b>
            Pimpinan UPPS mampu 
            melaksanakan kurang dari 
            6 fungsi manajemen. 
            <b><li>Tidak ada Skor kurang dari 1.</li></b>         
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C8 --}}
  <div class="modal fade" id="modalc8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc8">Mutu, manfaat, 
            kepuasan dan 
            keberlanjutan kerjasama 
            pendidikan, penelitian 
            dan PkM yang relevan 
            dengan program studi. 
            UPPS memiliki bukti 
            yang sahih terkait 
            kerjasama yang ada 
            telah memenuhi 3 aspek 
            berikut: 
            <ol>
              <li>memberikan manfaat 
                bagi program studi 
                dalam pemenuhan 
                proses pembelajaran, 
                penelitian, PkM.</li>
              <li> memberikan 
                peningkatan kinerja 
                tridharma dan fasilitas 
                pendukung program 
                studi. </li>
              <li>memberikan 
                kepuasan kepada mitra 
                industri dan mitra 
                kerjasama lainnya, serta 
                menjamin keberlanjutan 
                kerjasama dan hasilnya.
                </li>
            </ol>
            </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            UPPS memiliki bukti yang 
            sahih terkait kerjasama 
            yang ada telah memenuhi 
            3 aspek
            <b><li>Nilai 3</li></b>
            UPPS memiliki bukti yang 
            sahih terkait kerjasama 
            yang ada telah memenuhi 
            aspek 1 dan 2.            
            <b><li>Nilai 2</li></b>
            UPPS memiliki bukti yang 
            sahih terkait kerjasama 
            yang ada telah memenuhi 
            aspek 1
            <b><li>Nilai 1</li></b>
            UPPS tidak memiliki bukti 
            pelaksanaan kerjasama.
            <b><li>Tidak ada Skor kurang dari 1.</li></b>         
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C9 --}}
  <div class="modal fade" id="modalc9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc9">Cara menghitung Skor (Skor = ((2 x A) + B) / 3)</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h2 class="fs-5">A. Kerjasama 
            pendidikan, penelitian,
            dan PkM yang relevan 
            dengan program studi 
            dan dikelola oleh UPPS 
            dalam 3 tahun terakhir.
            <br><br>
            Tabel 1 LKPS </h2>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika RK ≥ 4 ,maka A = 4 .
              <b><li>Nilai 1 - 3</li></b>  
              Jika RK < 4 ,maka A = RK .  
            </ol>
            <ol style="list-style-type: none;">
              <li>RK = ((a x N1) + (b x N2) + (c x N3)) / NDTPS</li>
              <li>N1 = Jumlah kerjasama pendidikan.</li>
              <li>N2 = Jumlah kerjasama penelitian.</li>
              <li>N3 = Jumlah kerjasama PkM.</li>
              <li>NDTPS = Jumlah dosen tetap yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti 
                  program studi yang diakreditasi.</li>
              <li>Faktor: a = 3 , b = 2 , c = 1</li>   
            </ol>
          <hr>
          <h2 class="fs-5">B. Kerjasama tingkat 
            internasional, nasional, 
            wilayah/lokal yang 
            relevan dengan program 
            studi dan dikelola oleh 
            UPPS dalam 3 tahun 
            terakhir.
            <br><br>
            Tabel 1 LKPS
          </h2>
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            Jika NI ≥ a ,maka B = 4
            <b><li>Nilai 2 - 3</li></b> 
            Jika NI < a dan NN ≥ b ,maka B = 3 + (NI / a) 
                 <br><br>
            Jika 0 < NI < a dan 0 < NN < b ,maka B = 2 + (2 x (NI/a)) + (NN/b) - ((NI x NN)/(a x b))       
            <b><li>Nilai 0 - 1</li></b> 
            Jika NI = 0 dan NN = 0 dan NL ≥ c , 
            maka B = 2
            <br><br>
            Jika NI = 0 dan NN = 0 dan NL < c , 
            smaka B = (2 x NL) / c      
          </ol>

          <ol style="list-style-type: none;">
            <li>RNI = Jumlah kerjasama tingkat internasional.</li>
            <li>NN = Jumlah kerjasama tingkat nasional.</li>
            <li>NW = Jumlah kerjasama tingkat wilayah/lokal.</li>
            <li>Faktor: a = 2 , b = 6 , c = 9</li>  
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C10 --}}
  <div class="modal fade" id="modalc10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc10">Pelampauan SN-DIKTI 
            yang ditetapkan dengan 
            indikator kinerja 
            tambahan yang berlaku 
            di UPPS berdasarkan 
            standar pendidikan 
            tinggi yang ditetapkan 
            perguruan tinggi pada 
            tiap kriteria
            </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            UPPS menetapkan 
            indikator kinerja tambahan 
            berdasarkan standar 
            pendidikan tinggi yang 
            ditetapkan perguruan 
            tinggi. Indikator kinerja 
            tambahan mencakup 
            seluruh kriteria serta 
            menunjukkan daya saing 
            UPPS dan program studi 
            di tingkat inernasional. 
            Data indikator kinerja 
            tambahan telah diukur, 
            dimonitor, dikaji, dan 
            dianalisis untuk perbaikan 
            berkelanjutan
            <b><li>Nilai 3</li></b>
            UPPS menetapkan 
            indikator kinerja tambahan 
            berdasarkan standar 
            pendidikan tinggi yang 
            ditetapkan perguruan 
            tinggi. Indikator kinerja 
            tambahan mencakup 
            sebagian kriteria serta 
            menunjukkan daya saing 
            UPPS dan program studi 
            di tingkat nasional. Data 
            indikator kinerja tambahan 
            telah diukur, dimonitor, 
            dikaji, dan dianalisis untuk 
            perbaikan berkelanjutan.            
            <b><li>Nilai 2</li></b>
            UPPS tidak menetapkan 
            indikator kinerja 
            tambahan.
            <b><li>Tidak ada Skor kurang dari 2.</li></b>
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C11 --}}
  <div class="modal fade" id="modalc11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc11">Analisis keberhasilan 
            dan/atau 
            ketidakberhasilan 
            pencapaian kinerja 
            UPPS yang telah 
            ditetapkan di tiap kriteria 
            memenuhi 2 aspek 
            sebagai berikut: 
            <ol>
              <li> 
                capaian kinerja diukur 
                dengan metoda yang 
                tepat, dan hasilnya 
                dianalisis serta 
                dievaluasi, dan
              </li>
              <li>
                analisis terhadap 
                capaian kinerja 
                mencakup identifikasi 
                akar masalah, faktor 
                pendukung keberhasilan 
                dan faktor penghambat 
                ketercapaian standard, 
                dan deskripsi singkat 
                tindak lanjut yang akan 
                dilakukan.
              </li>
            </ol>
            </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            Analisis pencapaian 
            kinerja UPPS di tiap 
            kriteria memenuhi 2 
            aspek, dilaksanakan 
            setiap tahun dan hasilnya 
            dipublikasikan kepada 
            <b><li>Nilai 3</li></b>
            Analisis pencapaian 
            kinerja UPPS di tiap 
            kriteria memenuhi 2 aspek 
            dan dilaksanakan setiap 
            tahun.          
            <b><li>Nilai 2</li></b>
            Analisis pencapaian 
            kinerja UPPS di tiap 
            kriteria memenuhi 2 
            aspek. 
            <b><li>Nilai 1</li></b>
            UPPS memiliki laporan 
            pencapaian kinerja namun 
            belum dianalisis dan 
            dievaluasi. 
            <b><li>Nilai 0</li></b>
            UPPS tidak memiliki 
            laporan pencapaian 
            kinerja. 
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C12 --}}
  <div class="modal fade" id="modalc12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc12">Keterlaksanaan Sistem 
            Penjaminan Mutu 
            Internal (akademik dan 
            nonakademik) yang 
            dibuktikan dengan 
            keberadaan 5 aspek:            
            <ol>
              <li> 
                dokumen legal 
                pembentukan unsur 
                pelaksana penjaminan 
                mutu.
              </li>
              <li>
                ketersediaan 
                dokumen mutu: 
                kebijakan SPMI, manual 
                SPMI, standar SPMI, 
                dan formulir SPMI.
              </li>
              <li>
                terlaksananya siklus 
                penjaminan mutu (siklus 
                PPEPP)                
              </li>
              <li>
                bukti sahih efektivitas 
                pelaksanaan 
                penjaminan mutu.
              </li>
              <li>
                memiliki external 
                benchmarking dalam 
                peningkatan mutu.                
              </li>
            </ol>
            </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            UPPS telah melaksanakan 
            SPMI yang memenuhi 5 
            aspek.
            <b><li>Nilai 3</li></b>
            UPPS telah melaksanakan 
            SPMI yang memenuhi 
            aspek nomor 1 sampai 
            dengan 4.        
            <b><li>Nilai 2</li></b>
            UPPS telah melaksanakan 
            SPMI yang memenuhi 
            aspek nomor 1 sampai 
            dengan 3
            <b><li>Nilai 1</li></b>
            UPPS telah melaksanakan 
            SPMI yang memenuhi 
            aspek nomor 1 dan 2, 
            serta siklus kegiatan SPMI 
            baru dilaksanakan pada 
            tahapan penetapan 
            standar dan pelaksanaan 
            standar pendidikan tinggi.            
            <b><li>Nilai 0</li></b>
            UPPS telah memiliki 
            dokumen legal 
            pembentukan unsur 
            pelaksana penjaminan 
            mutu tanpa pelaksanaan 
            SPMI
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C13 --}}
  <div class="modal fade" id="modalc13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc13">Pengukuran kepuasan 
            para pemangku 
            kepentingan 
            (mahasiswa, dosen, 
            tenaga kependidikan, 
            lulusan, pengguna, mitra 
            industri, dan mitra 
            lainnya) terhadap 
            layanan manajemen, 
            yang memenuhi aspek-aspek berikut:                       
            <ol>
              <li> 
                menggunakan 
                instrumen kepuasan 
                yang sahih, andal, 
                mudah digunakan,                
              </li>
              <li>
                dilaksanakan secara 
                berkala, serta datanya 
                terekam secara 
                komprehensif, .
              </li>
              <li>
                dianalisis dengan 
                metode yang tepat serta 
                bermanfaat untuk                
              </li>
              <li>
                tingkat kepuasan dan 
                umpan balik 
                ditindaklanjuti untuk 
                perbaikan dan 
                peningkatan mutu luaran 
                secara berkala dan 
                tersistem.                
              </li>
              <li>
                dilakukan review 
                terhadap pelaksanaan 
                pengukuran kepuasan 
                dosen dan mahasiswa, 
                serta              
              </li>
              <li>
                hasilnya 
                dipublikasikan dan 
                mudah diakses oleh 
                dosen dan mahasiswa.
              </li>
            </ol>
            </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            Unit pengelola melakukan 
            pengukuran kepuasan 
            layanan manajemen 
            terhadap seluruh 
            pemangku kepentingan 
            dan memenuhi aspek 1 
            s.d 6.
            <b><li>Nilai 3</li></b>
            Unit pengelola melakukan 
            pengukuran kepuasan 
            layanan manajemen 
            terhadap seluruh 
            pemangku kepentingan 
            dan memenuhi aspek 1 s.d 
            4 ditambah aspek 5 atau 
            aspek 6.         
            <b><li>Nilai 2</li></b>
            Unit pengelola melakukan 
            pengukuran kepuasan 
            layanan manajemen 
            terhadap seluruh 
            pemangku kepentingan 
            dan memenuhi aspek 1 
            s.d. 4.
            <b><li>Nilai 1</li></b>
            Unit pengelola melakukan 
            pengukuran kepuasan 
            layanan manajemen 
            terhadap sebagian
            pemangku kepentingan 
            dan memenuhi aspek 1 
            s.d. 4.        
            <b><li>Nilai 0</li></b>
            UPPS tidak melakukan 
            pengukuran kepuasan 
            layanan manajemen.
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C14 --}}
  <div class="modal fade" id="modalc14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc14">Metoda rekrutmen dan 
            keketatan seleksi.
            <br><br>
            Tabel 2.a LKPS</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h2 class="fs-5">Untuk program studi dengan jumlah kebutuhan lulusan tinggi berlaku perhitungan sebagai berikut.
          </h2>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika Rasio >= 5 , 
              maka Skor = 4 .            
              <b><li>Nilai 0 -3</li></b>
              Jika Rasio < 5 , 
              maka Skor = (4 x Rasio) / 5 .                        
            </ol>
          <hr>
          <h2 class="fs-5">Untuk program studi dengan jumlah kebutuhan lulusan rendah berlaku perhitungan sebagai berikut. </h2>
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            Jika selalu ada mahasiswa 
            baru terdaftar pada TS-4 
            s.d. TS, 
            maka Skor = 4 .          
            <b><li>Nilai 3</li></b>
            Tidak ada skor antara 2 
            dan 4.                       
            <b><li>Nilai 2</li></b>
            Jika tidak selalu ada 
            mahasiswa baru terdaftar 
            pada TS-4 s.d. TS , maka 
            Skor = 2 .
            <b><li>Nilai 1</li></b>
            Tidak ada skor antara 0 
            dan 2.          
            <b><li>Nilai 0</li></b>    
            Jika tidak ada 
            mahasiswa baru 
            terdaftar pada TS-4 s.d. 
            TS , 
            maka Skor = 0 .     
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C15 --}}
  <div class="modal fade" id="modalc15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc15">Skor = ((2 x A) + B) / 3</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h2 class="fs-5">A. Peningkatan animo 
            calon mahasiswa.
            <br><br>
            Tabel 2.a LKPS
          </h2>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              UPPS melakukan upaya 
              untuk meningkatkan 
              animo calon mahasiswa 
              yang ditunjukkan dengan 
              adanya tren peningkatan 
              jumlah pendaftar secara 
              signifikan (> 10%) dalam 3 
              tahun terakhir            
              <b><li>Nilai 3</li></b>
              UPPS melakukan upaya 
              untuk meningkatkan animo 
              calon mahasiswa yang 
              ditunjukkan dengan 
              adanya tren peningkatan 
              jumlah pendaftar dalam 3 
              tahun terakhir.                 
              <b><li>Nilai 2</li></b>
              UPPS melakukan upaya 
              untuk meningkatkan 
              animo calon mahasiswa 
              dalam 3 tahun terakhir 
              dengan tren tetap.              
              <b><li>Nilai 1</li></b>
              UPPS melakukan upaya 
              untuk meningkatkan 
              animo calon mahasiswa 
              dalam 3 tahun terakhir 
              namun trennya menurun. 
              <b><li>Nilai 0</li></b>
              UPPS tidak melakukan 
              upaya untuk 
              meningkatkan animo 
              calon mahasiswa dalam 
              3 tahun terakhir.               
            </ol>
          <hr>
          <h2 class="fs-5">B. Mahasiswa asing
            <br><br>
            Tabel 2.b LKPS</h2>
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            Jika PMA ≥ 1% , 
            maka B = 4          
            <b><li>Nilai 2-3</li></b>
            Jika PMA < 1% , 
            maka B = 2 + (200 x PMA)                      
            <b><li>Tidak ada skor kurang dari 2.</li></b>     
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C16 --}}
  <div class="modal fade" id="modalc16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc16">Skor = (A + (2 x B)) / 3</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h2 class="fs-5">A. Ketersediaan layanan 
            kemahasiswaan di 
            bidang: 
            <ol>
              <li>
                penalaran, minat dan 
                bakat,
              </li>
              <li>
                kesejahteraan 
                (bimbingan dan 
                konseling, layanan 
                beasiswa, dan layanan 
                kesehatan), dan
              </li>
              <li>
                bimbingan karir dan 
                kewirausahaan
              </li>
            </ol>
          </h2>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jenis layanan mencakup 
              bidang penalaran, minat 
              dan bakat, kesejahteraan
              (bimbingan dan konseling, 
              layanan beasiswa, dan 
              layanan kesehatan), dan 
              bimbingan karir dan 
              kewirausahaan.         
              <b><li>Nilai 3</li></b>
              Jenis layanan mencakup 
              bidang penalaran, minat 
              dan bakat, dan 
              kesejahteraan (bimbingan 
              dan konseling, layanan 
              beasiswa, dan layanan 
              kesehatan).                
              <b><li>Nilai 2</li></b>
              Jenis layanan mencakup 
              bidang penalaran, minat 
              dan bakat mahasiswa.            
              <b><li>Nilai 1</li></b>
              Jenis layanan hanya 
              mencakup sebagian 
              bidang penalaran, minat 
              atau bakat.
              <b><li>Nilai 0</li></b>
              Tidak memiliki layanan 
              kemahasiswaan.             
            </ol>
          <hr>
          <h2 class="fs-5">B. Akses dan mutu 
            layanan 
            kemahasiswaan.
            </h2>
          <ol style="list-style-type: none;">
            <b><li>Nilai 4</li></b>
            Ada kemudahan akses 
            dan mutu layanan yang 
            baik untuk bidang 
            penalaran, minat bakat 
            mahasiswa dan semua 
            jenis layanan kesehatan.                  
            <b><li>Nilai 3</li></b>
            Ada kemudahan akses 
            dan mutu layanan yang 
            baik untuk bidang 
            penalaran, minat bakat 
            mahasiswa dan sebagian 
            layanan kesehatan                   
            <b><li>Nilai 2</li></b>
            Ada kemudahan akses 
            dan mutu layanan yang 
            baik untuk bidang 
            penalaran dan minat bakat 
            mahasiswa. 
            <b><li>Nilai 1</li></b>     
            Mutu layanan kurang baik 
            untuk bidang penalaran 
            atau minat bakat 
            mahasiswa.
            <b><li>Nilai 0</li></b>    
            Tidak memiliki layanan 
            kemahasiswaan 
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C17--}}
  <div class="modal fade" id="modalc17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc17">Kecukupan jumlah 
            DTPS.
            <br><br>
            Tabel 3.a.1) LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika NDTPS ≥ 12 , 
              maka Skor = 4            
              <b><li>Nilai 2-3</li></b>
              Jika 3 ≤ NDTPS < 12 , 
              maka Skor = ((2 x NDTPS) + 12) / 9     
              <b><li>Nilai 1</li></b>
              Tidak ada skor antara 0 
              dan 2
              <b><li>Nilai 0</li></b>
              Jika NDTPS < 3 , 
              maka Skor = 0
              <b><li>NDTPS = Jumlah dosen tetap yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti 
                program studi yang diakreditasi.</li></b>                                 
            </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C18--}}
  <div class="modal fade" id="modalc18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc18">Kualifikasi akademik 
            DTPS.
            <br><br>
            Tabel 3.a.1) LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika PDS3 ≥ 50% , 
              maka Skor = 4           
              <b><li>Nilai 2-3</li></b>
              Jika PDS3 < 50% , 
              maka Skor = 2 + (4 x PDS3) 
              maka Skor = ((2 x NDTPS) + 12) / 9     
              <b><li>Tidak ada Skor kurang dari 2.</li></b>
              <br>
              <b><li>NDS3 = Jumlah DTPS yang berpendidikan tertinggi Doktor/Doktor Terapan/Subspesialis.
                <br>
                NDTPS = Jumlah dosen tetap yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti 
                program studi yang diakreditasi.
                <br>
                PDS3 = (NDS3 / NDTPS) x 100%</li></b>                                 
            </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>  
  {{-- modal C19--}}
  <div class="modal fade" id="modalc19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc19">Jabatan akademik 
            DTPS.            
            <br><br>
            Tabel 3.a.1) LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika PGBLKL ≥ 70% , 
              maka Skor = 4          
              <b><li>Nilai 2-3</li></b>
              Jika PGBLKL < 70% , 
              maka Skor = 2 + ((20 x PGBLKL) /7)    
              <b><li>Tidak ada Skor kurang dari 2.</li></b>
              <br>
              <b><li>NDGB = Jumlah DTPS yang memiliki jabatan akademik Guru Besar.
                <br>
                NDLK = Jumlah DTPS yang memiliki jabatan akademik Lektor Kepala. <br>
                NDL = Jumlah DTPS yang memiliki jabatan akademik Lektor. <br>
                NDTPS = Jumlah dosen tetap yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti 
                program studi yang diakreditasi. <br>
                PGBLKL = ((NDGB + NDLK + NDL) / NDTPS) x 100%</li></b>                                 
            </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C20--}}
  <div class="modal fade" id="modalc20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc20">Rasio jumlah 
            mahasiswa program 
            studi terhadap jumlah 
            DTPS.
            <br><br>
            Tabel 2.a LKPS                    
            <br><br>
            Tabel 3.a.1) LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3 class="fs-5">Kelompok Sains Teknologi</h2>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika 15 ≤ RMD ≤ 25 , 
              maka Skor = 4                     
              <b><li>Nilai 1-3</li></b>
              Jika RMD < 15 , maka Skor = (4 x RMD) / 15
              Jika 25 < RMD ≤ 35 , maka Skor = (70 - (2 x RMD)) / 5 
              <b><li>Nilai 0</li></b>
              Jika RMD > 35 , 
              maka Skor = 0                             
            </ol>
          <hr>
          <h3 class="fs-5">Kelompok Sosial Humaniora</h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika 25 ≤ RMD ≤ 35 , 
              maka Skor = 4                  
              <b><li>Nilai 1-3</li></b>
              Jika RMD < 25 , maka Skor = (4 x RMD) / 25
              Jika 35 < RMD ≤ 50 , maka Skor = (200 - (4 x RMD)) / 15 
              <b><li>Nilai 0</li></b>
              Jika RMD > 50 , 
              maka Skor = 0
              <br>
              <br>
              <b><li>NM = Jumlah mahasiswa pada saat TS. <br>
                NDTPS = Jumlah dosen tetap yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti 
                program studi yang diakreditasi. <br>
                RMD = NM / NDTPS</li></b>
            </ol>
            <hr>
            Untuk program studi dengan jumlah kebutuhan lulusan rendah, maka Skor = Skor butir Kualitas Input Mahasiswa.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C21--}}
  <div class="modal fade" id="modalc21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc21">Penugasan DTPS 
            sebagai pembimbing 
            utama tugas akhir 
            mahasiswa.
            <br><br>
            Tabel 3.a.2) LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika RDPU ≤ 6 , 
              maka Skor = 4                        
              <b><li>Nilai 2-3</li></b>
              Jika 6 < RDPU ≤ 10 , 
              maka Skor = 7 - (RDPU / 2)  
              <b><li>Nilai 1</li></b>
              Tidak ada skor antara 0 
              dan 2
              <b><li>Nilai 0</li></b>
              Jika RDPU > 10 , 
              maka Skor = 0
              <br>              
              <b><li>NDTPS = Jumlah dosen tetap yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti 
                program studi yang diakreditasi.</li></b>                                 
            </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C22--}}
  <div class="modal fade" id="modalc22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc22">Ekuivalensi Waktu 
            Mengajar Penuh DTPS.
            <br><br>
            Tabel 3.a.3) LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika 12 ≤ EWMP ≤ 16 , 
              maka Skor = 4                                     
              <b><li>Nilai 1-3</li></b>
              Jika 6 ≤ EWMP < 12 , maka Skor = ((2 x EWMP) - 12) / 3
              Jika 16 < EWMP ≤ 18 , maka Skor = 36 - (2 x EWMP)              
              <b><li>Nilai 0</li></b>
              Jika EWMP < 6 
              atau EWMP > 18 , 
              maka Skor = 0                                           
            </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C23--}}
  <div class="modal fade" id="modalc23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc23">
            Dosen tidak tetap
            <br><br>
            Tabel 3.a.4) LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika PDTT ≤ 10% , 
              maka Skor = 4                                   
              <b><li>Nilai 2-3</li></b>
              Jika 10% < PDTT ≤ 40% , 
              maka Skor = (14 - (20 x PDTT)) / 3              
              <b><li>Nilai 1</li></b>
              Tidak ada skor antara 0 
              dan 2.
              <b><li>Nilai 0</li></b>
              Jika PDTT > 40% , 
              maka Skor = 0                              
            </ol>
            <hr>
            NDTT = Jumlah dosen tidak tetap yang ditugaskan sebagai pengampu mata kuliah di program studi yang diakreditasi. <br>
            NDT = Jumlah dosen tetap yang ditugaskan sebagai pengampu mata kuliah di program studi yang diakreditasi. <br>
            PDTT = (NDTT / (NDT + NDTT)) x 100%
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C24--}}
  <div class="modal fade" id="modalc24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc24">
            Pengakuan/rekognisi 
            atas 
            kepakaran/prestasi/kinerja DTPS
            <br><br>
            Tabel 3.b.1) LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika RRD ≥ 0,5 ,
              maka Skor = 4 .                                               
              <b><li>Nilai 2-3</li></b>
              Jika RRD < 0,5 ,
              maka Skor = 2 + (4 x RRD) .               
              <b><li>Tidak ada Skor kurang dari 2.</li></b>                             
            </ol>
            <hr>
            <ol type="a">
              Pengakuan/rekognisi atas kepakaran/prestasi/kinerja DTPS dapat berupa:
              <li>
                menjadi visiting lecturer atau visiting scholar di program studi/perguruan tinggi terakreditasi A/Unggul atau program studi/perguruan tinggi 
                internasional bereputasi
              </li>
              <li>
                menjadi keynote speaker/invited speaker pada pertemuan ilmiah tingkat nasional/ internasional. 
              </li>
              <li>
                menjadi editor atau mitra bestari pada jurnal nasional terakreditasi/jurnal internasional bereputasi di bidang yang sesuai dengan bidang 
                program studi.
              </li>
              <li>
                menjadi staf ahli/narasumber di lembaga tingkat wilayah/nasional/internasional pada bidang yang sesuai dengan bidang program studi (untuk 
                pengusul dari program studi pada program Sarjana/Magister/Doktor), atau menjadi tenaga ahli/konsultan di lembaga/industri tingkat 
                wilayah/nasional/ internasional pada bidang yang sesuai dengan bidang program studi (untuk pengusul dari program studi pada program 
                Diploma Tiga/Sarjana Terapan/Magister Terapan/Doktor Terapan). 
              </li>
              <li>
                mendapat penghargaan atas prestasi dan kinerja di tingkat wilayah/nasional/internasional.
              </li>
            </ol>
            <hr>
            RI = NI / 3 / NDTPS , RN = NN / 3 / NDTPS , RL = NL / 3 / NDTPS Faktor: a = 0,05 , b = 0,3 , c = 1 <br>
            NI = Jumlah penelitian dengan sumber pembiayaan luar negeri dalam 3 tahun terakhir. <br>
            NN = Jumlah penelitian dengan sumber pembiayaan dalam negeri dalam 3 tahun terakhir. <br>
            NL = Jumlah penelitian dengan sumber pembiayaan PT/ mandiri dalam 3 tahun terakhir. <br>
            NDTPS = Jumlah dosen tetap yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C25--}}
  <div class="modal fade" id="modalc25" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc25">
            Kegiatan penelitian 
            DTPS yang relevan 
            dengan bidang program 
            studi dalam 3 tahun 
            terakhir.            
            <br><br>
            Tabel 3.b.2) LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika RI ≥ a ,
              maka Skor = 4                                                           
              <b><li>Nilai 2-3</li></b>
              Jika RI < a dan RN ≥ b ,
              maka Skor = 3 + (RI / a)
              <br><br>
              Jika 0 < RI < a dan 0 < RN < b ,
              maka Skor = 2 + (2 x (RI/a)) + (RN/b) - ((RI x RN)/(a x b))         
              <b><li>Nilai 0-1</li></b>
              Jika RI = 0 dan RN = 0 dan RL ≥ c , 
              maka Skor = 2              
              <br><br>
              Jika RI = 0 dan RN = 0 dan RL < c , 
              maka Skor = (2 x RL) / c                        
            </ol>
            <hr>
            RI = NI / 3 / NDTPS , RN = NN / 3 / NDTPS , RL = NL / 3 / NDTPS Faktor: a = 0,05 , b = 0,3 , c = 1 <br>
            NI = Jumlah penelitian dengan sumber pembiayaan luar negeri dalam 3 tahun terakhir. <br>
            NN = Jumlah penelitian dengan sumber pembiayaan dalam negeri dalam 3 tahun terakhir. <br>
            NL = Jumlah penelitian dengan sumber pembiayaan PT/ mandiri dalam 3 tahun terakhir. <br>
            NDTPS = Jumlah dosen tetap yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti 
            program studi yang diakreditasi.             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C26--}}
  <div class="modal fade" id="modalc26" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc26">
            Kegiatan PkM DTPS 
            yang relevan dengan
            bidang program studi 
            dalam 3 tahun terakhir.          
            <br><br>
            Tabel 3.b.3) LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika RI ≥ a ,
              maka Skor = 4                                                         
              <b><li>Nilai 2-3</li></b>
              Jika RI < a dan RN ≥ b ,
              maka Skor = 3 + (RI / a)
              <br><br>
              Jika 0 < RI < a dan 0 < RN < b ,
              maka Skor = 2 + (2 x (RI/a)) + (RN/b) - ((RI x RN)/(a x b))         
              <b><li>Nilai 0-1</li></b>
              Jika RI = 0 dan RN = 0 dan RL ≥ c , 
              maka Skor = 2              
              <br><br>
              Jika RI = 0 dan RN = 0 dan RL < c , 
              maka Skor = (2 x RL) / c                        
            </ol>
            <hr>
            RI = NI / 3 / NDTPS , RN = NN / 3 / NDTPS , RL = NL / 3 / NDTPS Faktor: a = 0,05 , b = 0,3 , c = 1 <br>
            NI = Jumlah penelitian dengan sumber pembiayaan luar negeri dalam 3 tahun terakhir. <br>
            NN = Jumlah penelitian dengan sumber pembiayaan dalam negeri dalam 3 tahun terakhir. <br>
            NL = Jumlah penelitian dengan sumber pembiayaan PT/ mandiri dalam 3 tahun terakhir. <br>
            NDTPS = Jumlah dosen tetap yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti 
            program studi yang diakreditasi.             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C27--}}
  <div class="modal fade" id="modalc27" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc27">
            Publikasi ilmiah dengan 
            tema yang relevan 
            dengan bidang program 
            studi yang dihasilkan 
            DTPS dalam 3 tahun 
            terakhir.                   
            <br><br>
            Tabel 3.b.4) LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika RI ≥ a ,
              maka Skor = 4                                                         
              <b><li>Nilai 2-3</li></b>
              Jika RI < a dan RN ≥ b ,
              maka Skor = 3 + (RI / a)
              <br><br>
              Jika 0 < RI < a dan 0 < RN < b ,
              maka Skor = 2 + (2 x (RI/a)) + (RN/b) - ((RI x RN)/(a x b))    
              <b><li>Nilai 0-1</li></b>
              Jika RI = 0 dan RN = 0 dan RW ≥ c , 
              maka Skor = 2            
              <br><br>
              Jika RI = 0 dan RN = 0 dan RW < c , 
              maka Skor = (2 x RW) / c                      
            </ol>
            <hr>
            RW = (NA1 + NB1 + NC1) / NDTPS , RN = (NA2 + NA3 + NB2 + NC2) / NDTPS , RI = (NA4 + NB3 + NC3) / NDTPS Faktor: a = 0,1 , 
            b = 1 , c = 2 <br>
            NA1 = Jumlah publikasi di jurnal nasional tidak terakreditasi.<br>
            NA2 = Jumlah publikasi di jurnal nasional terakreditasi.<br>
            NA3 = Jumlah publikasi di jurnal internasional.<br>
            NA4 = Jumlah publikasi di jurnal internasional bereputasi.<br>
            NB1 = Jumlah publikasi di seminar wilayah/lokal/PT.<br>
            NB2 = Jumlah publikasi di seminar nasional.<br>
            NB3 = Jumlah publikasi di seminar internasional.<br>
            NC1 = Jumlah tulisan di media massa wilayah.<br>
            NC1 = Jumlah tulisan di media massa nasional.<br>
            NC3 = Jumlah tulisan di media massa internasional.<br>
            NDTPS = Jumlah dosen tetap yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti 
            program studi yang diakreditasi          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C28--}}
  <div class="modal fade" id="modalc28" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc28">
            Artikel karya ilmiah 
            DTPS yang disitasi 
            dalam 3 tahun terakhir.         
            <br><br>
            Tabel 3.b.5) LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika RS ≥ 0,5 ,
              maka Skor = 4 .                                                                                   
              <b><li>Nilai 2-3</li></b>
              Jika RS < 0,5 ,
              maka Skor = 2 + (4 x RS).    
              <b><li>Tidak ada Skor kurang dari 2.</li></b>                      
            </ol>
            <hr>
            RS = NAS / NDTPS <br>
            NAS = jumlah artikel yang disitasi.<br>
            NDTPS = Jumlah dosen tetap yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti 
            program studi yang diakreditasi             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C29--}}
  <div class="modal fade" id="modalc29" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc29">
            Luaran penelitian dan 
            PkM yang dihasilkan 
            DTPS dalam 3 tahun 
            terakhir.            
            <br><br>
            Tabel 3.b.7) LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika RLP ≥ 1 ,
              maka Skor 4 .                                                                                                 
              <b><li>Nilai 2-3</li></b>
              Jika RLP < 1 ,
              maka Skor = 2 + (2 x RLP)    
              <b><li>Tidak ada Skor kurang dari 2.</li></b>                      
            </ol>
            <hr>
            RLP = (2 x (NA + NB + NC) + ND) / NDTPS <br>
            NA = Jumlah luaran penelitian/PkM yang mendapat pengakuan HKI (Paten, Paten Sederhana)<br>
            NB = Jumlah luaran penelitian/PkM yang mendapat pengakuan HKI (Hak Cipta, Desain Produk Industri, Perlindungan Varietas Tanaman, Desain 
            Tata Letak Sirkuit Terpadu, dll.)<br>
            NC = Jumlah luaran penelitian/PkM dalam bentuk Teknologi Tepat Guna, Produk (Produk Terstandarisasi, Produk Tersertifikasi), Karya Seni, 
            Rekayasa Sosial.<br>
            ND = Jumlah luaran penelitian/PkM yang diterbitkan dalam bentuk Buku ber-ISBN, Book Chapter.<br>
            NDTPS = Jumlah dosen tetap yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti 
            program studi yang diakreditasi.              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C30--}}
  <div class="modal fade" id="modalc30" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc30">
            Upaya pengembangan 
            dosen.                      
            <br><br>
            Jika Skor rata-rata butir 
            Profil Dosen >= 3,5 , 
            maka Skor = 4.
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              UPPS merencanakan dan 
              mengembangkan DTPS 
              mengikuti rencana 
              pengembangan SDM di 
              perguruan tinggi (Renstra 
              PT) secara konsisten.                                                                                                 
              <b><li>Nilai 3</li></b>
              UPPS merencanakan dan 
              mengembangkan DTPS 
              mengikuti rencana 
              pengembangan SDM di 
              perguruan tinggi (Renstra 
              PT).                 
              <b><li>Nilai 2</li></b>
              UPPS mengembangkan 
              DTPS mengikuti rencana 
              pengembangan SDM di 
              perguruan tinggi (Renstra 
              PT)
              <b><li>Nilai 1</li></b>  
              UPPS mengembangkan 
              DTPS tidak mengikuti atau 
              tidak sesuai dengan 
              rencana pengembangan 
              SDM di perguruan tinggi 
              (Renstra PT).                            
              <b><li>Nilai 0</li></b>
              Perguruan tinggi 
              dan/atau UPPS tidak 
              memiliki rencana 
              pengembangan SDM.             
            </ol>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C31--}}
  <div class="modal fade" id="modalc31" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc31">
            Skor = (A + B) / 2
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3 class="fs-5">A. Kualifikasi dan 
            kecukupan tenaga 
            kependidikan 
            berdasarkan jenis 
            pekerjaannya 
            (administrasi, 
            pustakawan, teknisi, dll.)
            <br><br>
            Penilaian kecukupan 
            tidak hanya ditentukan 
            oleh jumlah tenaga 
            kependidikan, namun 
            keberadaan dan 
            pemanfaatan teknologi 
            informasi dan komputer 
            dalam proses 
            administrasi dapat 
            dijadikan pertimbangan 
            untuk menilai efektifitas 
            pekerjaan dan 
            kebutuhan akan tenaga 
            kependidikan.
          </h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              UPPS memiliki tenaga 
              kependidikan yang 
              memenuhi tingkat 
              kecukupan dan kualifikasi 
              berdasarkan kebutuhan 
              layanan program studi dan 
              mendukung pelaksanaan 
              akademik, fungsi unit 
              pengelola, serta 
              pengembangan program 
              studi.                                                                                               
              <b><li>Nilai 3</li></b>
              UPPS memiliki tenaga 
              kependidikan yang 
              memenuhi tingkat 
              kecukupan dan kualifikasi 
              berdasarkan kebutuhan 
              layanan program studi dan 
              mendukung pelaksanaan 
              akademik dan fungsi unit 
              pengelola.                          
              <b><li>Nilai 2</li></b>
              UPPS memiliki tenaga 
              kependidikan yang 
              memenuhi tingkat 
              kecukupan dan kualifikasi 
              berdasarkan kebutuhan 
              layanan program studi dan 
              mendukung pelaksanaan 
              akademik
              <b><li>Nilai 1</li></b>  
              UPPS memiliki tenaga 
              kependidikan yang 
              memenuhi tingkat 
              kecukupan dan/atau 
              kualifikasi berdasarkan 
              kebutuhan layanan 
              program studi dan 
              mendukung pelaksanaan 
              akademik.                           
              <b><li>Nilai 0</li></b>
              UPPS memiliki tenaga 
              kependidikan yang tidak 
              memenuhi tingkat 
              kecukupan dan 
              kualifikasi berdasarkan 
              kebutuhan layanan 
              program studi           
            </ol> 
          <hr>
          <h3 class="fs-5">B. Kualifikasi dan 
            kecukupan laboran 
            untuk mendukung 
            proses pembelajaran 
            sesuai dengan 
            kebutuhan program 
            studi.</h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              UPPS memiliki jumlah 
              laboran yang cukup 
              terhadap jumlah 
              laboratorium yang 
              digunakan program studi, 
              kualifikasinya sesuai 
              dengan laboratorium yang 
              menjadi 
              tanggungjawabnya, serta 
              bersertifikat laboran dan 
              bersertifikat kompetensi 
              tertentu sesuai bidang 
              tugasnya.                                                                                              
              <b><li>Nilai 3</li></b>
              UPPS memiliki jumlah 
              laboran yang cukup 
              terhadap jumlah 
              laboratorium yang 
              digunakan program studi, 
              kualifikasinya sesuai 
              dengan laboratorium yang 
              menjadi 
              tanggungjawabnya, dan  
              bersertifikat laboran atau 
              bersertifikat kompetensi 
              tertentu sesuai bidang 
              tugasnya.               
              <b><li>Nilai 2</li></b>
              UPPS memiliki jumlah 
              laboran yang cukup 
              terhadap jumlah 
              laboratorium yang 
              digunakan program studi 
              dan kualifikasinya sesuai 
              dengan laboratorium yang 
              menjadi 
              tanggungjawabnya.              
              <b><li>Nilai 1</li></b>  
              UPPS memiliki jumlah 
              laboran yang cukup 
              terhadap jumlah 
              laboratorium yang 
              digunakan program studi.                                          
              <b><li>Nilai 0</li></b>
              UPPS tidak memiliki 
              laboran            
            </ol> 
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C32--}}
  <div class="modal fade" id="modalc32" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc32">
            Biaya operasional 
            pendidikan.                    
            <br><br>
            Tabel 4 LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika DOP ≥ 20 , 
              maka Skor = 4                                                                                                
              <b><li>Nilai 0-3</li></b>
              Jika DOP < 20 , 
              maka Skor = DOP / 5                       
            </ol>    
            <hr>
            DOP = Rata-rata dana operasional pendidikan/mahasiswa/ tahun dalam 3 tahun terakhir (dalam juta rupiah).     
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C33--}}
  <div class="modal fade" id="modalc33" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc33">
            Dana pengabdian 
            kepada masyarakat 
            DTPS.                                
            <br><br>
            Tabel 4 LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika DPD ≥ 10 , 
              maka Skor = 4                                                                                                             
              <b><li>Nilai 0-3</li></b>
              Jika DPD < 10 , 
              maka Skor = (2 x DPD) / 5                      
            </ol>    
            <hr>
            DPD = Rata-rata dana penelitian DTPS/ tahun dalam 3 tahun terakhir (dalam juta rupiah).    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C34--}}
  <div class="modal fade" id="modalc34" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc34">
            Biaya operasional 
            pendidikan.                    
            <br><br>
            Tabel 4 LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika DPkMD ≥ 5 , 
              maka Skor = 4                                                                                                            
              <b><li>Nilai 0-3</li></b>
              Jika DPkMD < 5 , 
              maka Skor = (4 x DPkMD) / 5                       
            </ol>    
            <hr>
            DPkMD = Rata-rata dana PkM DTPS/ tahun dalam 3 tahun terakhir (dalam juta rupiah).    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C35--}}
  <div class="modal fade" id="modalc35" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc35">
            Upaya pengembangan 
            Realisasi investasi 
            (SDM, sarana dan 
            prasarana) yang 
            mendukung 
            penyelenggaraan 
            tridharma.                      
            <br><br>
            Jika Skor rata-rata butir 
            tentang Profil Dosen, 
            Sarana, dan Prasarana 
            ≥ 3,5 , maka Skor butir 
            ini = 4.
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Realisasi investasi (SDM, 
              sarana dan prasarana) 
              memenuhi seluruh 
              kebutuhan akan 
              penyelenggaraan program 
              pendidikan, penelitian dan 
              PkM serta memenuhi 
              standar perguruan tinggi 
              terkait pendidikan, 
              penelitian dan PkM.                                                                                                
              <b><li>Nilai 3</li></b>
              Realisasi investasi (SDM, 
              sarana dan prasarana) 
              hanya memenuhi sebagian 
              kebutuhan akan 
              penyelenggaraan program 
              pendidikan, penelitian dan 
              PkM serta memenuhi 
              standar perguruan tinggi 
              terkait pendidikan, 
              penelitian dan PkM.                 
              <b><li>Nilai 2</li></b>
              Realisasi investasi (SDM, 
              sarana dan prasarana) 
              hanya memenuhi 
              kebutuhan akan 
              penyelenggaraan program 
              pendidikan serta 
              memenuhi standar 
              perguruan tinggi terkait 
              pendidikan.
              <b><li>Nilai 1</li></b>  
              Realisasi investasi (SDM, 
              sarana dan prasarana) 
              belum memenuhi 
              kebutuhan akan 
              penyelenggaraan program 
              pendidikan.                                         
              <b><li>Nilai 0</li></b>
              Tidak ada realisasi
              untuk investasi SDM, 
              sarana maupun 
              prasarana.           
            </ol>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C36--}}
  <div class="modal fade" id="modalc36" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc36">
            Kecukupan dana untuk 
            menjamin pencapaian 
            capaian pembelajaran.
            
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Dana dapat menjamin 
              keberlangsungan 
              operasional tridharma, 
              pengembangan 3 tahun 
              terakhir serta memiliki 
              kecukupan dana untuk 
              rencana pengembangan 3 
              tahun ke depan yang 
              didukung oleh sumber 
              pendanaan yang realistis.                                                                                              
              <b><li>Nilai 3</li></b>
              Dana dapat menjamin 
              keberlangsungan 
              operasional tridharma 
              serta pengembangan 3 
              tahun terakhir.               
              <b><li>Nilai 2</li></b>
              Dana dapat menjamin 
              keberlangsungan 
              operasional tridharma dan 
              sebagian kecil 
              pengembangan.
              <b><li>Nilai 1</li></b>  
              Dana dapat menjamin 
              keberlangsungan 
              operasional dan tidak ada 
              untuk pengembangan.                                       
              <b><li>Nilai 0</li></b>
              Dana tidak mencukupi 
              untuk keperluan 
              operasional            
            </ol>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C37--}}
  <div class="modal fade" id="modalc37" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc37">
            Kecukupan, aksesibilitas 
            dan mutu sarana dan 
            prasarana untuk 
            menjamin pencapaian 
            capaian pembelajaran 
            dan meningkatkan 
            suasana akademik.
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              UPPS menyediakan 
              sarana dan prasarana 
              yang mutakhir serta 
              aksesibiltas yang cukup 
              untuk menjamin 
              pencapaian capaian 
              pembelajaran dan 
              meningkatkan suasana 
              akademik.
              <b><li>Nilai 3</li></b>
              UPPS menyediakan 
              sarana dan prasarana 
              serta aksesibiltas yang 
              cukup untuk menjamin 
              pencapaian capaian 
              pembelajaran dan 
              meningkatkan suasana 
              akademik.                             
              <b><li>Nilai 2</li></b>
              UPPS menyediakan 
              sarana dan prasarana 
              serta aksesibiltas yang 
              cukup untuk menjamin 
              pencapaian capaian 
              pembelajaran.
              <b><li>Nilai 1</li></b>  
              UPPS menyediakan 
              sarana dan prasarana 
              serta aksesibiltas yang 
              tidak cukup untuk 
              menjamin pencapaian 
              capaian pembelajaran.
              <b><li>Nilai 0</li></b>
              UPPS tidak memiliki 
              sarana dan prasarana.                        
            </ol>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C38--}}
  <div class="modal fade" id="modalc38" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc38">
            Skor = (A + (2 x B) + (2 
            x C)) / 5            
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3 class="fs-5">A. Keterlibatan 
            pemangku kepentingan 
            dalam proses evaluasi 
            dan pemutakhiran 
            kurikulum</h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Evaluasi dan 
              pemutakhiran kurikulum 
              secara berkala tiap 4 s.d. 
              5 tahun yang melibatkan 
              pemangku kepentingan 
              internal dan eksternal, 
              serta direview oleh pakar 
              bidang ilmu program studi, 
              industri, asosiasi, serta 
              sesuai perkembangan 
              ipteks dan kebutuhan 
              pengguna. 
              <b><li>Nilai 3</li></b>
              Evaluasi dan pemutakhiran 
              kurikulum secara berkala 
              tiap 4 s.d. 5 tahun yang 
              melibatkan pemangku 
              kepentingan internal dan 
              eksternal.                         
              <b><li>Nilai 2</li></b>
              Evaluasi dan 
              pemutakhiran kurikulum 
              melibatkan pemangku 
              kepentingan internal.
              <b><li>Nilai 1</li></b>  
              Evaluasi dan 
              pemutakhiran kurikulum 
              tidak melibatkan seluruh 
              pemangku kepentingan 
              internal.
              <b><li>Nilai 0</li></b>
              Evaluasi dan 
              pemutakhiran kurikulum 
              dilakukan oleh dosen 
              program studi.                    
            </ol>
          <hr>
          <h3 class="fs-5">B. Kesesuaian capaian 
            pembelajaran dengan 
            profil lulusan dan 
            jenjang KKNI/SKKNI.</h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Capaian pembelajaran 
              diturunkan dari profil 
              lulusan, mengacu pada 
              hasil kesepakatan dengan 
              asosiasi penyelenggara 
              program studi sejenis dan 
              organisasi profesi, dan 
              memenuhi level KKNI, 
              serta dimutakhirkan 
              secara berkala tiap 4 s.d. 
              5 tahun sesuai 
              perkembangan ipteks dan 
              kebutuhan pengguna.              
              <b><li>Nilai 3</li></b>
              Capaian pembelajaran 
              diturunkan dari profil 
              lulusan, memenuhi level 
              KKNI, dan dimutakhirkan 
              secara berkala tiap 4 s.d. 5 
              tahun sesuai 
              perkembangan ipteks atau 
              kebutuhan pengguna.                                      
              <b><li>Nilai 2</li></b>
              Capaian pembelajaran 
              diturunkan dari profil 
              lulusan dan memenuhi 
              level KKNI.              
              <b><li>Nilai 1</li></b>  
              Capaian pembelajaran 
              diturunkan dari profil 
              lulusan dan tidak 
              memenuhi level KKNI.              
              <b><li>Nilai 0</li></b>
              Capaian pembelajaran 
              tidak diturunkan dari 
              profil lulusan dan tidak 
              memenuhi level KKNI.                    
            </ol>
          <hr>
          <h3 class="fs-5">C. Ketepatan struktur 
            kurikulum dalam 
            pembentukan capaian 
            pembelajaran.</h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Struktur kurikulum 
              memuat keterkaitan antara 
              matakuliah dengan 
              capaian pembelajaran 
              lulusan yang digambarkan 
              dalam peta kurikulum
              yang jelas, capaian 
              pembelajaran lulusan 
              dipenuhi oleh seluruh 
              capaian pembelajaran 
              matakuliah, serta tidak 
              ada capaian pembelajaran 
              matakuliah yang tidak 
              mendukung capaian 
              pembelajaran lulusan.              
              <b><li>Nilai 3</li></b>
              Struktur kurikulum memuat 
              keterkaitan antara 
              matakuliah dengan 
              capaian pembelajaran 
              lulusan yang digambarkan 
              dalam peta kurikulum yang
              jelas, capaian 
              pembelajaran lulusan 
              dipenuhi oleh seluruh 
              capaian pembelajaran 
              matakuliah.                                     
              <b><li>Nilai 2</li></b>
              jelas, capaian 
              pembelajaran lulusan 
              dipenuhi oleh seluruh 
              capaian pembelajaran 
              matakuliah.
              dalam peta kurikulum 
              yang jelas.             
              <b><li>Nilai 1</li></b>  
              Struktur kurikulum tidak 
              sesuai dengan capaian 
              pembelajaran lulusan.              
              <b><li>Tidak ada Skor kurang 
                dari 1.
                </li></b>                    
            </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C39--}}
  <div class="modal fade" id="modalc39" ta9bindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc39">
            Pemenuhan karakteristik 
            proses pembelajaran, 
            yang terdiri atas sifat: 1) 
            interaktif, 2) holistik, 3) 
            integratif, 4) saintifik, 5) 
            kontekstual, 6) tematik, 
            7) efektif, 8) kolaboratif, 
            dan 9) berpusat pada 
            mahasiswa.
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Terpenuhinya karakteristik 
              proses pembelajaran 
              program studi yang 
              mencakup seluruh sifat, 
              dan telah menghasilkan 
              profil lulusan yang sesuai 
              dengan capaian 
              pembelajaran.                                                                                                
              <b><li>Nilai 3</li></b>
              Terpenuhinya karakteristik 
              proses pembelajaran 
              program studi yang 
              berpusat pada mahasiswa, 
              dan telah menghasilkan 
              profil lulusan yang sesuai 
              dengan capaian 
              pembelajaran.             
              <b><li>Nilai 2</li></b>
              Karakteristik proses 
              pembelajaran program 
              studi berpusat pada 
              mahasiswa yang 
              diterapkan pada minimal 
              50% matakuliah.              
              <b><li>Nilai 1</li></b>  
              Karakteristik proses 
              pembelajaran program 
              studi belum berpusat pada 
              mahasiswa.                            
              <b><li>Tidak ada Skor kurang 
                dari 1.</li></b>.             
            </ol>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C40--}}
  <div class="modal fade" id="modalc40" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc40">
            Skor = (A + (2 x B)) / 3           
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3 class="fs-5">A. Ketersediaan dan 
            kelengkapan dokumen 
            rencana pembelajaran 
            semester (RPS) </h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Dokumen RPS mencakup 
              target capaian 
              pembelajaran, bahan 
              kajian, metode 
              pembelajaran, waktu dan 
              tahapan, asesmen hasil 
              capaian pembelajaran. 
              RPS ditinjau dan 
              disesuaikan secara 
              berkala serta dapat 
              diakses oleh mahasiswa, 
              dilaksanakan secara 
              konsisten.
              <b><li>Nilai 3</li></b>
              Dokumen RPS mencakup 
              target capaian 
              pembelajaran, bahan 
              kajian, metode 
              pembelajaran, waktu dan 
              tahapan, asesmen hasil 
              capaian pembelajaran. 
              RPS ditinjau dan 
              disesuaikan secara 
              berkala serta dapat 
              diakses oleh mahasiswa.                        
              <b><li>Nilai 2</li></b>
              Dokumen RPS mencakup 
              target capaian 
              pembelajaran, bahan 
              kajian, metode 
              pembelajaran, waktu dan 
              tahapan, asesmen hasil 
              capaian pembelajaran. 
              RPS ditinjau dan 
              disesuaikan secara 
              berkala. 
              <b><li>Nilai 1</li></b>  
              Dokumen RPS mencakup 
              target capaian 
              pembelajaran, bahan 
              kajian, metode 
              pembelajaran, waktu dan 
              tahapan, asesmen hasil 
              capaian pembelajaran 
              atau tidak semua 
              matakuliah memiliki RPS.              
              <b><li>Nilai 0</li></b>
              Tidak memiliki dokumen 
              RPS.                   
            </ol>
          <hr>
          <h3 class="fs-5">B. Kedalaman dan 
            keluasan RPS sesuai 
            dengan capaian 
            pembelajaran lulusan.</h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Isi materi pembelajaran 
              sesuai dengan RPS, 
              memiliki kedalaman dan 
              keluasan yang relevan 
              untuk mencapai capaian 
              pembelajaran lulusan, 
              serta ditinjau ulang secara 
              berkala.             
              <b><li>Nilai 3</li></b>
              Isi materi pembelajaran 
              sesuai dengan RPS, 
              memiliki kedalaman dan 
              keluasan yang relevan 
              untuk mencapai capaian 
              pembelajaran lulusan.                                     
              <b><li>Nilai 2</li></b>
              Isi materi pembelajaran 
              memiliki kedalaman dan 
              keluasan sesuai dengan 
              capaian pembelajaran 
              lulusan.              
              <b><li>Nilai 1</li></b>  
              Isi materi pembelajaran
              memiliki kedalaman dan 
              keluasan namun sebagian 
              tidak sesuai dengan 
              capaian pembelajaran 
              lulusan.             
              <b><li>Nilai 0</li></b>
              Isi materi pembelajaran
              memiliki kedalaman dan 
              keluasan namun sebagian 
              tidak sesuai dengan 
              capaian pembelajaran 
              lulusan.                    
            </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C41--}}
  <div class="modal fade" id="modalc41" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc41">
            Skor = (A + (2 x B) + (2 
            x C) + (2 x D) + (2 x E)) / 
            9           
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3 class="fs-5">A. Bentuk interaksi 
            antara dosen, 
            mahasiswa dan sumber 
            belajar</h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Pelaksanaan 
              pembelajaran berlangsung 
              dalam bentuk interaksi 
              antara dosen, mahasiswa, 
              dan sumber belajar dalam 
              lingkungan belajar tertentu 
              secara on-line dan off-line 
              dalam bentuk audio-visual 
              terdokumentasi. 
              <b><li>Nilai 3</li></b>
              Pelaksanaan 
              pembelajaran berlangsung 
              dalam bentuk interaksi 
              antara dosen, mahasiswa, 
              dan sumber belajar dalam 
              lingkungan belajar tertentu 
              secara on-line dan off-line.                      
              <b><li>Nilai 2</li></b>
              Pelaksanaan 
              pembelajaran berlangsung 
              dalam bentuk interaksi 
              antara dosen, mahasiswa, 
              dan sumber belajar dalam 
              lingkungan belajar 
              tertentu.
              <b><li>Nilai 1</li></b>  
              Pelaksanaan 
              pembelajaran berlangsung 
              hanya sebagian dalam 
              bentuk interaksi antara 
              dosen, mahasiswa, dan 
              sumber belajar dalam 
              lingkungan belajar 
              tertentu.
              <b><li>Nilai 0</li></b>
              Pelaksanaan 
              pembelajaran tidak 
              berlangsung dalam 
              bentuk interaksi antara 
              dosen dan mahasiswa                    
            </ol>
          <hr>
          <h3 class="fs-5">B. Pemantauan 
            kesesuaian proses 
            terhadap rencana 
            pembelajaran</h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Memiliki bukti sahih 
              adanya sistem dan 
              pelaksanaan pemantauan 
              proses pembelajaran yang 
              dilaksanakan secara 
              periodik untuk menjamin 
              kesesuaian dengan RPS 
              dalam rangka menjaga 
              mutu proses 
              pembelajaran. Hasil 
              monev terdokumentasi 
              dengan baik dan 
              digunakan untuk 
              meningkatkan mutu 
              proses pembelajaran.             
              <b><li>Nilai 3</li></b>
              Memiliki bukti sahih 
              adanya sistem dan 
              pelaksanaan pemantauan 
              proses pembelajaran yang 
              dilaksanakan secara 
              periodik untuk menjamin 
              kesesuaian dengan RPS 
              dalam rangka menjaga 
              mutu proses 
              pembelajaran. Hasil 
              monev terdokumentasi 
              dengan baik.                                      
              <b><li>Nilai 2</li></b>
              Memiliki bukti sahih 
              adanya sistem dan 
              pelaksanaan pemantauan 
              proses pembelajaran yang 
              dilaksanakan secara 
              periodik untuk mengukur
              kesesuaian terhadap RPS.              
              <b><li>Nilai 1</li></b>  
              Memiliki bukti sahih 
              adanya sistem 
              pemantauan proses 
              pembelajaran namun tidak 
              dilaksanakan secara 
              konsisten.              
              <b><li>Nilai 0</li></b>
              Tidak memiliki bukti 
              sahih adanya sistem 
              dan pelaksanaan 
              pemantauan proses 
              pembelajaran.                                 
            </ol>
          <hr>
          <h3 class="fs-5">C. Proses pembelajaran 
            yang terkait dengan 
            penelitian harus 
            mengacu SN Dikti 
            Penelitian: <br>
            1) hasil penelitian: harus 
            memenuhi 
            pengembangan 
            IPTEKS, meningkatkan 
            kesejahteraan 
            masyarakat, dan daya 
            saing bangsa.<br>
            2) isi penelitian: 
            memenuhi kedalaman 
            dan keluasan materi 
            penelitian sesuai 
            capaian pembelajaran.<br>
            3) proses penelitian: 
            mencakup perencanaan, 
            pelaksanaan, dan 
            pelaporan.<br>
            4) penilaian penelitian 
            memenuhi unsur 
            edukatif, obyektif, 
            akuntabel, dan 
            transparan
          </h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Terdapat bukti sahih 
              tentang pemenuhan SN 
              Dikti Penelitian pada 
              proses pembelajaran 
              terkait penelitian serta 
              pemenuhan SN Dikti 
              Penelitian pada proses 
              pembelajaran terkait 
              penelitian.                          
              <b><li>Tidak ada Skor antara 2 dan 4</li></b>                                    
              <b><li>Nilai 2</li></b>
              Terdapat bukti sahih 
              tentang pemenuhan SN 
              Dikti Penelitian pada 
              proses pembelajaran 
              terkait penelitian namun 
              tidak memenuhi SN Dikti 
              Penelitian pada proses 
              pembelajaran terkait 
              penelitian.             
              <b><li>Tidak ada Skor kurang dari 2.</li></b>                     
            </ol>
          <hr>
          <h3 class="fs-5">D. Proses pembelajaran 
            yang terkait dengan 
            PkM harus mengacu SN 
            Dikti PkM: <br>
            1) hasil PkM: harus 
            memenuhi 
            pengembangan 
            IPTEKS, meningkatkan 
            kesejahteraan 
            masyarakat, dan daya 
            saing bangsa.<br>
            2) isi PkM: memenuhi 
            kedalaman dan 
            keluasan materi PkM 
            sesuai capaian 
            pembelajaran.<br>
            3) proses PkM: 
            mencakup perencanaan, 
            pelaksanaan, dan 
            pelaporan.<br>
            4) penilaian PkM 
            memenuhi unsur 
            edukatif, obyektif, 
            akuntabel, dan
          </h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Terdapat bukti sahih 
              tentang pemenuhan SN 
              Dikti PkM pada proses 
              pembelajaran terkait PkM 
              serta pemenuhan SN Dikti 
              PkM pada proses 
              pembelajaran terkait PkM.                                     
              <b><li>Tidak ada Skor antara 2 dan 4</li></b>                                    
              <b><li>Nilai 2</li></b>
              Terdapat bukti sahih 
              tentang pemenuhan SN 
              Dikti PkM pada proses 
              pembelajaran terkait PkM 
              namun tidak memenuhi 
              SN Dikti PkM pada proses 
              pembelajaran terkait PkM.            
              <b><li>Tidak ada Skor kurang dari 2.</li></b>                     
            </ol>
          <hr>
          <h3 class="fs-5">E. Kesesuaian metode 
            pembelajaran dengan 
            capaian pembelajaran. 
            Contoh: RBE (research 
            based education), IBE (industry based 
            education), teaching 
            factory/teaching 
            industry, dll.            
          </h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Terdapat bukti sahih yang 
              menunjukkan metode 
              pembelajaran yang 
              dilaksanakan sesuai 
              dengan capaian pembelajaran yang 
              direncanakan pada 75% 
              s.d. 100% mata kuliah.                                    
              <b><li>Nilai 3</li></b>           
              Terdapat bukti sahih yang 
              menunjukkan metode 
              pembelajaran yang 
              dilaksanakan sesuai 
              dengan capaian pembelajaran yang 
              direncanakan pada 50 s.d. 
              < 75% mata kuliah.                                       
              <b><li>Nilai 2</li></b>
              Terdapat bukti sahih yang 
              menunjukkan metode 
              pembelajaran yang 
              dilaksanakan sesuai 
              dengan capaian pembelajaran yang 
              direncanakan pada 25 s.d. 
              < 50% mata kuliah.                        
              <b><li>Nilai 1</li></b>
              Terdapat bukti sahih yang 
              menunjukkan metode 
              pembelajaran yang 
              dilaksanakan sesuai 
              dengan capaian pembelajaran yang 
              direncanakan pada < 25% 
              mata kuliah.   
              <b><li>Nilai 0</li></b>
              Tidak terdapat bukti 
              sahih yang 
              menunjukkan metode 
              pembelajaran yang 
              dilaksanakan sesuai                            
              dengan capaian 
              pembelajaran yang 
              direncanakan.                  
            </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C42--}}
  <div class="modal fade" id="modalc42" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc42">
            Pembelajaran yang 
            dilaksanakan dalam 
            bentuk praktikum, 
            praktik studio, praktik 
            bengkel, atau praktik 
            lapangan.
            <br><br>
            Tabel 5.a LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika PJP ≥ 20% , 
              maka Skor = 4              
              <b><li>Nilai 0-3</li></b>
              Jika PJP < 20% , 
              maka Skor = 20 x PJP                                                   
            </ol>  
          <hr>
          JP = Jam pembelajaran praktikum, praktik studio, praktik bengkel, atau praktik lapangan (termasuk KKN) <br>
          JB = Jam pembelajaran total selama masa pendidikan.<br>
          PJP = (JP / JB) x 100%       
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C43--}}
  <div class="modal fade" id="modalc43" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc43">
            Monitoring dan evaluasi 
            pelaksanaan proses 
            pembelajaran mencakup 
            karakteristik, 
            perencanaan, 
            pelaksanaan, proses 
            pembelajaran dan 
            beban belajar 
            mahasiswa untuk 
            memperoleh capaian 
            pembelajaran lulusan.
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              UPPS memiliki bukti sahih 
              tentang sistem dan 
              pelaksanaan monitoring 
              dan evaluasi proses 
              pembelajaran mencakup 
              karakteristik, 
              perencanaan, 
              pelaksanaan, proses 
              pembelajaran dan beban 
              belajar mahasiswa yang 
              dilaksanakan secara 
              konsisten dan ditindak 
              lanjuti
              <b><li>Nilai 3</li></b>
              UPPS memiliki bukti sahih 
              tentang sistem dan 
              pelaksanaan monitoring 
              dan evaluasi proses 
              pembelajaran mencakup 
              karakteristik, perencanaan, 
              pelaksanaan, proses 
              pembelajaran dan beban 
              belajar mahasiswa yang 
              dilaksanakan secara 
              konsisten.                                        
              <b><li>Nilai 2</li></b>
              UPPS memiliki bukti sahih 
              tentang sistem dan 
              pelaksanaan monitoring 
              dan evaluasi proses 
              pembelajaran mencakup 
              karakteristik, 
              perencanaan, 
              pelaksanaan, proses 
              pembelajaran dan beban 
              belajar mahasiswa.
              <b><li>Nilai 1</li></b>  
              UPPS telah melaksanakan 
              monitoring dan evaluasi 
              proses pembelajaran 
              mencakup karakteristik, 
              perencanaan, 
              pelaksanaan, proses 
              pembelajaran dan beban 
              belajar mahasiswa namun 
              tidak semua didukung 
              bukti sahih.
              <b><li>Nilai 0</li></b>
              UPPS tidak 
              melaksanakan 
              monitoring dan evaluasi 
              proses pembelajaran 
              mencakup karakteristik, 
              perencanaan, 
              pelaksanaan, proses 
              pembelajaran dan 
              beban belajar 
              mahasiswa.                       
            </ol>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C44--}}
  <div class="modal fade" id="modalc44" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc44">
            Skor = (A + (2 x B) + (2 
            x C)) / 5                       
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3 class="fs-5">A. Mutu pelaksanaan 
            penilaian pembelajaran 
            (proses dan hasil belajar 
            mahasiswa) untuk 
            mengukur ketercapaian 
            capaian pembelajaran 
            berdasarkan prinsip 
            penilaian yang 
            mencakup: <br>
            1) edukatif, <br>
            2) otentik, <br>
            3) objektif, <br>
            4) akuntabel, dan <br>
            5) transparan,<br>
            yang dilakukan secara 
            terintegrasi.
            </h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Terdapat bukti sahih 
              tentang dipenuhinya 5 
              prinsip penilaian yang 
              dilakukan secara 
              terintegrasi dan dilengkapi 
              dengan rubrik/portofolio 
              penilaian minimum 70% 
              jumlah matakuliah.
              <b><li>Nilai 3</li></b>
              Terdapat bukti sahih 
              tentang dipenuhinya 5 
              prinsip penilaian yang 
              dilakukan secara 
              terintegrasi dan dilengkapi 
              dengan rubrik/portofolio 
              penilaian minimum 50% 
              jumlah matakuliah.                                    
              <b><li>Nilai 2</li></b>
              Terdapat bukti sahih 
              tentang dipenuhinya 5 
              prinsip penilaian yang 
              dilakukan secara 
              terintegrasi.              
              <b><li>Nilai 1</li></b>  
              Terdapat bukti sahih 
              tentang dipenuhinya 5 
              prinsip penilaian yang 
              tidak dilakukan secara 
              terintegrasi.              
              <b><li>Nilai 0</li></b>
              Tidak terdapat bukti 
              sahih tentang 
              dipenuhinya 5 prinsip 
              penilaian.                                 
            </ol>
          <hr>
          <h3 class="fs-5">B. Pelaksanaan 
            penilaian terdiri atas 
            teknik dan instrumen 
            penilaian. Teknik 
            penilaian terdiri dari: <br>
            1) observasi,<br>
            2) partisipasi,<br>
            3) unjuk kerja,<br>
            4) test tertulis,<br>
            5) test lisan, dan <br>
            6) angket.<br>
            Instrumen penilaian 
            terdiri dari:<br>
            1) penilaian proses 
            dalam bentuk rubrik, 
            dan/ atau;<br>
            2) penilaian hasil dalam 
            bentuk portofolio, atau<br>
            3) karya disain</h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Terdapat bukti sahih yang 
              menunjukkan kesesuaian 
              teknik dan instrumen 
              penilaian terhadap 
              capaian pembelajaran 
              minimum 75% s.d. 100% 
              dari jumlah matakuliah.               
              <b><li>Nilai 3</li></b>
              Terdapat bukti sahih yang 
              menunjukkan kesesuaian 
              teknik dan instrumen 
              penilaian terhadap capaian 
              pembelajaran minimum 50 
              s.d. < 75% dari jumlah 
              matakuliah.                                     
              <b><li>Nilai 2</li></b>
              Terdapat bukti sahih yang 
              menunjukkan kesesuaian 
              teknik dan instrumen 
              penilaian terhadap 
              capaian pembelajaran 
              yang dinilai minimum 25 
              s.d. < 50% dari jumlah 
              matakuliah.             
              <b><li>Nilai 1</li></b>  
              Terdapat bukti sahih yang 
              menunjukkan kesesuaian 
              teknik dan instrumen 
              penilaian terhadap 
              capaian pembelajaran 
              yang dinilai < 25% dari 
              jumlah matakuliah.             
              <b><li>Nilai 0</li></b>
              Tidak terdapat bukti 
              sahih yang 
              menunjukkan 
              kesesuaian teknik dan 
              instrumen penilaian 
              terhadap capaian 
              pembelajaran.                                 
            </ol>
          <hr>
          <h3 class="fs-5">C. Pelaksanaan 
            penilaian memuat unsur-unsur sebagai berikut: <br>
            1) mempunyai kontrak 
            rencana penilaian,<br>
            2) melaksanakan 
            penilaian sesuai kontrak 
            atau kesepakatan,<br>
            3) memberikan umpan 
            balik dan memberi 
            kesempatan untuk 
            mempertanyakan hasil 
            kepada mahasiswa,<br>
            4) mempunyai 
            dokumentasi penilaian 
            proses dan hasil belajar mahasiswa,<br>
            5) mempunyai prosedur
            yang mencakup tahap 
            perencanaan, kegiatan 
            pemberian tugas atau 
            soal, observasi kinerja, 
            pengembalian hasil 
            observasi, dan 
            pemberian nilai akhir,<br>
            6) pelaporan penilaian 
            berupa kualifikasi 
            keberhasilan mahasiswa 
            dalam menempuh suatu 
            mata kuliah dalam 
            bentuk huruf dan angka,<br>
            7) mempunyai bukti-bukti rencana dan telah 
            melakukan proses 
            perbaikan berdasar hasil 
            monev penilaian</h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Terdapat bukti sahih 
              pelaksanaan penilaian 
              mencakup 7 unsur.           
              <b><li>Nilai 3</li></b>
              Terdapat bukti sahih 
              pelaksanaan penilaian 
              mencakup minimum unsur 
              1, 4 dan 6 serta 2 unsur 
              lainnya.                                     
              <b><li>Nilai 2</li></b>
              Terdapat bukti sahih 
              pelaksanaan penilaian 
              mencakup minimum unsur 
              1, 4 dan 6.          
              <b><li>Nilai 1</li></b>  
              Terdapat bukti sahih 
              pelaksanaan penilaian 
              hanya mencakup unsur 6.             
              <b><li>Tidak ada Skor kurang dari 1.</li></b>                    
            </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C45--}}
  <div class="modal fade" id="modalc45" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc45">
            Integrasi kegiatan 
            penelitian dan PkM 
            dalam pembelajaran 
            oleh DTPS dalam 3 
            tahun terakhir.
            <br><br>
            Tabel 5.b LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              NMKI > 3
              <b><li>Nilai 3</li></b>
              NMKI = 2 .. 3                            
              <b><li>Nilai 2</li></b>
              NMKI = 1 
              <b><li>Tidak ada skor kurang dari 2.</li></b>                        
            </ol>  
            <hr>
            NMKI = Jumlah mata kuliah yang dikembangkan berdasarkan hasil penelitian/PkM DTPS dalam 3 tahun terakhir.       
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C46--}}
  <div class="modal fade" id="modalc46" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc46">
            Keterlaksanaan dan 
            keberkalaan program 
            dan kegiatan diluar 
            kegiatan pembelajaran 
            terstruktur untuk 
            meningkatkan suasana 
            akademik.
            Contoh: kegiatan 
            himpunan mahasiswa, 
            kuliah umum/studium generale, seminar 
            ilmiah, bedah buku.
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Kegiatan ilmiah yang 
              terjadwal dilaksanakan 
              setiap bulan.
              <b><li>Nilai 3</li></b>
              Kegiatan ilmiah yang 
              terjadwal dilaksanakan dua 
              s.d tiga bulan sekali.                                        
              <b><li>Nilai 2</li></b>
              Kegiatan ilmiah yang 
              terjadwal dilaksanakan 
              empat s.d. enam bulan 
              sekali.              
              <b><li>Nilai 1</li></b>  
              Kegiatan ilmiah yang 
              terjadwal dilaksanakan 
              lebih dari enam bulan 
              sekali.              
              <b><li>Tidak ada Skor kurang dari 1.</li></b>                       
            </ol>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C47--}}
  <div class="modal fade" id="modalc47" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc47">
            Skor = (A + (2 x B)) / 3         
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3 class="fs-5">A. Tingkat kepuasan 
            mahasiswa terhadap 
            proses pendidikan.
            <br><br>
            Tabel 5.c LKPS </h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              TKM ≥ 75%
              <b><li>Nilai 1-3</li></b>
              Jika 25% ≤ TKM < 75% ,
              maka Skor = (8 x TKM) - 2                       
              <b><li>Nilai 0</li></b>
              Jika TKM < 25% ,
              maka Skor = 0                                
            </ol>
          <hr>
          Tingkat kepuasan pengguna pada aspek: <br> 
          TKM1: Reliability; TKM2: Responsiveness; TKM3: Assurance; TKM4: Empathy; TKM5: Tangible.
          <br><br>
          Tingkat kepuasan mahasiswa pada aspek ke-i dihitung dengan rumus sebagai berikut:<br>
          TKMi = (4 x ai) + (3 x bi) + (2 x ci) + di i = 1, 2, ..., 7<br>
          dimana : ai = persentase “Sangat Baik”; bi = persentase “Baik”; ci = persentase “Cukup”; di = persentase “Kurang”. <br>
          <br><br>
          TKM = ƩTKMi / 5
          <hr>
          <h3 class="fs-5">B. Analisis dan tindak 
            lanjut dari hasil 
            pengukuran kepuasan 
            mahasiswa.</h3>
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Hasil pengukuran 
              dianalisis dan 
              ditindaklanjuti minimal 2 
              kali setiap semester, serta 
              digunakan untuk 
              perbaikan proses 
              pembelajaran dan 
              menunjukkan peningkatan 
              hasil pembelajaran.           
              <b><li>Nilai 3</li></b>
              Hasil pengukuran 
              dianalisis dan 
              ditindaklanjuti setiap 
              semester, serta digunakan 
              untuk perbaikan proses 
              pembelajaran dan 
              menunjukkan peningkatan 
              hasil pembelajaran.                                                  
              <b><li>Nilai 2</li></b>
              Hasil pengukuran 
              dianalisis dan 
              ditindaklanjuti setiap 
              semester, serta digunakan 
              untuk perbaikan proses 
              pembelajaran dan 
              menunjukkan peningkatan 
              hasil pembelajaran.                          
              <b><li>Nilai 1</li></b>  
              Hasil pengukuran 
              dianalisis dan 
              ditindaklanjuti, serta 
              digunakan untuk 
              perbaikan proses 
              pembelajaran, namun 
              dilakukan secara 
              insidentil.          
              <b><li>Nilai 0</li></b>
              Tidak dilakukan analisis 
              terhadap hasil 
              pengukuran kepuasan 
              terhadap proses 
              pembelajaran.                
            </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C48--}}
  <div class="modal fade" id="modalc48" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc48">
            Relevansi penelitian 
            pada UPPS mencakup 
            unsur-unsur sebagai 
            berikut: <br>
            1) memiliki peta jalan 
            yang memayungi tema 
            penelitian dosen dan 
            mahasiswa, <br>
            2) dosen dan 
            mahasiswa 
            melaksanakan penelitian 
            sesuai dengan agenda 
            penelitian dosen yang 
            merujuk kepada peta 
            jalan penelitian. <br>
            3) melakukan evaluasi 
            kesesuaian penelitian 
            dosen dan mahasiswa 
            dengan peta jalan, dan 
            4) menggunakan hasil <br>
            evaluasi untuk 
            perbaikan relevansi 
            penelitian dan 
            pengembangan 
            keilmuan program studi.
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              UPPS memenuhi 4 unsur 
              relevansi penelitian dosen 
              dan mahasiswa.
              <b><li>Nilai 3</li></b>
              UPPS memenuhi unsur 1, 
              2, dan 3 relevansi 
              penelitian dosen dan 
              mahasiswa.                                                     
              <b><li>Nilai 2</li></b>
              UPPS memenuhi unsur 1, 
              dan 2 relevansi penelitian 
              dosen dan mahasiswa.                           
              <b><li>Nilai 1</li></b>  
              UPPS memenuhi unsur 
              pertama namun penelitian 
              dosen dan mahasiswa 
              tidak sesuai dengan peta 
              jalan.             
              <b><li>Nilai 0</li></b>     
              UPPS tidak mempunyai 
              peta jalan penelitian 
              dosen dan mahasiswa.    
            </ol>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C49--}}
  <div class="modal fade" id="modalc49" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc49">
            Penelitian DTPS yang 
            dalam pelaksanaannya 
            melibatkan mahasiswa 
            program studi dalam 3 
            tahun terakhir.
            <br><br>
            Tabel 6.a LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika PPDM ≥ 25%, 
              maka Skor = 4              
              <b><li>Nilai 2-3</li></b>
              Jika PPDM < 25% , 
              maka Skor = 2 + (8 x PPDM)                                                     
              <b><li>Tidak ada Skor kurang dari 2</li></b>    
            </ol>         
          <hr>
            NPM = Jumlah judul penelitian DTPS yang dalam pelaksanaannya melibatkan mahasiswa program studi dalam 3 tahun terakhir. <br>
            NPD = Jumlah judul penelitian DTPS dalam 3 tahun terakhir. <br>
            PPDM = (NPM / NPD) x 100% 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C50--}}
  <div class="modal fade" id="modalc50" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc50">
            Relevansi PkM pada 
            UPPS mencakup unsur-unsur sebagai berikut: <br>
            1) memiliki peta jalan 
            yang memayungi tema 
            PkM dosen dan 
            mahasiswa serta 
            hilirisasi/penerapan 
            keilmuan program studi, <br>
            2) dosen dan 
            mahasiswa 
            melaksanakan PkM 
            sesuai dengan peta 
            jalan PkM. <br>
            3) melakukan evaluasi 
            kesesuaian PkM dosen 
            dan mahasiswa dengan 
            peta jalan, dan <br>
            4) menggunakan hasil 
            evaluasi untuk 
            perbaikan relevansi PkM 
            dan pengembangan 
            keilmuan program studi.
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              UPPS memenuhi 4 unsur 
              relevansi PkM dosen dan 
              mahasiswa.
              <b><li>Nilai 3</li></b>
              UPPS memenuhi unsur 1, 
              2, dan 3 relevansi PkM 
              dosen dan mahasiswa.                                                   
              <b><li>Nilai 2</li></b>
              UPPS memenuhi unsur 1, 
              dan 2 relevansi PkM 
              dosen dan mahasiswa.                                         
              <b><li>Nilai 1</li></b>  
              UPPS memenuhi unsur 
              pertama namun PkM 
              dosen dan mahasiswa 
              tidak sesuai dengan peta 
              jalan.                          
              <b><li>Nilai 0</li></b>     
              UPPS tidak mempunyai 
              peta jalan PkM dosen 
              dan mahasiswa.                 
            </ol>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C51--}}
  <div class="modal fade" id="modalc51" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc51">
            PkM DTPS yang dalam 
            pelaksanaannya melibatkan mahasiswa 
            program studi dalam 3 
            tahun terakhir.
            <br><br>
            Tabel 7 LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika PPkMDM ≥ 25%, 
              maka Skor = 4
              <b><li>Nilai 2-3</li></b>
              Jika PPkMDM < 25% , 
              maka Skor = 2 + (8 x PPDM)                                                   
              <b><li>Tidak ada Skor kurang dari 2</li></b>                 
            </ol> 
          <hr>
          NPkMM = Jumlah judul PkM DTPS yang dalam pelaksanaannya melibatkan mahasiswa program studi dalam 3 tahun terakhir. <br>
          NPkMD = Jumlah judul PkM DTPS dalam 3 tahun terakhir. <br>
          PPkMDM = (NPkMM / NPkMD) x 100%                    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C52--}}
  <div class="modal fade" id="modalc52" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc52">
            Analisis pemenuhan 
            capaian pembelajaran 
            lulusan (CPL) yang 
            diukur dengan metoda
            yang sahih dan relevan, 
            mencakup aspek: <br>
            1) keserbacakupan, <br>
            2) kedalaman, dan <br>
            3) kebermanfaatan <br>
            analisis yang 
            ditunjukkan dengan 
            peningkatan CPL dari 
            waktu ke waktu dalam 3 
            tahun terakhir.
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Analisis capaian 
              pembelajaran lulusan 
              memenuhi 3 aspek
              <b><li>Nilai 3</li></b>
              Analisis capaian 
              pembelajaran lulusan 
              memenuhi 2 aspek                                                   
              <b><li>Nilai 2</li></b>
              Analisis capaian 
              pembelajaran lulusan 
              memenuhi 1 aspek.                                         
              <b><li>Nilai 1</li></b>  
              Analisis capaian 
              pembelajaran lulusan tidak 
              memenuhi ketiga aspek.                    
              <b><li>Nilai 0</li></b>     
              Tidak dilakukan analisis 
              capaian pembelajaran 
              lulusan.                
            </ol>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C53--}}
  <div class="modal fade" id="modalc53" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc53">
            IPK lulusan.
            <br><br>
            RIPK = Rata-rata IPK 
            lulusan dalam 3 tahun 
            terakhir.
            <br><br>
            Tabel 8.a LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika RIPK ≥ 3,25,
              maka Skor = 4              
              <b><li>Nilai 2-3</li></b>
              Jika 2,00 ≤ RIPK < 3,25,
              maka Skor = ((8 x RIPK) - 6) / 5                                                   
              <b><li>Tidak ada skor kurang dari 2</li></b>     
            </ol>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C54--}}
  <div class="modal fade" id="modalc54" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc54">
            Prestasi mahasiswa di 
            bidang akademik dalam 
            3 tahun terakhir.
            <br><br>
            Tabel 8.b.1) LKPS            
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika RI ≥ a ,
              maka Skor = 4              
              <b><li>Nilai 2-3</li></b>
              Jika RI < a dan RN ≥ b ,
              maka Skor = 3 + (RI / a)
              <br>
              Jika 0 < RI < a dan 0 < RN < b ,
              maka Skor = 2 + (2 x (RI/a)) + (RN/b) - ((RI x RN)/(a x b))                                                         
              <b><li>Nilai 0-1</li></b>
              Jika RI = 0 dan RN = 0 dan RW ≥ c , 
              maka Skor = 2
              <br>
              Jika RI = 0 dan RN = 0 dan RW < c , 
              maka Skor = (2 x RW) / c                                                                                   
            </ol>
          <hr>
          RI = NI / NM , RN = NN / NM , RW = NW / NM <br> Faktor: a = 0,1% , b = 1% , c = 2% <br>
          NI = Jumlah prestasi akademik internasional. <br>
          NN = Jumlah prestasi akademik nasional. <br>
          NW = Jumlah prestasi akademik wilayah/lokal. <br>
          NM = Jumlah mahasiswa pada saat TS.                  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C55--}}
  <div class="modal fade" id="modalc55" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc55">
            Prestasi mahasiswa di 
            bidang nonakademik 
            dalam 3 tahun terakhir
            <br><br>
            Tabel 8.b.2) LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika RI ≥ a ,
              maka Skor = 4
              <b><li>Nilai 2-3</li></b>
              Jika RI < a dan RN ≥ b ,
              maka Skor = 3 + (RI / a)
              <br><br>
              Jika 0 < RI < a dan 0 < RN < b ,
              maka Skor = 2 + (2 x (RI/a)) + (RN/b) - ((RI x RN)/(a x b))                                                
              <b><li>Nilai 0-1</li></b>
              Jika RI = 0 dan RN = 0 dan RW ≥ c , 
              maka Skor = 2              
              <br><br>
              Jika RI = 0 dan RN = 0 dan RW < c , 
              maka Skor = (2 x RW) / c                                                                     
            </ol>   
          <hr>
            RI = NI / NM , RN = NN / NM , RW = NW / NM <br>
            Faktor: a = 0,2% , b = 2% , c = 4%<br>
            NI = Jumlah prestasi nonakademik internasional.<br>
            NN = Jumlah prestasi nonakademik nasional.<br>
            NW = Jumlah prestasi nonakademik wilayah/lokal.<br>
            NM = Jumlah mahasiswa pada saat TS.      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C56--}}
  <div class="modal fade" id="modalc56" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc56">
            Masa studi.
            <br>
            MS = Rata-rata masa 
            studi lulusan (tahun).
            <br><br>
            Tabel 8.c LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika 3,5 < MS ≤ 4,5 ,
              maka Skor = 4              
              <b><li>Nilai 1-3</li></b>
              Jika 3 < MS ≤ 3,5 ,
              maka Skor = (8 x MS) - 24
              <br><br>
              Jika 4,5 < MS ≤ 7 ,
              maka Skor = (56 - (8 x MS)) / 5                                           
              <b><li>Nilai 0</li></b>
              Jika MS ≤ 3 , maka Skor = 0                                                                                 
            </ol>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C57--}}
  <div class="modal fade" id="modalc57" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc57">
            Kelulusan tepat waktu.
            <br>
            PTW = Persentase 
            kelulusan tepat waktu.
            <br><br>
            Tabel 8.c LKPS            
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika PTW ≥ 50% ,
              maka Skor = 4                        
              <b><li>Nilai 1-3</li></b>
              Jika PTW < 50% ,
              maka Skor = 1 + (6 x PTW)                                       
              <b><li>Tidak ada Skor kurang dari 1.</li></b>                                                                               
            </ol>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C58--}}
  <div class="modal fade" id="modalc58" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc58">
            Keberhasilan studi.
            <br>
            PPS = Persentase 
            keberhasilan studi.
            <br><br>
            Tabel 8.c LKPS
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika PPS ≥ 85% ,
              maka Skor = 4                          
              <b><li>Nilai 1-3</li></b>
              Jika 30% ≤ PPS < 85% ,
              maka Skor = ((80 x PPSi) - 24) / 11
              <br><br>
              Jika 4,5 < MS ≤ 7 ,
              maka Skor = (56 - (8 x MS)) / 5                                           
              <b><li>Nilai 0</li></b>
              Jika PPS < 30%, 
              maka Skor = 0                                                                                             
            </ol>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C59--}}
  <div class="modal fade" id="modalc59" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc59">
            Pelaksanaan tracer 
            study yang mencakup 5 
            aspek sebagai berikut: <br>
            1) pelaksanaan tracer 
            study terkoordinasi di 
            tingkat PT, <br>
            2) kegiatan tracer study 
            dilakukan secara reguler 
            setiap tahun dan 
            terdokumentasi, <br>
            3) isi kuesioner 
            mencakup seluruh 
            pertanyaan inti tracer 
            study DIKTI. <br>
            4) ditargetkan pada 
            seluruh populasi 
            (lulusan TS-4 s.d. TS-2), <br>
            5) hasilnya 
            disosialisasikan dan 
            digunakan untuk 
            pengembangan 
            kurikulum dan 
            pembelajaran. 
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Tracer study yang 
              dilakukan UPPS telah 
              mencakup 5 aspek.              
              <b><li>Nilai 3</li></b>
              Tracer study yang 
              dilakukan UPPS telah 
              mencakup 4 aspek.                                                                 
              <b><li>Nilai 2</li></b>
              Tracer study yang 
              dilakukan UPPS telah 
              mencakup 3 aspek.                                                
              <b><li>Nilai 1</li></b>  
              Tracer study yang 
              dilakukan UPPS telah 
              mencakup 2 aspek.                                  
              <b><li>Nilai 0</li></b>     
              UPPS tidak 
              melaksanakan tracer 
              study.                             
            </ol>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C60--}}
  <div class="modal fade" id="modalc60" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc60">
            Waktu tunggu. <br>
            WT = waktu tunggu 
            lulusan untuk 
            mendapatkan pekerjaan 
            pertama dalam 3 tahun, 
            mulai TS-4 s.d. TS-2.            
            <br><br>
            Tabel 8.d.1) LKPS         
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika WT < 6 bulan, 
              maka Skor = 4.                                      
              <b><li>Nilai 1-3</li></b>
              Jika 6 ≤ WT ≤ 18, 
              maka Skor = (18 - WT) / 3.                                                       
              <b><li>Nilai 0</li></b>
              WT > 18 bulan, 
              maka Skor = 0                                                                                                           
            </ol> 
          <hr>
          Ketentuan persentase responden lulusan: <br>
          - untuk program studi dengan jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2) ≥ 300 orang, maka Prmin = 30%.<br>
          - untuk program studi dengan jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2) < 300 orang, maka Prmin = 50% - ((NL / 300) x 20%)<br>
          Jika persentase responden memenuhi ketentuan diatas, maka Skor akhir = Skor.<br>
          Jika persentase responden tidak memenuhi ketentuan diatas, maka berlaku penyesuaian sebagai berikut: Skor akhir = (PJ / Prmin) x Skor. <br>
          NL = Jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2)<br>
          NJ = Jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2) yang terlacak<br>
          PJ = Persentase lulusan yang terlacak = (NL / NJ) x 100%<br>
          Prmin = Persentase responden minimum         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C61--}}
  <div class="modal fade" id="modalc61" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc61">
            Kesesuaian bidang 
            kerja.  <br>
            PBS = Kesesuaian 
            bidang kerja lulusan 
            saat mendapatkan 
            pekerjaan pertama 
            dalam 3 tahun, mulai 
            TS-4 s.d. TS-2.           
            <br><br>
            Tabel 8.d.2) LKPS         
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika PBS ≥ 60% , 
              maka Skor = 4                                      
              <b><li>Nilai 0-3</li></b>
              jika PBS < 60%, 
              maka Skor = (20 x PBS) / 3                                                                                                                                                             
            </ol> 
          <hr>
          Ketentuan persentase responden lulusan: <br>
          - untuk program studi dengan jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2) ≥ 300 orang, maka Prmin = 30%.<br>
          - untuk program studi dengan jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2) < 300 orang, maka Prmin = 50% - ((NL / 300) x 20%)<br>
          Jika persentase responden memenuhi ketentuan diatas, maka Skor akhir = Skor.<br>
          Jika persentase responden tidak memenuhi ketentuan diatas, maka berlaku penyesuaian sebagai berikut: Skor akhir = (PJ / Prmin) x Skor. <br>
          NL = Jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2)<br>
          NJ = Jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2) yang terlacak<br>
          PJ = Persentase lulusan yang terlacak = (NL / NJ) x 100%<br>
          Prmin = Persentase responden minimum         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C62--}}
  <div class="modal fade" id="modalc62" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc62">
            Tingkat dan ukuran 
            tempat kerja lulusan.
            <br><br>
            Tabel 8.e.1) LKPS                    
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika RI ≥ a,
              maka Skor = 4                                                    
              <b><li>Nilai 2-3</li></b>
              Jika RI < a dan RN ≥ b ,
              maka Skor = 3 + (RI / a)   
              <br><br>
              Jika 0 < RI < a dan 0 < RN < b ,
              maka Skor = 2 + (2 x (RI/a)) + (RN/b) - ((RI x RN)/(a x b))                                                                 
              <b><li>Nilai 0-1</li></b>
              Jika RI = 0 dan RN = 0 dan RW ≥ c , 
              maka Skor = 2                 
              <br><br>
              Jika RI = 0 dan RN = 0 dan RW < c , 
              maka Skor = (2 x RW) / c                                                                                                        
            </ol> 
          <hr>
          RI = (NI / NL) x 100% , RN = (NN / NL) x 100% , RW = (NW / NL) x 100% <br>
          Faktor: a = 5% , b = 20% , c = 90% . <br>
          NI = Jumlah lulusan yang bekerja di badan usaha tingkat multi nasional/internasional. <br>
          NN = Jumlah lulusan yang bekerja di badan usaha tingkat nasional atau berwirausaha yang berizin.<br>
          NW = Jumlah lulusan yang bekerja di badan usaha tingkat wilayah/lokal atau berwirausaha tidak berizin.<br>
          NL = Jumlah lulusan.
          <hr>
          Ketentuan persentase responden lulusan: <br>
          - untuk program studi dengan jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2) ≥ 300 orang, maka Prmin = 30%.<br>
          - untuk program studi dengan jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2) < 300 orang, maka Prmin = 50% - ((NL / 300) x 20%)<br>
          Jika persentase responden memenuhi ketentuan diatas, maka Skor akhir = Skor.<br>
          Jika persentase responden tidak memenuhi ketentuan diatas, maka berlaku penyesuaian sebagai berikut: Skor akhir = (PJ / Prmin) x Skor. <br>
          NL = Jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2)<br>
          NJ = Jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2) yang terlacak<br>
          PJ = Persentase lulusan yang terlacak = (NL / NJ) x 100%<br>
          Prmin = Persentase responden minimum         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C63--}}
  <div class="modal fade" id="modalc63" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc63">
            Tingkat kepuasan 
            pengguna lulusan.
            <br><br>
            Tabel 8.e.2) LKPS                    
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Skor = STKi / 7
          <hr>
          Tingkat kepuasan aspek ke-i dihitung dengan rumus sebagai berikut: <br>
          TKi = (4 x ai) + (3 x bi) + (2 x ci) + di i = 1, 2, ..., 7<br>
          ai = persentase “sangat baik”.<br>
          bi = persentase “baik”. <br>
          ci = persentase “cukup”.<br>
          di = persentase “kurang”. <br>
          <hr>
          Ketentuan persentase responden lulusan: <br>
          - untuk program studi dengan jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2) ≥ 300 orang, maka Prmin = 30%.<br>
          - untuk program studi dengan jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2) < 300 orang, maka Prmin = 50% - ((NL / 300) x 20%)<br>
          Jika persentase responden memenuhi ketentuan diatas, maka Skor akhir = Skor.<br>
          Jika persentase responden tidak memenuhi ketentuan diatas, maka berlaku penyesuaian sebagai berikut: Skor akhir = (PJ / Prmin) x Skor. <br>
          NL = Jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2)<br>
          NJ = Jumlah lulusan dalam 3 tahun (TS-4 s.d. TS-2) yang terlacak<br>
          PJ = Persentase lulusan yang terlacak = (NL / NJ) x 100%<br>
          Prmin = Persentase responden minimum         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C64--}}
  <div class="modal fade" id="modalc64" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc64">
            Publikasi ilmiah 
            mahasiswa, yang 
            dihasilkan secara 
            mandiri atau bersama 
            DTPS, dengan judul 
            yang relevan dengan 
            bidang program studi 
            dalam 3 tahun terakhir.
            <br><br>
            Tabel 8.f.1) LKPS                    
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika RI ≥ a,
              maka Skor = 4                                                   
              <b><li>Nilai 2-3</li></b>
              Jika RI < a dan RN ≥ b ,
              maka Skor = 3 + (RI / a)   
              <br><br>
              Jika 0 < RI < a dan 0 < RN < b ,
              maka Skor = 2 + (2 x (RI/a)) + (RN/b) - ((RI x RN)/(a x b))                                                                 
              <b><li>Nilai 0-1</li></b>
              Jika RI = 0 dan RN = 0 dan RL ≥ c , 
              maka Skor = 2                              
              <br><br>
              Jika RI = 0 dan RN = 0 dan RL < c , 
              maka Skor = (2 x RL) / c                                                                                                        
            </ol> 
          <hr>
          RL = ((NA1 + NB1 + NC1) / NM) x 100% , <br>
          RN = ((NA2 + NA3 + NB2 + NC2) / NM) x 100% , <br>
          RI = ((NA4 + NB3 + NC3) / NM) x 100% <br>
          Faktor: a = 1% , b = 10% , c = 50%<br>
          NA1 = Jumlah publikasi mahasiswa di jurnal nasional tidak terakreditasi.<br>
          NA2 = Jumlah publikasi mahasiswa di jurnal nasional terakreditasi.<br>
          NA3 = Jumlah publikasi mahasiswa di jurnal internasional.<br>
          NA4 = Jumlah publikasi mahasiswa di jurnal internasional bereputasi.<br>
          NB1 = Jumlah publikasi mahasiswa di seminar wilayah/lokal/PT.<br>
          NB2 = Jumlah publikasi mahasiswa di seminar nasional.<br>
          NB3 = Jumlah publikasi mahasiswa di seminar internasional.<br>
          NC1 = Jumlah tulisan mahasiswa di media massa wilayah.<br>
          NC2 = Jumlah tulisan mahasiswa di media massa nasional.<br>
          NC3 = Jumlah tulisan mahasiswa di media massa internasional.<br>
          NM = Jumlah mahasiswa pada saat TS.    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal C64--}}
  <div class="modal fade" id="modalc65" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalc65">
            Luaran penelitian dan 
            PkM yang dihasilkan 
            mahasiswa, baik secara 
            mandiri atau bersama 
            DTPS dalam 3 tahun 
            terakhir
            <br><br>
            Tabel 8.f.4) LKPS                    
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ol style="list-style-type: none;">
              <b><li>Nilai 4</li></b>
              Jika NLP ≥ 1 ,
              maka Skor 4                                                  
              <b><li>Nilai 2-3</li></b>
              Jika NLP < 1 ,
              maka Skor = 2 + (2 x NLP) .                                                             
              <b><li>Tidak ada Skor kurang dari 2.</li></b>                                                                                                       
            </ol> 
          <hr>
          NLP = 2 x (NA + NB + NC) + ND <br>
          NA = Jumlah luaran penelitian/PkM mahasiswa yang mendapat pengakuan HKI (Paten, Paten Sederhana)<br>
          NB = Jumlah luaran penelitian/PkM mahasiswa yang mendapat pengakuan HKI (Hak Cipta, Desain Produk Industri, Perlindungan Varietas 
          Tanaman, Desain Tata Letak Sirkuit Terpadu, dll.)<br>
          NC = Jumlah luaran penelitian/PkM mahasiswa dalam bentuk Teknologi Tepat Guna, Produk (Produk Terstandarisasi, Produk Tersertifikasi), 
          Karya Seni, Rekayasa Sosial.<br>
          ND = Jumlah luaran penelitian/PkM mahasiswa yang diterbitkan dalam bentuk Buku ber-ISBN, Book Chapter. <br>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>












  <header class="header">
    <h1 class="header__title">Pengisisan Form Penilaian</h1>
  </header>
  <div class="content">
    <div class="content__inner">


      <div class="container overflow-hidden">
        <div class="multisteps-form">
          <div class="row">
            <div class="col-12 col-lg-12 ml-auto mr-auto mb-4">
              <div class="multisteps-form__progress">
                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info" disabled>Kondisi <br> Eksternal</button>
                <button class="multisteps-form__progress-btn" type="button" title="Address" disabled>Profil Unit Pengelola <br> Program Studi</button>
                <button class="multisteps-form__progress-btn" type="button" title="Order Info" disabled>Visi, Misi, Tujuan dan Strategi</button>
                <button class="multisteps-form__progress-btn" type="button" title="Message" disabled>Tata Pamong, Tata Kelola dan Kerjasama</button>
                <button class="multisteps-form__progress-btn" type="button" title="Message" disabled>Mahasiswa</button>
                <button class="multisteps-form__progress-btn" type="button" title="Message" disabled>Sumber Daya Manusia</button>
                <button class="multisteps-form__progress-btn" type="button" title="Message" disabled>Keuangan, Sarana dan Prasarana</button>
                <button class="multisteps-form__progress-btn" type="button" title="Message" disabled>Pendidikan</button>
                <button class="multisteps-form__progress-btn" type="button" title="Message" disabled>Penelitian</button>
                <button class="multisteps-form__progress-btn" type="button" title="Message" disabled>Pengabdian kepada Masyarakat</button>
                <button class="multisteps-form__progress-btn" type="button" title="Message" disabled>Luaran dan Capaian Tridharma</button>
                <button class="multisteps-form__progress-btn" type="button" title="Message" disabled>Analisis dan Penetapan Program Pengembangan</button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-8 m-auto">
              <form class="multisteps-form__form">
                @csrf
                {{-- a1 --}}
                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">Kondisi Eksternal</h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Elemen</th>
                              <th scope="col">Indikator</th>
                              <th scope="col">DESKRIPSI PENILAIAN ASESOR (OPSIONAL)</th>
                              <th scope="col">Skor</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <th scope="row">A. Kondisi Eksternal</th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modala1">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f1' name="f1" style="height: 100px" >{{ $penilaian['f1'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n1" id='n1' value="{{ $penilaian['n1'] }}"/>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" id='next1_btn_asli' style="display: none;">Next</button>
                      <button class='btn btn-primary ml-auto' type='button' id='next1_btn'>Next</button>
                    </div>
                  </div>
                </div>
                {{-- b1 --}}
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">Profil Unit Pengelola Program Studi</h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Elemen</th>
                              <th scope="col">Indikator</th>
                              <th scope="col">DESKRIPSI PENILAIAN ASESOR (OPSIONAL)</th>
                              <th scope="col">Skor</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">2</th>
                              <th scope="row">B. Profil Unit Pengelola Program Studi</th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalb1">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f2' name="f2" style="height: 100px" >{{ $penilaian['f2'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n2" id='n2' value="{{ $penilaian['n2'] }}"/>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" id='next2_btn_asli' style="display: none;">Next</button>
                      <button class='btn btn-primary ml-auto' type='button' id='next2_btn'>Next</button>
                    </div>
                  </div>
                </div>
                {{-- c1 --}}
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">C. Kriteria <br> C.1. Visi, Misi, Tujuan dan Strategi
                    </h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Elemen</th>
                              <th scope="col">Indikator</th>
                              <th scope="col">DESKRIPSI PENILAIAN ASESOR (OPSIONAL)</th>
                              <th scope="col">Skor</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">3</th>
                              <th scope="row">C. Kriteria
                                <br>
                                C.1. Visi, Misi, Tujuan dan Strategi
                                <br>
                                C.1.4. Indikator Kinerja Utama
                              </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc3">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f3' name="f3" style="height: 100px" >{{ $penilaian['f3'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n3" id='n3' value="{{ $penilaian['n3'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">4</th>
                              <th scope="row"></th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc4">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f4' name="f4" style="height: 100px" >{{ $penilaian['f4'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n4" id='n4' value="{{ $penilaian['n4'] }}"/>
                                </div>
                              </td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <th scope="row"></th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc5">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f5' name="f5" style="height: 100px" >{{ $penilaian['f5'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n5" id='n5' value="{{ $penilaian['n5'] }}"/>
                              </div>
                            </td>
                        </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" id='next3_btn_asli' style="display: none;">Next</button>
                      <button class='btn btn-primary ml-auto' type='button' id='next3_btn'>Next</button>
                    </div>
                  </div>
                </div>

                {{-- c2 --}}
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title"> C.2. Tata Pamong, Tata Kelola dan Kerjasama </h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Elemen</th>
                              <th scope="col">Indikator</th>
                              <th scope="col">DESKRIPSI PENILAIAN ASESOR (OPSIONAL)</th>
                              <th scope="col">Skor</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">6</th>
                              <th scope="row">
                                C.2.4. Indikator Kinerja Utama
                                <br>
                                C.2.4. Indikator Kinerja Utama
                              </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc6">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f6' name="f6" style="height: 100px" >{{ $penilaian['f6'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n6" id='n6' value="{{ $penilaian['n6'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">7</th>
                              <th scope="row">C.2.4.b) 
                                Kepemimpinan 
                                dan Kemampuan 
                                Manajerial
                                </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc7">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f7' name="f7" style="height: 100px" >{{ $penilaian['f7'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n7" id='n7' value="{{ $penilaian['n7'] }}"/>
                                </div>
                              </td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <th scope="row">C.2.4.c) Kerjasama</th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc8">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f8' name="f8" style="height: 100px" >{{ $penilaian['f8'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n8" id='n8' value="{{ $penilaian['n8'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <th scope="row"></th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc9">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f9' name="f9" style="height: 100px" >{{ $penilaian['f9'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n9" id='n9' value="{{ $penilaian['n9'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <th scope="row">C.2.5 
                              Indikator Kinerja 
                              Tambahan</th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc10">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f10' name="f10" style="height: 100px" >{{ $penilaian['f10'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n10" id='n10' value="{{ $penilaian['n10'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">11</th>
                            <th scope="row">C.2.6 
                              Evaluasi Capaian 
                              Kinerja</th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc11">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f11' name="f11" style="height: 100px" >{{ $penilaian['f11'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n11" id='n11' value="{{ $penilaian['n11'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">12</th>
                            <th scope="row">C.2.7. Penjaminan 
                              Mutu</th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc12">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f12' name="f12" style="height: 100px" >{{ $penilaian['f12'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n12" id='n12' value="{{ $penilaian['n12'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">13</th>
                            <th scope="row">C.2.8. Kepuasan 
                              Pemangku 
                              Kepentingan</th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc13">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f13' name="f13" style="height: 100px" >{{ $penilaian['f13'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n13" id='n13' value="{{ $penilaian['n13'] }}"/>
                              </div>
                            </td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" id='next4_btn_asli' style="display: none;">Next</button>
                      <button class='btn btn-primary ml-auto' type='button' id='next4_btn'>Next</button>
                    </div>
                  </div>
                </div>         

                {{-- c3 --}}
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">C.3. Mahasiswa
                    </h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Elemen</th>
                              <th scope="col">Indikator</th>
                              <th scope="col">DESKRIPSI PENILAIAN ASESOR (OPSIONAL)</th>
                              <th scope="col">Skor</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">14</th>
                              <th scope="row">
                                C.3.4. Indikator Kinerja Utama
                                <br>
                                C.3.4.a) Kualitas put Mahasiswa
                              </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc14">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f14' name="f14" style="height: 100px" >{{ $penilaian['f14'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n14" id='n14' value="{{ $penilaian['n14'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">15</th>
                              <th scope="row">C.3.4.b) Daya 
                                Tarik Program 
                                Studi</th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc15">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f15' name="f15" style="height: 100px" >{{ $penilaian['f15'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n15" id='n15' value="{{ $penilaian['n15'] }}"/>
                                </div>
                              </td>
                          </tr>
                          <tr>
                            <th scope="row">16</th>
                            <th scope="row">C.3.4.c) Layanan 
                              Kemahasiswaan
                              </th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc16">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f16' name="f16" style="height: 100px" >{{ $penilaian['f16'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n16" id='n16' value="{{ $penilaian['n16'] }}"/>
                              </div>
                            </td>
                        </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" id='next5_btn_asli' style="display: none;">Next</button>
                      <button class='btn btn-primary ml-auto' type='button' id='next5_btn'>Next</button>
                    </div>
                  </div>
                </div>

                {{-- c4 --}}
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title"> C.4. Sumber Daya Manusia </h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Elemen</th>
                              <th scope="col">Indikator</th>
                              <th scope="col">DESKRIPSI PENILAIAN ASESOR (OPSIONAL)</th>
                              <th scope="col">Skor</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">17</th>
                              <th scope="row">
                                C.4.4. Indikator Kinerja Utama
                                <br>
                                C.4.4.a) Profil Dosen                                
                              </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc17">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f17' name="f17" style="height: 100px" >{{ $penilaian['f17'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n17" id='n17' value="{{ $penilaian['n17'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">18</th>
                              <th scope="row"></th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc18">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f18' name="f18" style="height: 100px" >{{ $penilaian['f18'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n18" id='n18' value="{{ $penilaian['n18'] }}"/>
                                </div>
                              </td>
                          </tr>
                          <tr>
                            <th scope="row">19</th>
                            <th scope="row"></th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc19">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f19' name="f19" style="height: 100px" >{{ $penilaian['f19'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n19" id='n19' value="{{ $penilaian['n19'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">20</th>
                            <th scope="row"></th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc20">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f20' name="f20" style="height: 100px" >{{ $penilaian['f20'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n20" id='n20' value="{{ $penilaian['n20'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">21</th>
                            <th scope="row"></th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc21">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f21' name="f21" style="height: 100px" >{{ $penilaian['f21'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n21" id='n21' value="{{ $penilaian['n21'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">22</th>
                            <th scope="row"></th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc22">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f22' name="f22" style="height: 100px" >{{ $penilaian['f22'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n22" id='n22' value="{{ $penilaian['n22'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">23</th>
                            <th scope="row"></th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc23">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f23' name="f23" style="height: 100px" >{{ $penilaian['f23'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n23" id='n23' value="{{ $penilaian['n23'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">24</th>
                            <th scope="row">C.4.4.b) Kinerja Dosen
                              </th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc24">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f24' name="f24" style="height: 100px" >{{ $penilaian['f24'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n24" id='n24' value="{{ $penilaian['n24'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">25</th>
                            <th scope="row"></th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc25">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f25' name="f25" style="height: 100px" >{{ $penilaian['f25'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n25" id='n25' value="{{ $penilaian['n25'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">26</th>
                            <th scope="row"></th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc26">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f26' name="f26" style="height: 100px" >{{ $penilaian['f26'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n26" id='n26' value="{{ $penilaian['n26'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">27</th>
                            <th scope="row"></th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc27">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f27' name="f27" style="height: 100px" >{{ $penilaian['f27'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n27" id='n27' value="{{ $penilaian['n27'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">28</th>
                            <th scope="row"></th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc28">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f28' name="f28" style="height: 100px" >{{ $penilaian['f28'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n28" id='n28' value="{{ $penilaian['n28'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">29</th>
                            <th scope="row"></th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc29">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f29' name="f29" style="height: 100px" >{{ $penilaian['f29'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n29" id='n29' value="{{ $penilaian['n29'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">30</th>
                            <th scope="row">C.4.4.c)
                              Pengembangan
                              Dosen</th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc30">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f30' name="f30" style="height: 100px" >{{ $penilaian['f30'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n30" id='n30' value="{{ $penilaian['n30'] }}"/>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">31</th>
                            <th scope="row">C.4.4.c)
                              Pengembangan
                              Dosen</th>
                            <td>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc31">
                                <i class="bi bi-info-lg"></i>
                              </button>
                            </td>
                            <td>
                              <div class="form-floating col-md-15">
                                <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f31' name="f31" style="height: 100px" >{{ $penilaian['f31'] }}</textarea>
                              </div>
                            </td>
                            <td>
                              <div class="col-md-auto">
                                <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n31" id='n31' value="{{ $penilaian['n31'] }}"/>
                              </div>
                            </td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" id='next6_btn_asli' style="display: none;">Next</button>
                      <button class='btn btn-primary ml-auto' type='button' id='next6_btn'>Next</button>
                    </div>
                  </div>
                </div>

                {{-- c5 --}}
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">C.5. Keuangan, 
                    Sarana dan 
                    Prasarana
                    </h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Elemen</th>
                              <th scope="col">Indikator</th>
                              <th scope="col">DESKRIPSI PENILAIAN ASESOR (OPSIONAL)</th>
                              <th scope="col">Skor</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">32</th>
                              <th scope="row">
                                C.5.4. Indikator Kinerja Utama
                                <br>
                                C.5.4.a) Keuangan
                              </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc32">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f32' name="f32" style="height: 100px" >{{ $penilaian['f32'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n32" id='n32' value="{{ $penilaian['n32'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">33</th>
                              <th scope="row"></th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc33">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f33' name="f33" style="height: 100px" >{{ $penilaian['f33'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n33" id='n33' value="{{ $penilaian['n33'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">34</th>
                              <th scope="row">
                                </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc34">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f34' name="f34" style="height: 100px" >{{ $penilaian['f34'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n34" id='n34' value="{{ $penilaian['n34'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">35</th>
                              <th scope="row">
                                </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc35">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f35' name="f35" style="height: 100px" >{{ $penilaian['f35'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n35" id='n35' value="{{ $penilaian['n35'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">36</th>
                              <th scope="row">
                                </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc36">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f36' name="f36" style="height: 100px" >{{ $penilaian['f36'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n36" id='n36' value="{{ $penilaian['n36'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">37</th>
                              <th scope="row">C.5.4.b) Sarana dan Prasarana
                                </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc37">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f37' name="f37" style="height: 100px" >{{ $penilaian['f37'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n37" id='n37' value="{{ $penilaian['n37'] }}"/>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" id='next7_btn_asli' style="display: none;">Next</button>
                      <button class='btn btn-primary ml-auto' type='button' id='next7_btn'>Next</button>
                    </div>
                  </div>
                </div>

                {{-- c6 --}}
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title"> C.6. Pendidikan
                    </h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Elemen</th>
                              <th scope="col">Indikator</th>
                              <th scope="col">DESKRIPSI PENILAIAN ASESOR (OPSIONAL)</th>
                              <th scope="col">Skor</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">38</th>
                              <th scope="row">
                                C.6.4. Indikator 
                                Kinerja Utama
                                <br>
                                C.6.4.a) Kurikulum
                              </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc38">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f38' name="f38" style="height: 100px" >{{ $penilaian['f38'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n38" id='n38' value="{{ $penilaian['n38'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">39</th>
                              <th scope="row"> C.6.4.b) 
                                Karakteristik 
                                Proses 
                                Pembelajaran
                                </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc39">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f39' name="f39" style="height: 100px" >{{ $penilaian['f39'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n39" id='n39' value="{{ $penilaian['n39'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">40</th>
                              <th scope="row">C.6.4.c) Rencana 
                                Proses 
                                Pembelajaran
                                </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc40">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f40' name="f40" style="height: 100px" >{{ $penilaian['f40'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n40" id='n40' value="{{ $penilaian['n40'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">41</th>
                              <th scope="row">C.6.4.d) 
                                Pelaksanaan 
                                Proses 
                                Pembelajaran                                                
                                </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc41">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f41' name="f41" style="height: 100px" >{{ $penilaian['f41'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n41" id='n41' value="{{ $penilaian['n41'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">42</th>
                              <th scope="row">
                                </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc42">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f42' name="f42" style="height: 100px" >{{ $penilaian['f42'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n42" id='n42' value="{{ $penilaian['n42'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">43</th>
                              <th scope="row"> C.6.4.e) 
                                Monitoring dan 
                                Evaluasi Proses 
                                Pembelajaran                                
                                </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc43">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f43' name="f43" style="height: 100px" >{{ $penilaian['f43'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n43" id='n43' value="{{ $penilaian['n43'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">44</th>
                              <th scope="row"> C.6.4.f) Penilaian 
                                Pembelajaran                                                
                                </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc44">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f44' name="f44" style="height: 100px" >{{ $penilaian['f44'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n44" id='n44' value="{{ $penilaian['n44'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">45</th>
                              <th scope="row">C.6.4.g) Integrasi 
                                kegiatan penelitian 
                                dan PkM dalam 
                                pembelajaran                                                
                                </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc45">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f45' name="f45" style="height: 100px" >{{ $penilaian['f45'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n45" id='n45' value="{{ $penilaian['n45'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">46</th>
                              <th scope="row"> C.6.4.h) Suasana 
                                Akademik
                                </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc46">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f46' name="f46" style="height: 100px" >{{ $penilaian['f46'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n46" id='n46' value="{{ $penilaian['n46'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">47</th>
                              <th scope="row">C.6.4.i) Kepuasan 
                                Mahasiswa
                                </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc47">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f47' name="f47" style="height: 100px" >{{ $penilaian['f47'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n47" id='n47' value="{{ $penilaian['n47'] }}"/>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" id='next8_btn_asli' style="display: none;">Next</button>
                      <button class='btn btn-primary ml-auto' type='button' id='next8_btn'>Next</button>
                    </div>
                  </div>
                </div>
          
                {{-- c7 --}}
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">C.7. Penelitian
                    </h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Elemen</th>
                              <th scope="col">Indikator</th>
                              <th scope="col">DESKRIPSI PENILAIAN ASESOR (OPSIONAL)</th>
                              <th scope="col">Skor</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">48</th>
                              <th scope="row">
                                C.7.4. Indikator Kinerja Utama                                
                                <br>
                                C.7.4.a) Relevansi Penelitian
                              </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc48">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f48' name="f48" style="height: 100px" >{{ $penilaian['f48'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n48" id='n48' value="{{ $penilaian['n48'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">49</th>
                              <th scope="row"> C.7.4.b) Penelitian 
                                Dosen dan 
                                Mahasiswa</th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc49">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f49' name="f49" style="height: 100px" >{{ $penilaian['f49'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n49" id='n49' value="{{ $penilaian['n49'] }}"/>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" id='next9_btn_asli' style="display: none;">Next</button>
                      <button class='btn btn-primary ml-auto' type='button' id='next9_btn'>Next</button>
                    </div>
                  </div>
                </div>

                {{-- c8 --}}
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title"> C.8. Pengabdian 
                    kepada
                    Masyarakat
                    </h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Elemen</th>
                              <th scope="col">Indikator</th>
                              <th scope="col">DESKRIPSI PENILAIAN ASESOR (OPSIONAL)</th>
                              <th scope="col">Skor</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">50</th>
                              <th scope="row">
                                C.8.4. Indikator Kinerja Utama                            
                                <br>
                                C.8.4.a) Relevansi PkM
                              </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc50">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f50' name="f50" style="height: 100px" >{{ $penilaian['f50'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n50" id='n50' value="{{ $penilaian['n50'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">51</th>
                              <th scope="row">C.8.4.b) PkM 
                                Dosen dan 
                                Mahasiswa</th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc51">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f51' name="f51" style="height: 100px" >{{ $penilaian['f51'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n51" id='n51' value="{{ $penilaian['n51'] }}"/>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" id='next10_btn_asli' style="display: none;">Next</button>
                      <button class='btn btn-primary ml-auto' type='button' id='next10_btn'>Next</button>
                    </div>
                  </div>
                </div>

                {{-- c9 --}}
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title"> C.9. Luaran dan Capaian Tridharma                    
                    </h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Elemen</th>
                              <th scope="col">Indikator</th>
                              <th scope="col">DESKRIPSI PENILAIAN ASESOR (OPSIONAL)</th>
                              <th scope="col">Skor</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">52</th>
                              <th scope="row">
                                C.9.4. Indikator Kinerja Utama                           
                                <br>
                                C.9.4.a) Luaran Dharma Pendidikan                                
                              </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc52">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f52' name="f52" style="height: 100px" >{{ $penilaian['f52'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n52" id='n52' value="{{ $penilaian['n52'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">53</th>
                              <th scope="row"></th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc53">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f53' name="f53" style="height: 100px" >{{ $penilaian['f53'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n53" id='n53' value="{{ $penilaian['n53'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">54</th>
                              <th scope="row"></th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc54">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f54' name="f54" style="height: 100px" >{{ $penilaian['f54'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n54" id='n54' value="{{ $penilaian['n54'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">55</th>
                              <th scope="row"></th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc55">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f55' name="f55" style="height: 100px" >{{ $penilaian['f55'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n55" id='n55' value="{{ $penilaian['n55'] }}"/>
                                </div>
                              </td>
                            </tr> 
                            <tr>
                              <th scope="row">56</th>
                              <th scope="row"></th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc56">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f56' name="f56" style="height: 100px" >{{ $penilaian['f56'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n56" id='n56' value="{{ $penilaian['n56'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">57</th>
                              <th scope="row"></th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc57">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f57' name="f57" style="height: 100px" >{{ $penilaian['f57'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n57" id='n57' value="{{ $penilaian['n57'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">58</th>
                              <th scope="row"></th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc58">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f58' name="f58" style="height: 100px" >{{ $penilaian['f58'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n58" id='n58' value="{{ $penilaian['n58'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">59</th>
                              <th scope="row"></th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc59">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f59' name="f59" style="height: 100px" >{{ $penilaian['f59'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n59" id='n59' value="{{ $penilaian['n59'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">60</th>
                              <th scope="row"></th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc60">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f60' name="f60" style="height: 100px" >{{ $penilaian['f60'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n60" id='n60' value="{{ $penilaian['n60'] }}"/>
                                </div>
                              </td>
                            </tr>  
                            <tr>
                              <th scope="row">61</th>
                              <th scope="row"></th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc61">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f61' name="f61" style="height: 100px" >{{ $penilaian['f61'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n61" id='n61' value="{{ $penilaian['n61'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">62</th>
                              <th scope="row"></th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc62">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f62' name="f62" style="height: 100px" >{{ $penilaian['f62'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n62" id='n62' value="{{ $penilaian['n62'] }}"/>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">63</th>
                              <th scope="row"></th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc63">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f63' name="f63" style="height: 100px" >{{ $penilaian['f63'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n63" id='n63' value="{{ $penilaian['n63'] }}"/>
                                </div>
                              </td>
                            </tr>  
                            <tr>
                              <th scope="row">64</th>
                              <th scope="row">C.9.4.b) Luaran 
                                Dharma Penelitian 
                                dan PkM </th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc64">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f64' name="f64" style="height: 100px" >{{ $penilaian['f64'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n64" id='n64' value="{{ $penilaian['n64'] }}"/>
                                </div>
                              </td>
                            </tr>  
                            <tr>
                              <th scope="row">65</th>
                              <th scope="row"></th>
                              <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalc65">
                                  <i class="bi bi-info-lg"></i>
                                </button>
                              </td>
                              <td>
                                <div class="form-floating col-md-15">
                                  <textarea class="multisteps-form__input form-control" placeholder="opsional" id='f65' name="f65" style="height: 100px" >{{ $penilaian['f65'] }}</textarea>
                                </div>
                              </td>
                              <td>
                                <div class="col-md-auto">
                                  <input class="multisteps-form__input form-control" type="number" placeholder="0-4/2.1" name="n65" id='n65' value="{{ $penilaian['n65'] }}"/>
                                </div>
                              </td>
                            </tr>                               
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" id='next11_btn_asli' style="display: none;">Next</button>
                      <button class='btn btn-primary ml-auto' type='button' id='next11_btn'>Next</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>


    // tombol next 1
    $('#next1_btn').click(function() {
      // alert('coba');
      var is_valid = true;

      if ($('#n1').val() == "") {
        is_valid = false;
        alert('no 1 belum diisi');
        
      } else if ($('#n1').val() > 4 || $('#n1').val() < 0) {
        is_valid = false;
        alert("Nilai Harus 0-4");
      } else {
        const data_form = {
          '_token': '{{ csrf_token() }}',
          'f1': $('#f1').val(),
          'n1': $('#n1').val(),
        };
        $.ajax({
            type: "POST",
            url: '/multi/autosave1',
            data: data_form,
          })
          .done(function(data) {
            const kontol = JSON.parse(data);
            alert(kontol);
          });
      }

      if (is_valid) {
        $('#next1_btn_asli').click();
      }
    });

    // tombol next 2
    $('#next2_btn').click(function() {
      // alert('coba');
      var is_valid = true;

      if ($('#n2').val() == "") {
        is_valid = false;
        alert('no 2 belum diisi');
        
      } else if ($('#n2').val() > 4 || $('#n2').val() < 0) {
        is_valid = false;
        alert("Nilai Harus 0-4");
      } else {
        const data_form = {
          '_token': '{{ csrf_token() }}',
          'f2': $('#f2').val(),
          'n2': $('#n2').val(),
        };
        $.ajax({
            type: "POST",
            url: '/multi/autosave2',
            data: data_form,
          })
          .done(function(data) {
            const kontol = JSON.parse(data);
            alert(kontol);
          });
      }

      if (is_valid) {
        $('#next2_btn_asli').click();
      }
    });

    // tombol next 3
    $('#next3_btn').click(function() {
      // alert('coba');
      var is_valid = true;

      if ($('#n3').val() == "" || $('#n4').val() == "" || $('#n5').val() == "") {
        is_valid = false;
        if ($('#n3').val() == "") {
          alert('no 3 belum diisi');
        }else if ($('#n4').val() == "") {
          alert('no 4 belum diisi');
        }else if ($('#n5').val() == "") {
          alert('no 5 belum diisi');
        }
      } else if ($('#n3').val() > 4 || $('#n3').val() < 0 || $('#n4').val() > 4 || $('#n4').val() < 0 || $('#n5').val() > 4 || $('#n5').val() < 0) {
        is_valid = false;
        if ($('#n3').val() > 4 || $('#n3').val() < 0) {
          alert("No 3 Nilai Harus 0-4");
        }else if ($('#n4').val() > 4 || $('#n4').val() < 0) {
          alert("No 4 Nilai Harus 0-4");
        }else if ($('#n5').val() > 4 || $('#n5').val() < 0) {
          alert("No 5 Nilai Harus 0-4");
        }
        
      } else {
        const data_form = {
          '_token': '{{ csrf_token() }}',
          'f3': $('#f3').val(),
          'n3': $('#n3').val(),
          'f4': $('#f4').val(),
          'n4': $('#n4').val(),
          'f5': $('#f5').val(),
          'n5': $('#n5').val(),
        };
        $.ajax({
            type: "POST",
            url: '/multi/autosave3',
            data: data_form,
          })
          .done(function(data) {
            const kontol = JSON.parse(data);
            alert(kontol);
          });
      }

      if (is_valid) {
        $('#next3_btn_asli').click();
      }
    });

    // tombol next 4
    $('#next4_btn').click(function() {
      // alert('coba');
      var is_valid = true;

      if ($('#n6').val() == "" || $('#n7').val() == "" || $('#n8').val() == "" || $('#n9').val() == "" || $('#n10').val() == "" || $('#n11').val() == "" || $('#n12').val() == "" || $('#n13').val() == "") {
        is_valid = false;
        if ($('#n6').val() == "") {
          alert('no 6 belum diisi');
        }else if ($('#n7').val() == "") {
          alert('no 7 belum diisi');
        }else if ($('#n8').val() == "") {
          alert('no 8 belum diisi');
        }else if ($('#n9').val() == "") {
          alert('no 9 belum diisi');
        }else if ($('#n10').val() == "") {
          alert('no 10 belum diisi');
        }else if ($('#n11').val() == "") {
          alert('no 11 belum diisi');
        }else if ($('#n12').val() == "") {
          alert('no 12 belum diisi');
        }else if ($('#n13').val() == "") {
          alert('no 13 belum diisi');
        }
      } else if ($('#n6').val() > 4 || $('#n6').val() < 0 || $('#n7').val() > 4 || $('#n7').val() < 0 || $('#n8').val() > 4 || $('#n8').val() < 0 || $('#n9').val() > 4 || $('#n9').val() < 0 || $('#n10').val() > 4 || $('#n10').val() < 0 || $('#n11').val() > 4 || $('#n11').val() < 0 || $('#n12').val() > 4 || $('#n12').val() < 0 || $('#n13').val() > 4 || $('#n13').val() < 0) {
        is_valid = false;
        if ($('#n6').val() > 4 || $('#n6').val() < 0) {
          alert("No 6 Nilai Harus 0-4");
        }else if ($('#n7').val() > 4 || $('#n7').val() < 0) {
          alert("No 7 Nilai Harus 0-4");
        }else if ($('#n8').val() > 4 || $('#n8').val() < 0) {
          alert("No 8 Nilai Harus 0-4");
        }else if ($('#n9').val() > 4 || $('#n9').val() < 0) {
          alert("No 9 Nilai Harus 0-4");
        }else if ($('#n10').val() > 4 || $('#n10').val() < 0) {
          alert("No 10 Nilai Harus 0-4");
        }else if ($('#n11').val() > 4 || $('#n11').val() < 0) {
          alert("No 11 Nilai Harus 0-4");
        }else if ($('#n12').val() > 4 || $('#n12').val() < 0) {
          alert("No 12 Nilai Harus 0-4");
        }else if ($('#n13').val() > 4 || $('#n13').val() < 0) {
          alert("No 13 Nilai Harus 0-4");
        }
        
      } else {
        const data_form = {
          '_token': '{{ csrf_token() }}',
          'f6': $('#f6').val(),
          'n6': $('#n6').val(),
          'f7': $('#f7').val(),
          'n7': $('#n7').val(),
          'f8': $('#f8').val(),
          'n8': $('#n8').val(),
          'f9': $('#f9').val(),
          'n9': $('#n9').val(),
          'f10': $('#f10').val(),
          'n10': $('#n10').val(),
          'f11': $('#f11').val(),
          'n11': $('#n11').val(),
          'f12': $('#f12').val(),
          'n12': $('#n12').val(),
          'f13': $('#f13').val(),
          'n13': $('#n13').val(),
        };
        $.ajax({
            type: "POST",
            url: '/multi/autosave4',
            data: data_form,
          })
          .done(function(data) {
            const kontol = JSON.parse(data);
            alert(kontol);
          });
      }

      if (is_valid) {
        $('#next4_btn_asli').click();
      }
    });

    // tombol next 5
    $('#next5_btn').click(function() {
      // alert('coba');
      var is_valid = true;

      if ($('#n14').val() == "" || $('#n15').val() == "" || $('#n16').val() == "") {
        is_valid = false;
        if ($('#n14').val() == "") {
          alert('no 14 belum diisi');
        }else if ($('#n15').val() == "") {
          alert('no 15 belum diisi');
        }else if ($('#n16').val() == "") {
          alert('no 16 belum diisi');
        }
      } else if ($('#n14').val() > 4 || $('#n14').val() < 0 || $('#n15').val() > 4 || $('#n15').val() < 0 || $('#n16').val() > 4 || $('#n16').val() < 0) {
        is_valid = false;
        if ($('#n14').val() > 4 || $('#n14').val() < 0) {
          alert("No 14 Nilai Harus 0-4");
        }else if ($('#n15').val() > 4 || $('#n15').val() < 0) {
          alert("No 15 Nilai Harus 0-4");
        }else if ($('#n16').val() > 4 || $('#n16').val() < 0) {
          alert("No 16 Nilai Harus 0-4");
        }
        
      } else {
        const data_form = {
          '_token': '{{ csrf_token() }}',
          'f14': $('#f14').val(),
          'n14': $('#n14').val(),
          'f15': $('#f15').val(),
          'n15': $('#n15').val(),
          'f16': $('#f16').val(),
          'n16': $('#n16').val(),
        };
        $.ajax({
            type: "POST",
            url: '/multi/autosave5',
            data: data_form,
          })
          .done(function(data) {
            const kontol = JSON.parse(data);
            alert(kontol);
          });
      }

      if (is_valid) {
        $('#next5_btn_asli').click();
      }
    });
    // tombol next 6
    $('#next6_btn').click(function() {
      // alert('coba');
      var is_valid = true;
      if ($('#n17').val() == "" || $('#n18').val() == "" || $('#n19').val() == "" || $('#n20').val() == "" || $('#n21').val() == "" || $('#n22').val() == "" || $('#n23').val() == "" || $('#n24').val() == "" || $('#n25').val() == "" || $('#n26').val() == "" || $('#n27').val() == "" || $('#n28').val() == "" || $('#n29').val() == "" || $('#n30').val() == "" || $('#n31').val() == "") {
        is_valid = false;
        if ($('#n17').val() == "") {
          alert('no 17 belum diisi');
        }else if ($('#n18').val() == "") {
          alert('no 18 belum diisi');
        }else if ($('#n19').val() == "") {
          alert('no 19 belum diisi');
        }else if ($('#n20').val() == "") {
          alert('no 20 belum diisi');
        }else if ($('#n21').val() == "") {
          alert('no 21 belum diisi');
        }else if ($('#n22').val() == "") {
          alert('no 22 belum diisi');
        }else if ($('#n23').val() == "") {
          alert('no 23 belum diisi');
        }else if ($('#n24').val() == "") {
          alert('no 24 belum diisi');
        }else if ($('#n25').val() == "") {
          alert('no 25 belum diisi');
        }else if ($('#n26').val() == "") {
          alert('no 26 belum diisi');
        }else if ($('#n27').val() == "") {
          alert('no 27 belum diisi');
        }else if ($('#n28').val() == "") {
          alert('no 28 belum diisi');
        }else if ($('#n29').val() == "") {
          alert('no 29 belum diisi');
        }else if ($('#n30').val() == "") {
          alert('no 30 belum diisi');
        }else if ($('#n31').val() == "") {
          alert('no 24 belum diisi');
        }
        
      } else if ($('#n17').val() > 4 || $('#n17').val() < 0 || $('#n18').val() > 4 || $('#n18').val() < 0 || $('#n19').val() > 4 || $('#n19').val() < 0 || $('#n20').val() > 4 || $('#n20').val() < 0 || $('#n21').val() > 4 || $('#n21').val() < 0 || $('#n22').val() > 4 || $('#n22').val() < 0 || $('#n23').val() > 4 || $('#n23').val() < 0 || $('#n24').val() > 4 || $('#n24').val() < 0 || $('#n25').val() > 4 || $('#n25').val() < 0 || $('#n26').val() > 4 || $('#n26').val() < 0 || $('#n27').val() > 4 || $('#n27').val() < 0 || $('#n28').val() > 4 || $('#n28').val() < 0 || $('#n29').val() > 4 || $('#n29').val() < 0 || $('#n30').val() > 4 || $('#n30').val() < 0 || $('#n31').val() > 4 || $('#n31').val() < 0) {
        is_valid = false;
        if ($('#n17').val() > 4 || $('#n17').val() < 0) {
          alert("No 17 Nilai Harus 0-4");
        }else if ($('#n18').val() > 4 || $('#n18').val() < 0) {
          alert("No 18 Nilai Harus 0-4");
        }else if ($('#n19').val() > 4 || $('#n19').val() < 0) {
          alert("No 19 Nilai Harus 0-4");
        }else if ($('#n20').val() > 4 || $('#n20').val() < 0) {
          alert("No 20 Nilai Harus 0-4");
        }else if ($('#n21').val() > 4 || $('#n21').val() < 0) {
          alert("No 21 Nilai Harus 0-4");
        }else if ($('#n22').val() > 4 || $('#n22').val() < 0) {
          alert("No 22 Nilai Harus 0-4");
        }else if ($('#n23').val() > 4 || $('#n23').val() < 0) {
          alert("No 23 Nilai Harus 0-4");
        }else if ($('#n24').val() > 4 || $('#n24').val() < 0) {
          alert("No 24 Nilai Harus 0-4");
        }else if ($('#n25').val() > 4 || $('#n25').val() < 0) {
          alert("No 25 Nilai Harus 0-4");
        }else if ($('#n26').val() > 4 || $('#n26').val() < 0) {
          alert("No 26 Nilai Harus 0-4");
        }else if ($('#n27').val() > 4 || $('#n27').val() < 0) {
          alert("No 27 Nilai Harus 0-4");
        }else if ($('#n28').val() > 4 || $('#n28').val() < 0) {
          alert("No 28 Nilai Harus 0-4");
        }else if ($('#n29').val() > 4 || $('#n29').val() < 0) {
          alert("No 29 Nilai Harus 0-4");
        }else if ($('#n30').val() > 4 || $('#n30').val() < 0) {
          alert("No 30 Nilai Harus 0-4");
        }else if ($('#n31').val() > 4 || $('#n31').val() < 0) {
          alert("No 31 Nilai Harus 0-4");
        }
        
      } else {
        const data_form = {
          '_token': '{{ csrf_token() }}',
          'f17': $('#f17').val(),
          'n17': $('#n17').val(),
          'f18': $('#f18').val(),
          'n18': $('#n18').val(),
          'f19': $('#f19').val(),
          'n19': $('#n19').val(),
          'f20': $('#f20').val(),
          'n20': $('#n20').val(),
          'f21': $('#f21').val(),
          'n21': $('#n21').val(),
          'f22': $('#f22').val(),
          'n22': $('#n22').val(),
          'f23': $('#f23').val(),
          'n23': $('#n23').val(),
          'f24': $('#f24').val(),
          'n24': $('#n24').val(),
          'f25': $('#f25').val(),
          'n25': $('#n25').val(),
          'f26': $('#f26').val(),
          'n26': $('#n26').val(),
          'f27': $('#f27').val(),
          'n27': $('#n27').val(),
          'f28': $('#f28').val(),
          'n28': $('#n28').val(),
          'f29': $('#f29').val(),
          'n29': $('#n29').val(),
          'f30': $('#f30').val(),
          'n30': $('#n30').val(),
          'f31': $('#f31').val(),
          'n31': $('#n31').val(),
        };
        $.ajax({
            type: "POST",
            url: '/multi/autosave6',
            data: data_form,
          })
          .done(function(data) {
            const kontol = JSON.parse(data);
            alert(kontol);
          });
      }
      if (is_valid) {
        $('#next6_btn_asli').click();
      }
    });

    $('#next7_btn').click(function() {
      // alert('coba');
      var is_valid = true;

      if ($('#n32').val() == "" || $('#n33').val() == "" || $('#n34').val() == "" || $('#n35').val() == "" || $('#n36').val() == "" || $('#n37').val() == "") {
        is_valid = false;
        if ($('#n32').val() == "") {
          alert('no 32 belum diisi');
        }else if ($('#n33').val() == "") {
          alert('no 33 belum diisi');
        }else if ($('#n34').val() == "") {
          alert('no 34 belum diisi');
        }else if ($('#n35').val() == "") {
          alert('no 35 belum diisi');
        }else if ($('#n36').val() == "") {
          alert('no 36 belum diisi');
        }else if ($('#n37').val() == "") {
          alert('no 37 belum diisi');
        }

      } else if ($('#n32').val() > 4 || $('#n32').val() < 0 || $('#n33').val() > 4 || $('#n33').val() < 0 || $('#n34').val() > 4 || $('#n34').val() < 0 || $('#n35').val() > 4 || $('#n35').val() < 0 || $('#n36').val() > 4 || $('#n36').val() < 0 || $('#n37').val() > 4 || $('#n37').val() < 0) {
        is_valid = false;
        if ($('#n32').val() > 4 || $('#n32').val() < 0) {
          alert("No 32 Nilai Harus 0-4");
        }else if ($('#n33').val() > 4 || $('#n33').val() < 0) {
          alert("No 33 Nilai Harus 0-4");
        }else if ($('#n34').val() > 4 || $('#n34').val() < 0) {
          alert("No 34 Nilai Harus 0-4");
        }else if ($('#n35').val() > 4 || $('#n35').val() < 0) {
          alert("No 35 Nilai Harus 0-4");
        }else if ($('#n36').val() > 4 || $('#n36').val() < 0) {
          alert("No 36 Nilai Harus 0-4");
        }else if ($('#n37').val() > 4 || $('#n37').val() < 0) {
          alert("No 37 Nilai Harus 0-4");
        }
        
      } else {
        const data_form = {
          '_token': '{{ csrf_token() }}',
          'f32': $('#f32').val(),
          'n32': $('#n32').val(),
          'f33': $('#f33').val(),
          'n33': $('#n33').val(),
          'f34': $('#f34').val(),
          'n34': $('#n34').val(),
          'f35': $('#f35').val(),
          'n35': $('#n35').val(),
          'f36': $('#f36').val(),
          'n36': $('#n36').val(),
          'f37': $('#f37').val(),
          'n37': $('#n37').val(),
        };
        $.ajax({
            type: "POST",
            url: '/multi/autosave7',
            data: data_form,
          })
          .done(function(data) {
            const kontol = JSON.parse(data);
            alert(kontol);
          });
      }



      if (is_valid) {
        $('#next7_btn_asli').click();
      }
    });

    $('#next8_btn').click(function() {
      // alert('coba');
      var is_valid = true;


      if ($('#n38').val() == "" || $('#n39').val() == "" || $('#n40').val() == "" || $('#n41').val() == "" || $('#n42').val() == "" || $('#n43').val() == "" || $('#n44').val() == "" || $('#n45').val() == "" || $('#n46').val() == "" || $('#n47').val() == "") {
        is_valid = false;
        if ($('#n38').val() == "") {
          alert('no 38 belum diisi');
        }else if ($('#n39').val() == "") {
          alert('no 39 belum diisi');
        }else if ($('#n40').val() == "") {
          alert('no 40 belum diisi');
        }else if ($('#n41').val() == "") {
          alert('no 41 belum diisi');
        }else if ($('#n22').val() == "") {
          alert('no 42 belum diisi');
        }else if ($('#n43').val() == "") {
          alert('no 43 belum diisi');
        }else if ($('#n44').val() == "") {
          alert('no 44 belum diisi');
        }else if ($('#n45').val() == "") {
          alert('no 45 belum diisi');
        }else if ($('#n46').val() == "") {
          alert('no 46 belum diisi');
        }else if ($('#n47').val() == "") {
          alert('no 47 belum diisi');
        }
        
      } else if ($('#n38').val() > 4 || $('#n38').val() < 0 || $('#n39').val() > 4 || $('#n39').val() < 0 || $('#n40').val() > 4 || $('#n40').val() < 0 || $('#n41').val() > 4 || $('#n41').val() < 0 || $('#n42').val() > 4 || $('#n42').val() < 0 || $('#n43').val() > 4 || $('#n43').val() < 0 || $('#n44').val() > 4 || $('#n44').val() < 0 || $('#45').val() > 4 || $('#n45').val() < 0 || $('#n46').val() > 4 || $('#n46').val() < 0 || $('#n47').val() > 4 || $('#n47').val() < 0) {
        is_valid = false;
        if ($('#n38').val() > 4 || $('#n38').val() < 0) {
          alert("No 38 Nilai Harus 0-4");
        }else if ($('#n39').val() > 4 || $('#n39').val() < 0) {
          alert("No 39 Nilai Harus 0-4");
        }else if ($('#n40').val() > 4 || $('#n40').val() < 0) {
          alert("No 40 Nilai Harus 0-4");
        }else if ($('#n41').val() > 4 || $('#n41').val() < 0) {
          alert("No 41 Nilai Harus 0-4");
        }else if ($('#n42').val() > 4 || $('#n42').val() < 0) {
          alert("No 42 Nilai Harus 0-4");
        }else if ($('#n43').val() > 4 || $('#n43').val() < 0) {
          alert("No 43 Nilai Harus 0-4");
        }else if ($('#n44').val() > 4 || $('#n44').val() < 0) {
          alert("No 44 Nilai Harus 0-4");
        }else if ($('#n45').val() > 4 || $('#n45').val() < 0) {
          alert("No 45 Nilai Harus 0-4");
        }else if ($('#n46').val() > 4 || $('#n46').val() < 0) {
          alert("No 46 Nilai Harus 0-4");
        }else if ($('#n47').val() > 4 || $('#n47').val() < 0) {
          alert("No 47 Nilai Harus 0-4");
        }
        
      } else {
        const data_form = {
          '_token': '{{ csrf_token() }}',
          'f38': $('#f38').val(),
          'n38': $('#n38').val(),
          'f39': $('#f39').val(),
          'n39': $('#n39').val(),
          'f40': $('#f40').val(),
          'n40': $('#n40').val(),
          'f41': $('#f41').val(),
          'n41': $('#n41').val(),
          'f42': $('#f42').val(),
          'n42': $('#n42').val(),
          'f43': $('#f43').val(),
          'n43': $('#n43').val(),
          'f44': $('#f44').val(),
          'n44': $('#n44').val(),
          'f45': $('#f45').val(),
          'n45': $('#n45').val(),
          'f46': $('#f46').val(),
          'n46': $('#n46').val(),
          'f47': $('#f47').val(),
          'n47': $('#n47').val(),
        };
        $.ajax({
            type: "POST",
            url: '/multi/autosave8',
            data: data_form,
          })
          .done(function(data) {
            const kontol = JSON.parse(data);
            alert(kontol);
          });
      }


      if (is_valid) {
        $('#next8_btn_asli').click();
      }
    });

    $('#next9_btn').click(function() {
      // alert('coba');
      var is_valid = true;


      if ($('#n48').val() == "" || $('#n49').val() == "") {
        is_valid = false;
        if ($('#n48').val() == "") {
          alert('no 48 belum diisi');
        }else if ($('#n49').val() == "") {
          alert('no 49 belum diisi');
        }
      } else if ($('#n48').val() > 4 || $('#n48').val() < 0 || $('#n49').val() > 4 || $('#n49').val() < 0) {
        is_valid = false;
        if ($('#n48').val() > 4 || $('#n48').val() < 0) {
          alert("No 48 Nilai Harus 0-4");
        }else if ($('#n49').val() > 4 || $('#n49').val() < 0) {
          alert("No 49 Nilai Harus 0-4");
        }
        
      } else {
        const data_form = {
          '_token': '{{ csrf_token() }}',
          'f48': $('#f48').val(),
          'n48': $('#n48').val(),
          'f49': $('#f49').val(),
          'n49': $('#n49').val(),
        };
        $.ajax({
            type: "POST",
            url: '/multi/autosave9',
            data: data_form,
          })
          .done(function(data) {
            const kontol = JSON.parse(data);
            alert(kontol);
          });
      }

      if (is_valid) {
        $('#next9_btn_asli').click();
      }
    });

    $('#next10_btn').click(function() {
      // alert('coba');
      var is_valid = true;


      if ($('#n50').val() == "" || $('#n51').val() == "") {
        is_valid = false;
        if ($('#n50').val() == "") {
          alert('no 50 belum diisi');
        }else if ($('#n51').val() == "") {
          alert('no 51 belum diisi');
        }
      } else if ($('#n50').val() > 4 || $('#n50').val() < 0 || $('#n51').val() > 4 || $('#n51').val() < 0) {
        is_valid = false;
        if ($('#n50').val() > 4 || $('#n50').val() < 0) {
          alert("No 50 Nilai Harus 0-4");
        }else if ($('#n51').val() > 4 || $('#n51').val() < 0) {
          alert("No 51 Nilai Harus 0-4");
        }
        
      } else {
        const data_form = {
          '_token': '{{ csrf_token() }}',
          'f50': $('#f50').val(),
          'n50': $('#n50').val(),
          'f51': $('#f51').val(),
          'n51': $('#n51').val(),
        };
        $.ajax({
            type: "POST",
            url: '/multi/autosave10',
            data: data_form,
          })
          .done(function(data) {
            const kontol = JSON.parse(data);
            alert(kontol);
          });
      }

      if (is_valid) {
        $('#next10_btn_asli').click();
      }
    });

    // tombol next 11
    $('#next11_btn').click(function() {
      // alert('coba');
      var is_valid = true;
      if ($('#n52').val() == "" || $('#n53').val() == "" || $('#n54').val() == "" || $('#n55').val() == "" || $('#n56').val() == "" || $('#n57').val() == "" || $('#n58').val() == "" || $('#n59').val() == "" || $('#n60').val() == "" || $('#n61').val() == "" || $('#n62').val() == "" || $('#n63').val() == "" || $('#n64').val() == "" || $('#n65').val() == "") {
        is_valid = false;
        if ($('#n52').val() == "") {
          alert('no 52 belum diisi');
        }else if ($('#n53').val() == "") {
          alert('no 53 belum diisi');
        }else if ($('#n54').val() == "") {
          alert('no 54 belum diisi');
        }else if ($('#n55').val() == "") {
          alert('no 55 belum diisi');
        }else if ($('#n56').val() == "") {
          alert('no 56 belum diisi');
        }else if ($('#n57').val() == "") {
          alert('no 57 belum diisi');
        }else if ($('#n58').val() == "") {
          alert('no 58 belum diisi');
        }else if ($('#n59').val() == "") {
          alert('no 59 belum diisi');
        }else if ($('#n60').val() == "") {
          alert('no 60 belum diisi');
        }else if ($('#n61').val() == "") {
          alert('no 61 belum diisi');
        }else if ($('#n62').val() == "") {
          alert('no 62 belum diisi');
        }else if ($('#n63').val() == "") {
          alert('no 63 belum diisi');
        }else if ($('#n64').val() == "") {
          alert('no 64 belum diisi');
        }else if ($('#n65').val() == "") {
          alert('no 65 belum diisi');
        }
        
      } else if ($('#n52').val() > 4 || $('#n52').val() < 0 || $('#n53').val() > 4 || $('#n53').val() < 0 || $('#n54').val() > 4 || $('#n54').val() < 0 || $('#n55').val() > 4 || $('#n55').val() < 0 || $('#n56').val() > 4 || $('#n56').val() < 0 || $('#n57').val() > 4 || $('#n57').val() < 0 || $('#n58').val() > 4 || $('#n58').val() < 0 || $('#n59').val() > 4 || $('#n59').val() < 0 || $('#n60').val() > 4 || $('#n60').val() < 0 || $('#n61').val() > 4 || $('#n61').val() < 0 || $('#n62').val() > 4 || $('#n62').val() < 0 || $('#n63').val() > 4 || $('#n63').val() < 0 || $('#n64').val() > 4 || $('#n64').val() < 0 || $('#n65').val() > 4 || $('#n65').val() < 0) {
        is_valid = false;
        if ($('#n52').val() > 4 || $('#n52').val() < 0) {
          alert("No 52 Nilai Harus 0-4");
        }else if ($('#n53').val() > 4 || $('#n53').val() < 0) {
          alert("No 53 Nilai Harus 0-4");
        }else if ($('#n54').val() > 4 || $('#n54').val() < 0) {
          alert("No 54 Nilai Harus 0-4");
        }else if ($('#n55').val() > 4 || $('#n55').val() < 0) {
          alert("No 55 Nilai Harus 0-4");
        }else if ($('#n56').val() > 4 || $('#n56').val() < 0) {
          alert("No 56 Nilai Harus 0-4");
        }else if ($('#n57').val() > 4 || $('#n57').val() < 0) {
          alert("No 57 Nilai Harus 0-4");
        }else if ($('#n58').val() > 4 || $('#n58').val() < 0) {
          alert("No 58 Nilai Harus 0-4");
        }else if ($('#n59').val() > 4 || $('#n59').val() < 0) {
          alert("No 59 Nilai Harus 0-4");
        }else if ($('#n60').val() > 4 || $('#n60').val() < 0) {
          alert("No 60 Nilai Harus 0-4");
        }else if ($('#n61').val() > 4 || $('#n61').val() < 0) {
          alert("No 61 Nilai Harus 0-4");
        }else if ($('#n62').val() > 4 || $('#n62').val() < 0) {
          alert("No 62 Nilai Harus 0-4");
        }else if ($('#n63').val() > 4 || $('#n63').val() < 0) {
          alert("No 63 Nilai Harus 0-4");
        }else if ($('#n64').val() > 4 || $('#n64').val() < 0) {
          alert("No 64 Nilai Harus 0-4");
        }else if ($('#n65').val() > 4 || $('#n65').val() < 0) {
          alert("No 65 Nilai Harus 0-4");
        }
        
      } else {
        const data_form = {
          '_token': '{{ csrf_token() }}',
          'f52': $('#f17').val(),
          'n52': $('#n17').val(),
          'f53': $('#f18').val(),
          'n53': $('#n18').val(),
          'f54': $('#f19').val(),
          'n54': $('#n19').val(),
          'f55': $('#f20').val(),
          'n55': $('#n20').val(),
          'f56': $('#f21').val(),
          'n56': $('#n21').val(),
          'f57': $('#f22').val(),
          'n57': $('#n22').val(),
          'f58': $('#f23').val(),
          'n58': $('#n23').val(),
          'f59': $('#f24').val(),
          'n59': $('#n24').val(),
          'f60': $('#f25').val(),
          'n60': $('#n25').val(),
          'f61': $('#f26').val(),
          'n61': $('#n26').val(),
          'f62': $('#f27').val(),
          'n62': $('#n27').val(),
          'f63': $('#f28').val(),
          'n63': $('#n28').val(),
          'f64': $('#f29').val(),
          'n64': $('#n29').val(),
          'f65': $('#f30').val(),
          'n65': $('#n30').val(),
        };
        $.ajax({
            type: "POST",
            url: '/multi/autosave11',
            data: data_form,
          })
          .done(function(data) {
            const kontol = JSON.parse(data);
            alert(kontol);
          });
      }
      if (is_valid) {
        $('#next11_btn_asli').click();
      }
    });

  </script>

  <script src="js/function.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>