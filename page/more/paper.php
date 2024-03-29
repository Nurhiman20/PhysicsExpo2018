<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
    <!-- css tambahan -->
    <link rel="stylesheet" href="assets/css/style.css">

	<title>Paper Competition - PE2018</title>
</head>
<body>
	
	<!-- Bagian Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand page-scroll" href="/index.php"><img src="assets/img/logoNavbar.png" width="200px" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link page-scroll" href="/index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="/index.php#aboutUs">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="/index.php#competition">Competition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="/index.php#moreEvents">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="/index.php#gallery">Gallery</a>
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
            <a class="dropdown-item" href="/page/dashboard">Dashboard</a>
            <a class="dropdown-item" href="/page/dashboard/logout.php">Logout</a>
          </div>
        </div>
      <?php } else { ?>
      <form method="post" action="/login.php">
        <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
      </form>
      <?php }; ?>
    </nav>

    <div class="jumbotron jumbotron-fluid">
	  <div class="container" id="banner">
	    <h1>Paper Competition</h1>
	  </div>
	</div>

	<section class="bukupandu" id="bukupandu">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<img src="assets/img/paper.png" alt="Logo Robotic" class="gambar">
				</div>
				<div class="col-sm-6">
					<div class="deskripsi">
						<p>Paper Challenge 2018 adalah lomba dengan sistem kompetisi seleksi karya ilmiah, berupa tim yang terdiri atas 3 orang siswa. Karya ilmiah yang masuk akan diseleksi dan sebanyak 15 tim yang akan maju ke babak final berupa presentasi karya ilmiah dan poster saat pelaksanaan PE 2018. Kegiatan Paper Challenge dilaksanakan selama dua hari, yaitu pada tanggal 15 dan 16 September 2018. Hari pertama pelaksanaan, 15 tim terpilih wajib mengikuti seminar mengenai tema kegiatan dan keilmuan fisika dan turunannya yang diselenggarakan oleh panitia  Paper Challenge.  Selanjutnya,  hari  kedua,  peserta  mempresentasikan  karyanya sesuai dengan jadwal yang telah ditentukan. Keterlambatan kehadiran peserta saat presentasi akan dikenakan sanksi oleh panitia.</p>
						<a href="http://physicsexpo.web.id/page/more/assets/Panduan_Kegiatan_Physics_Expo_2018.pdf"><button class="btn btn-primary">Download Buku Panduan</button></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="informasi" id="informasi">
		<div class="container">
			<div class="row">
				<div class="col-sm-6" id="timeline">
					<h1 class="text-center judulTimeline">TIMELINE</h1>
					<img src="" alt="" class="gambarTimeline">
				</div>
				<div class="col-sm-6 text-center juara" id="juara">
					<div class="col-sm-12 hadiah">
						<img src="assets/img/juara.png" alt="juara" style="width: 80px;">
						<h2>Juara 1</h2>
						<p>Rp.3.000.000 + Sertifikat</p>
					</div>					
					<div class="col-sm-12 hadiah">
						<img src="assets/img/juara.png" alt="juara" style="width: 80px; margin-top: 60px;">
						<h2>Juara 2</h2>
						<p>Rp.2.000.000 + Sertifikat</p>
					</div>
					<div class="col-sm-12 hadiah">
						<img src="assets/img/juara.png" alt="juara" style="width: 80px; margin-top: 60px;">
						<h2>Juara 3</h2>
						<p>Rp.1.000.000 + Sertifikat</p>
					</div>
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
            Narahubung Paper : 082261022747 (Ari) <br>
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
	
	<script src="assets/js/jquery-3.3.1.min.js"></script>
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