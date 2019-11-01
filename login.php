<?php 
session_start();
if (isset($_SESSION['login'])) {
  header("Location: page/dashboard");
  exit;
}
// $conn = mysqli_connect("localhost", "physicse_root", "", "physicse_physics_expo"s);
$conn = mysqli_connect("localhost", "root", "", "physics_expo");

if (isset($_POST['masuk'])) {
  
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $result = mysqli_query($conn, "SELECT * FROM akun WHERE email_akun = '$email'");

  // cek email
  if (mysqli_num_rows($result) === 1) {
    // cek password
    $row = mysqli_fetch_assoc($result);
    $nama = $row["nama_akun"];
    $id_transaksi = $row["id_transaksi"];
    if( password_verify($pass, $row["pass_akun"]) ){
      //set session
      $_SESSION['login'] = true;
      $_SESSION['nama'] = $nama;
      $_SESSION['id_transaksi'] = $id_transaksi;
      header("Location: page/dashboard");
      exit;
    }
  }

  $error = true;
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
    <!-- css tambahan -->
    <link rel="stylesheet" href="assets/css/style-login.css">

    <title>Login</title>
  </head>
  <body>
    
    <!-- Bagian Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #07172e;">
      <a class="navbar-brand" href="index.php"><img src="assets/img/logoNavbar.png" width="200px" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#aboutUs">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#competition">Competition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#moreEvents">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Contact</a>
          </li>
        </ul>
      </div>
      <!-- <button type="button" class="btn btn-primary">Registration</button> -->
    </nav>

    <!-- bagian utama -->
    <section class="login" id="login">
      <div class="container">
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4 border-light">
            <div class="text-center">
              <img src="assets/img/logo1.png" alt="logo">
            </div>
            
            <?php if ( isset($error)) : ?>
              <div class="alert alert-danger" role="alert">
                Email / password salah.
              </div>
            <?php endif; ?>

            <form action="" method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
              </div>
              <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" name="pass" id="pass">
              </div>
              <p>Belum punya akun? <a href="signup.php">Daftar</a></p>
              <button type="submit" name="masuk" class="btn btn-primary btn-block">Masuk</button>
            </form>
          </div>
          <div class="col-sm-4"></div>
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
          <div class="col-md-12 text-center" style="background-color: #07172e; color: white;">
            <p>Copyright &copy; 2018 Physics Expo. All rights reserved</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <!-- script tambahan -->
    
    
  </body>
</html>
