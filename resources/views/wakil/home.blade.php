<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Home</title>
<!--
DREAM PULSE
https://templatemo.com/tm-536-dream-pulse
-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">
    <link rel="stylesheet" href="homess/css/all.min.css">
    <link rel="stylesheet" href="homess/css/bootstrap.min.css">
    <link rel="stylesheet" href="homess/slick/slick.css">    
    <link rel="stylesheet" href="homess/slick/slick-theme.css">    
    <link rel="stylesheet" href="homess/css/magnific-popup.css">
    <link rel="stylesheet" href="homess/css/templatemo-dream-pulse.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Web Simulasi Akredetasi Standart BAN-PT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home-uups"><i class="bi bi-house-fill"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pengajuan"><i class="bi bi-people"></i> Daftar Pegajuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/laporan-evaluasi-diri"><i class="bi bi-people"></i>LED</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-forward-fill"></i> Welcome, Wakil Prodi
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                    <a href="/profile3">
                      <button type="submit" class="dropdown-item"><i class="bi bi-person-square"></i> Profile</button>
                    </a>
                </li>
                <li><form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
                </form></li>
                </ul> 
            </li>
        </ul>
      </div>
    </div>
</nav>
  
  <body>
    <main>
      <div class="row">        
          
          <main role="main" class="ml-sm-auto col-12">
            <div
              class="parallax-window"
              data-parallax="scroll"
              data-image-src="homess/img/dream-pulse-header.jpg">
              <div class="tm-section-wrap">
                <section id="intro" class="tm-section">
                    <div class="tm-bg-white-transparent tm-intro">
                        <h2 class="tm-section-title mb-5 text-uppercase tm-color-primary">Web Simulasi Akredetasi</h2>
                        <p class="tm-color-gray">
                          <b> Web ini berfungsi untuk mensimulasikan proses Akredetasi
                          sebelum melakukan penganjuan Akredetasi ke BAN-PT</b>
                        </p>
                        <p class="mb-0 tm-color-gray">
                          <b>BAN-PT adalan lembaga yang bertugas memberikan nilai akredetasi pada suatu universitas dan prodi.</b>
                        </p>
                    </div>              
                </section>
            </div>            
          </div>
        </main>        
      </div>
    </div>
    <script src="homess/js/jquery.min.js"></script>
    <script src="homess/js/jquery.singlePageNav.min.js"></script>
    <script src="homess/js/parallax.min.js"></script>
    <script src="homess/slick/slick.min.js"></script>
    <script src="homess/js/jquery.magnific-popup.min.js"></script>
    <script src="homess/js/templatemo-scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>



</html>