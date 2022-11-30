<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokumen Evaluasi Diri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

</head>

@foreach ($led as $data)
    


<body>
  {{-- <img class="mb-5 " src="E:\Kuliah\Projek PPM\WebSimulasiAkredetasiBAN-PT\public\image\logo.png" alt="" width="600" height="250"> --}}
    <ol class="mt-5" style="font-family: Arial, Helvetica, sans-serif; font-size: 11pt;  line-height: 115%" type="A">
        <li class="mt-3" style="font-weight: bold" >Kondisi Eksternal</li>
          <p style="text-align: justify;"> 
            {!! $data['a1'] !!}
          </p>
        <li class="mt-3" style="font-weight: bold">Profil Unit Pengelola Program Studi</li>
          <ol class="mt-1" type="1">
  
            <li class="mt-3" style="font-weight: bold">Sejarah Unit Pengelola Program Studi</li>
              <p style="text-align: justify;"> 
                {!! $data['b1'] !!}             
              </p>
            <li class="mt-3" style="font-weight: bold">Visi, Misi, Tujuan, Strategi, dan Tata Nilai</li>
              <p style="text-align: justify;"> 
                {!! $data['b2'] !!}               
              </p>
            <li class="mt-3" style="font-weight: bold">Organisasi dan Tata Kerja </li>
              <p style="text-align: justify;"> 
                {!! $data['b3'] !!}                              
              </p>
            <li class="mt-3" style="font-weight: bold">Mahasiswa dan Lulusan</li>
              <p style="text-align: justify;"> 
                {!! $data['b4'] !!}               
              </p>
            <li class="mt-3" style="font-weight: bold">Dosen dan Tenaga Kependidikan</li>
              <p style="text-align: justify;"> 
                {!! $data['b5'] !!}             
              </p>
            <li class="mt-3" style="font-weight: bold">Keuangan, Sarana, dan Prasarana</li>
              <p style="text-align: justify;"> 
                {!! $data['b6'] !!}              
              </p>
            <li class="mt-3" style="font-weight: bold">Sistem Penjaminan Mutu</li>
              <p style="text-align: justify;"> 
                {!! $data['b7'] !!}                
              </p>
            <li class="mt-3" style="font-weight: bold">Kinerja Unit Pengelola Program Studi</li>
              <p style="text-align: justify;"> 
                {!! $data['b8'] !!}              
              </p>
          </ol>
        <li class="mt-3" style="font-weight: bold">Kriteria</li>
        <ol class="mt-1" type="1">
  
          <li class="mt-3" style="font-weight: bold">Visi, Misi, Tujuan, dan Stra</li>
            <p style="text-align: justify;"> 
              {!! $data['c1'] !!}                       
            </p>
          <li class="mt-3" style="font-weight: bold">Tata Kelola, Tata Pamong, dan Kerjasama</li>
            <p style="text-align: justify;"> 
              {!! $data['c2'] !!}                       
            </p>
          <li class="mt-3" style="font-weight: bold">Mahasiswa</li>
            <p style="text-align: justify;"> 
              {!! $data['c3'] !!}                      
            </p>
          <li class="mt-3" style="font-weight: bold">Sumber Daya Manusia</li>
            <p style="text-align: justify;"> 
              {!! $data['c4'] !!}
            </p>
          <li class="mt-3" style="font-weight: bold">Keuangan, Sarana, dan Prasarana</li>
            <p style="text-align: justify;"> 
              {!! $data['c5'] !!}                     
            </p>
          <li class="mt-3" style="font-weight: bold">Pendidikan</li>
            <p style="text-align: justify;"> 
              {!! $data['c6'] !!}                                  
            </p>
          <li class="mt-3" style="font-weight: bold">Penelitian</li>
            <p style="text-align: justify;"> 
              {!! $data['c7'] !!}                     
            </p>
          <li class="mt-3" style="font-weight: bold">Pengabdian kepada Masyarakat</li>
            <p style="text-align: justify;"> 
              {!! $data['c8'] !!}                     
            </p>
          <li class="mt-3"  style="font-weight: bold">Luaran dan Capaian Tridharma</li>
            <p style="text-align: justify;"> 
              {!! $data['c9'] !!}                     
            </p>
        </ol>
        <li class="mt-3" style="font-weight: bold">
          ANALISIS DAN PENETAPAN PROGRAM PENGEMBANGAN UNIT
          PENGELOLA PROGRAM STUDI TERKAIT PROGRAM STUDI YANG
          DIAKREDITASI
        </li>
        <ol class="mt-1" type="1">
          <li class="mt-3" style="font-weight: bold">Analisis Capaian Kinerja</li>
            <p style="text-align: justify">
              {!! $data['d1'] !!}          
            </p>
          <li class="mt-3" style="font-weight: bold">Analisis SWOT atau Analisis Lain yang Relevan</li>
            <p style="text-align: justify">
              {!! $data['d2'] !!}         
            </p>
          <li class="mt-3" style="font-weight: bold"></li>
            <p style="text-align: justify">
              {!! $data['d3'] !!}       
            </p>
          <li class="mt-3" style="font-weight: bold">Program Keberlanjutan </li>
            <p style="text-align: justify">
              {!! $data['d4'] !!}          
            </p>
        </ol>
        <li class="mt-3" style="font-weight: bold">PENUTUP</li>
        <p style="text-align: justify">
          {!! $data['e1'] !!}      
        </p>
      </ol> 

      <script src={{ asset('ckeditor/build/ckeditor.js') }}></script>
      @endforeach
</body>
</html>

    
    





