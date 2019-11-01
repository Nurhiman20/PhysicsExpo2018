<?php 
// require 'functions.php';
// $conn = mysqli_connect("localhost", "physicse_root", "", "physicse_physics_expo");
$conn = mysqli_connect("localhost", "root", "", "physics_expo");

if ( isset($_POST['register']) ) {
  // ambil data dari tiap elemen dalam form
  $nama = htmlspecialchars($_POST['nama']);
  $email = strtolower($_POST['email']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);
  $confirm = mysqli_real_escape_string($conn, $_POST['confirm']);

  // cek email sudah ada atau belum
  $result = mysqli_query($conn, "SELECT email_akun FROM akun WHERE email_akun = '$email' ");

  if ( mysqli_fetch_assoc($result)) {
    $ada = true;
  } elseif ( $nama == '' || $email == '' || $pass == '' || $confirm == '') {
    $kosong = true;
  } else {
    if ( $pass == $confirm) {
      $password = password_hash($pass, PASSWORD_DEFAULT);
      $id_transaksi = time();
      // query insert data
      $query = "INSERT INTO akun
                  VALUES
                  ('$id_transaksi', '$nama', '$email', '$password')
              ";
      mysqli_query($conn, $query);

      if ( mysqli_affected_rows($conn) > 0 ) {
        $berhasil = true;
      }
    } else {
      $konfirmasi = true;
    }
  }

  
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
    <!-- css tambahan -->
    <link rel="stylesheet" href="assets/css/style-login.css">

    <title>Sign Up</title>
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
            <a class="nav-link" href="index.php#footer">Contact</a>
          </li>
        </ul>
      </div>
      <form method="post" action="login.php">
        <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
      </form>
    </nav>

    <!-- bagian utama -->
    <section class="signup" id="signup">
      <div class="container">
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4 border-light">
            <h1>Daftar Akun</h1>
            <?php if ( isset($ada)) : ?>
              <div class="alert alert-info" role="alert">
                Email sudah terdaftar.
              </div>
            <?php endif; ?>

            <?php if ( isset($berhasil)) : ?>
              <div class="alert alert-success" role="alert">
                Akun berhasil dibuat.
              </div>
            <?php endif; ?>


            <?php if ( isset($konfirmasi)) : ?>
              <div class="alert alert-danger" role="alert">
                Konfirmasi password tidak sesuai.
              </div>
            <?php endif; ?>

            <?php if ( isset($kosong)) : ?>
              <div class="alert alert-danger" role="alert">
                Ada data yang kosong.
              </div>
            <?php endif; ?>

            <form action="" method="post">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
              </div>
              <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" name="pass" id="pass">
              </div>
              <div class="form-group">
                <label for="confirm">Confirm Password</label>
                <input type="password" class="form-control" name="confirm" id="confirm">
              </div>
              <p>Sudah punya akun? <a href="login.php">Masuk</a></p>
              <button type="submit" name="register" class="btn btn-primary btn-block">Daftar</button>
            </form>
          </div>
          <div class="col-sm-4"></div>
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
