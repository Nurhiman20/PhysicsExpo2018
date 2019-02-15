<?php 
require_once 'functions.php';

if (isset($_POST['bayar'])) {
	$nama_akun = $_SESSION['nama'];
	$id_transaksi = $_SESSION['id_transaksi'];

	$namaFile = $_FILES['bukti']['name'];
	$ukuranFile = $_FILES['bukti']['size'];
	$error = $_FILES['bukti']['error'];
	$tmpName = $_FILES['bukti']['tmp_name'];

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		$bukan = true;
	}

	if ($ukuranFile >5000000) {
		$ukuran = true;
	}

	else {
		$namaFileBaru = base_convert(microtime(false), 10, 36);
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;

		move_uploaded_file($tmpName, '/home/physicse/public_html/page/admin/assets/img/upload/' . $namaFileBaru);
		$query_bayar = "INSERT INTO pembayaran
					VALUES
					('$id_transaksi','$nama_akun','$namaFileBaru')
				 ";
		mysqli_query($conn, $query_bayar);
		$sukses = true;
	}

}
 ?>

<div class="container">
	<div class="row">
		<div class="col-sm-10">
			<?php if (isset($bukan)): ?>
				<div class="alert alert-danger" role="alert">
	                Ekstensi file salah.
	            </div>
			<?php endif ?>

			<?php if (isset($ukuran)): ?>
				<div class="alert alert-danger" role="alert">
	                Ukuran file terlalu besar.
	            </div>
			<?php endif ?>

			<?php if (isset($ukuran)): ?>
				<div class="alert alert-success" role="alert">
	                Upload file sukses.
	            </div>
			<?php endif ?>
			<h1>Konfirmasi Pembayaran</h1>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
				  <label for="bukti">Upload Bukti Pembayaran (max. 5 MB)</label>
				  <input type="file" class="form-control-file" name="bukti" id="bukti">
				</div>	
				<button type="submit" name="bayar" class="btn btn-primary">Upload</button>
			</form>
		</div>
	</div>
</div>