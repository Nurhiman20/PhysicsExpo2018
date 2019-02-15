<?php 
$conn = mysqli_connect("localhost", "root", "", "physics_expo");

  $email = 'angganurhiman6@gmail.com';
  $pass = 's';

  $result = mysqli_query($conn, "SELECT * FROM akun WHERE email_akun = '$email'");

  // $id = mysqli_fetch_assoc($result["id_transaksi"]);

  $data = mysqli_fetch_assoc($result);
  var_dump($data['id_transaksi']);
 ?>
