<?php 
session_start();
?>

<!doctype html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
    <!-- css tambahan -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

    <title>Physics Expo</title>
  </head>
  <body>
    
    <!-- Bagian Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #07172e">
      <a class="navbar-brand page-scroll" href="#home"><img src="assets/img/logoNavbar.png" width="200px" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link page-scroll" href="#home">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#aboutUs">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#competition">Competition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#moreEvents">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#footer">Contact</a>
          </li>
        </ul>
      </div>
      <?php if (isset($_SESSION['login'])){ ?>
        <div class="dropdown">
          <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= $_SESSION['nama']; ?>
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="page/dashboard">Dashboard</a>
            <a class="dropdown-item" href="page/dashboard/logout.php">Logout</a>
          </div>
        </div>
      <?php } else { ?>
      <form method="post" action="login.php">
        <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
      </form>
      <?php }; ?>
    </nav>

    <!-- bagian jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="text-center">
          <img src="assets/img/logoUtama.png" class="img-fluid" alt="Logo">
          <h1 class="display-5 font-weight-bold text-white">"Understanding Physics for Future Technology"</h1>
        </div>
      </div>
    </div>

    <!-- bagian about us -->
    <section class="aboutUs" id="aboutUs">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 text-center">
          <img src="assets/img/logo1.png" class="img-fluid " alt="Physics Expo">
          </div>
          <div class="col-sm-8">
            <div class="text-center">
              <h1>About Us</h1>
              <hr>
            </div>
            <p class="text-justify">Peningkatan minat dan bakat terhadap ilmu fisika perlu diberlakukan dalam upaya mengoptimalisasi wacana berpikir secara konseptual dan terorganisasi serta meningkatkan kompetensi maupun daya saing dalam era globalisasi. Atas dasar pemikiran tersebut, Himpunan Mahasiswa Fisika (Himafi) Institut Pertanian Bogor yang bergerak dalam bidang fisika termotivasi untuk membuat kegiatan "Physics Expo 2018" sebagai langkah konkrit dalam menciptakan masyarakat yang berkarakter cendekiawan.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- bagian kompetisi -->
    <section class="competition" id="competition">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h1>Competition</h1>
            <hr>
          </div>
          <div class="col-sm-4 text-center" id="jf">
            <img src="assets/img/jf.png" alt="Jawara Fisika">
            <h2 style="color: #00eeb5">Jawara Fisika</h2>
            <p>Jawara Fisika merupakan cabang kompetisi dalam kegiatan Physics Expo (PE) 2018. Peserta dalam kompetisi ini adalah siswa/i dari Sekolah Menengah Atas sederajat pada tingkat nasional. Kompetisi ini memperlombakan materi dan konsep-konsep fisika secara sederhana.</p>
            <a href="page/more/jf.php">
              <button type="button" class="btn btn-info">Read More</button>
            </a>
          </div>
          <div class="col-sm-4 text-center" id="paper">
            <img src="assets/img/paper.png" alt="Paper Competition">
            <h2 style="color: #00eeb5">Paper Competition</h2>
            <p>Paper Competition merupakan rangkaian dari Physics Expo 2018 yang berupa kompetisi karya tulis, prototype, dan poster antar siswa/i SMA sederajat seluruh Indonesia.</p>
            <a href="page/more/paper.php">
              <button type="button" class="btn btn-info">Read More</button>
            </a>
          </div>
          <div class="col-sm-4 text-center" id="robotik">
            <img src="assets/img/robotik.png" alt="Robotic Challenge">
            <h2 style="color: #00eeb5">Robotic Challenge</h2>
            <p>Robotic Challenge memperkenalkan pengaplikasian fisika di bidang robotika kepada siswa/i SMA sederajat serta menguji kemampuan mereka dalam bekerja sama serta kemampuan robotika melalui perlombaan.</p>
            <a href="page/more/robotic.php">
              <button type="button" class="btn btn-info">Read More</button>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- bagian more events -->
    <section class="moreEvents" id="moreEvents">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h1>More Events</h1>
            <hr>
          </div>
          <div class="col-sm-3 text-center" id="phystalk">
            <img src="assets/img/phystalk.png" alt="Physics Talk">
            <h2 style="color: #fd3e4e">Physics Talk</h2>
            <p>Merupakan acara seminar mengenai teknologi nuklir untuk ketahanan pangan. Melalui Physics Talk ini diharapkan peserta mengenal penerapan fisika dalam bidang pertanian.</p>
            <a href="page/more/pt.php">
              <button type="button" class="btn btn-info">Read More</button>
            </a>
          </div>
          <div class="col-sm-3 text-center" id="workshop">
            <img src="assets/img/workshop.png" alt="Workshop">
            <h2 style="color: #fd3e4e">Workshop</h2>
            <p>Workshop merupakan pemaparan materi dan pelatihan di bidang keilmuan fisika dengan bertemakan teknologi dan mengusung bidang geofisika dengan materi Workshop "Microseismic Processing For Mitigation Or Geothermal Characterization".</p>
            <a href="page/more/workshop.php">
              <button type="button" class="btn btn-info">Read More</button>
            </a>
          </div>
          <div class="col-sm-3 text-center" id="physcamp">
            <img src="assets/img/physcamp.png" alt="Physics Camp">
            <h2 style="color: #fd3e4e">Physics Camp</h2>
            <p>Kegiatan ini ditujukan kepada siswa/i SMA yang berupa kuliah sehari di Departemen Fisika. Dimana para siswa akan diberi kuliah oleh dosen-dosen fisika dan demo praktikum fisika.</p>
            <a href="page/more/pc.php">
              <button type="button" class="btn btn-info">Read More</button>
            </a>
          </div>
          <div class="col-sm-3 text-center" id="techexpo">
            <img src="assets/img/techexpo.png" alt="Techno Expo">
            <h2 style="color: #fd3e4e">Techno Expo</h2>
            <p>Memperagakan inovasi peralatan yang telah dibuat oleh mahasiswa Departemen Fisika IPB, LIPI, BATAN, dan LAPAN kepada masyarakat umum.</p>
            <a href="page/more/expo.php">
              <button type="button" class="btn btn-info">Read More</button>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- bagian galeri -->
    <section class="gallery" id="gallery">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>Gallery</h1>
            <hr>
          </div>

          <div class="container-fluid">
            <div class="container-fluid gallery-container">
              <div class="tz-gallery">              
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <div class="card">
                      <a class="lightbox" href="assets/img/1.JPG">
                      <img src="assets/img/1.JPG" alt="Galeri" class="card-img-top">
                      </a>
                    </div>
                  </div>
               
                  <div class="col-sm-3">
                    <div class="card">
                      <a class="lightbox" href="assets/img/2.JPG">
                      <img src="assets/img/2.JPG" alt="Galeri" class="card-img-top">
                      </a>
                    </div>
                  </div>
               
                  <div class="col-sm-3">
                    <div class="card">
                      <a class="lightbox" href="assets/img/3.JPG">
                      <img src="assets/img/3.JPG" alt="Galeri" class="card-img-top">
                      </a>
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="card">
                      <a class="lightbox" href="assets/img/4.JPG">
                      <img src="assets/img/4.JPG" alt="Galeri" class="card-img-top">
                      </a>
                    </div>
                  </div> 
                </div>

                <div class="row"> 
                  <div class="col-sm-3">
                    <div class="card">
                      <a class="lightbox" href="assets/img/5.JPG">
                      <img src="assets/img/5.JPG" alt="Galeri" class="card-img-top">
                      </a>
                    </div>
                  </div>
                   
                  <div class="col-sm-3">
                    <div class="card">
                      <a class="lightbox" href="assets/img/6.JPG">
                      <img src="assets/img/6.JPG" alt="Galeri" class="card-img-top">
                      </a>
                    </div>
                  </div>
                   
                  <div class="col-sm-3">
                    <div class="card">
                      <a class="lightbox" href="assets/img/7.JPG">
                      <img src="assets/img/7.JPG" alt="Galeri" class="card-img-top">
                      </a>
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="card">
                      <a class="lightbox" href="assets/img/8.JPG">
                      <img src="assets/img/8.JPG" alt="Galeri" class="card-img-top">
                      </a>
                    </div>
                  </div>                     
                </div> 
                
              </div>              
            </div>             
          </div>
        </div>
      </div>
    </section>

    <!-- bagian sponsor & medpart -->
    <section class="sponsor" id="sponsor">
      <div class="container-fluid">
        <div class="row">
          <!-- <div class="col-sm-6 text-center">
            <h2>Sponsor</h2>
            <hr>
          </div> -->

          <div class="col-sm-3">
          </div>

          <div class="col-sm-6 text-center" id="medpart">
            <h2>Media Partner</h2>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                <img src="assets/img/ihamafi.png" alt="Ihamafi">
                <img src="assets/img/eb.png" alt="EventBanget">
                <img src="assets/img/olimpiade.png" alt="InfoOlimpiade" style="margin-top: 10px">
              </div>
              <div class="col-sm-12">
                <img src="assets/img/anakkuliah.jpg" alt="AnakKuliah">
                <img src="assets/img/ruangevent.png" alt="RuangEvent" style="margin-top: 10px">
                <img src="assets/img/infolomba.png" alt="InfoLomba">
              </div>
              <div class="col-sm-12">
                <img src="assets/img/inspirator.jpg" alt="SahabatInspiratorIndonesia" style="margin-top: 30px">
                <img src="assets/img/putih.png" alt="Campuspedia" style="margin-top: 30px">
                <img src="assets/img/physicsfun.jpg" alt="PhysicsFun">
              </div>
            </div>
          </div>

          <div class="col-sm-3">
          </div>
        </div>
      </div>
    </section>

    <!-- bagian footer -->
    <section class="footer" id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <img src="assets/img/ipb.png" alt="">
            <img src="assets/img/himafi.png" alt="">
            <img src="assets/img/Quark.png" alt="">
            <p style="font-weight: bold;">HIMPUNAN MAHASISWA FISIKA <br>DEPARTEMEN FISIKA <br>FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM <br>INSTITUT PERTANIAN BOGOR</p>
          </div>
          
          <div class="col-md-4" id="kontak">
            <h4>Contact</h4>
            <p>E-mail : physicsexpo@gmail.com <br>
            Narahubung : 0895363777335 (Nurdiansyah) <br>
            Instagram : @physicsexpo <br>
            Line : @himafipb <br></p>

            <h4>Address</h4>
            <p>Gedung Sekretariat Student Centre FMIPA <br>Jalan Meranti Kampus IPB <br>Kec. Dramaga, Kab. Bogor 16680</p>  
          </div>

        </div>
      </div>
    </section>

    <!-- bagian copyright -->
    <section class="copyright" id="copyright">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center" style="background-color: #040d1a; color: white;">
            <p>Copyright &copy; 2018 Physics Expo. All rights reserved</p>
          </div>
        </div>
      </div>
    </section>

    <!-- script -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
    baguetteBox.run('.tz-gallery');
    </script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    
    <script src="assets/js/script.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122451595-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-122451595-1');
    </script>

  </body>
</html>