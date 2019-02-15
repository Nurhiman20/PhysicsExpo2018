<?php 
require_once 'functions.php';

if (isset($_POST['paper2'])) {
	$nama_akun = $_SESSION['nama'];
	$id_transaksi = $_SESSION['id_transaksi'];

	// data sekolah
	$nama_sek = htmlspecialchars($_POST['nama_sek']);
	$alamat_sek = htmlspecialchars($_POST['alamat_sek']);
	$telp_sek = htmlspecialchars($_POST['telp_sek']);
	$fax_sek = htmlspecialchars($_POST['fax_sek']);
	$email_sek = htmlspecialchars($_POST['email_sek']);

	// data Ketua
	$nama_ket = htmlspecialchars($_POST['nama_ket']);
	$alamat_ket = htmlspecialchars($_POST['alamat_ket']);
	$telp_ket = htmlspecialchars($_POST['telp_ket']);
	$wa_ket = htmlspecialchars($_POST['wa_ket']);
	$email_ket = htmlspecialchars($_POST['email_ket']);

	// data Anggota I
	$nama_ang1 = htmlspecialchars($_POST['nama_ang1']);
	$alamat_ang1 = htmlspecialchars($_POST['alamat_ang1']);
	$telp_ang1 = htmlspecialchars($_POST['telp_ang1']);
	$wa_ang1 = htmlspecialchars($_POST['wa_ang1']);
	$email_ang1 = htmlspecialchars($_POST['email_ang1']);

	// data Anggota II
	$nama_ang2 = htmlspecialchars($_POST['nama_ang2']);
	$alamat_ang2 = htmlspecialchars($_POST['alamat_ang2']);
	$telp_ang2 = htmlspecialchars($_POST['telp_ang2']);
	$wa_ang2 = htmlspecialchars($_POST['wa_ang2']);
	$email_ang2 = htmlspecialchars($_POST['email_ang2']);

	// data Pendamping
	$nama_pen = htmlspecialchars($_POST['nama_pen']);
	$alamat_pen = htmlspecialchars($_POST['alamat_pen']);
	$telp_pen = htmlspecialchars($_POST['telp_pen']);
	$wa_pen = htmlspecialchars($_POST['wa_pen']);
	$email_pen = htmlspecialchars($_POST['email_pen']);

	// upload foto & file
	$judulAbstrak = htmlspecialchars($_POST['judulAbstrak']);
	$foto_ket = upload_fotoPes();
	$foto_ang1 = upload_fotoAng1();
	$foto_ang2 = upload_fotoAng2();
	$abstrak = uploadAbstrak();

	if (!$foto_ket || !$foto_ang1 || !$foto_ang2 || !$abstrak) {
		$gagal = true;
	}

	if (!isset($gagal)) {
		// query tabel sekolah
		$query_sek = "INSERT INTO sekolah
					VALUES
					('','$nama_sek','$alamat_sek','$telp_sek','$fax_sek','$email_sek')
				 ";

		// query tabel peserta
		$query_ket = "INSERT INTO peserta
					VALUES
					('','$nama_sek','3','$nama_ket','$alamat_ket','$telp_ket','$wa_ket','$email_ket','$foto_ket','$nama_pen','$id_transaksi')
				 ";
		$query_ang1 = "INSERT INTO peserta
					VALUES
					('','$nama_sek','3','$nama_ang1','$alamat_ang1','$telp_ang1','$wa_ang1','$email_ang1','$foto_ang1','$nama_pen','$id_transaksi')
				 ";
		$query_ang2 = "INSERT INTO peserta
					VALUES
					('','$nama_sek','3','$nama_ang2','$alamat_ang2','$telp_ang2','$wa_ang2','$email_ang2','$foto_ang2','$nama_pen','$id_transaksi')
				 ";

		// query tabel pendamping
		$query_pen = "INSERT INTO pendamping
					VALUES
					('','$nama_pen','$alamat_pen','$telp_pen','$wa_pen','$email_pen','','$nama_sek')
				 ";

		// query tabel tim
		$query_tim = "INSERT INTO kelompok
					VALUES
					('','$nama_ket','$nama_ang1','$nama_ang2','$nama_sek','$nama_pen','$judulAbstrak','$abstrak','$id_transaksi')
				 ";

		// query tabel partisipasi
		$id_partisipasi = time();
		$tanggal = date('M j, Y');
		$query_part = "INSERT INTO partisipasi
					VALUES
					('$id_partisipasi','$id_transaksi','$nama_akun','Paper Competition','Belum Lunas','','3','$tanggal')
				 ";

		// jalankan query
		mysqli_query($conn, $query_sek);
		mysqli_query($conn, $query_ket);
		mysqli_query($conn, $query_ang1);
		mysqli_query($conn, $query_ang2);
		mysqli_query($conn, $query_pen);
		mysqli_query($conn, $query_tim);
		mysqli_query($conn, $query_part);

		$sukses = true;
	} else {
		$gagalKirim = true;
	}
}

?>

<h1 class="text-center">Paper Competition</h1>
<?php if (isset($sukses)): ?>
	<div class="alert alert-success" role="alert">
	    Pendaftaran berhasil.
	</div>
<?php endif; ?>

<?php if (isset($gagalKirim)): ?>
	<div class="alert alert-danger" role="alert">
	    Pendaftaran gagal.
	</div>
<?php endif; ?>

<form action="" method="post" enctype="multipart/form-data">
	<h2>Identitas Sekolah</h2>
	<div class="form-group">
	    <label for="nama_sek">Nama Sekolah</label>
	    <input type="text" class="form-control" name="nama_sek" id="nama_sek">
	</div>
	<div class="form-group">
	    <label for="alamat_sek">Alamat Sekolah</label>
	    <input type="text" class="form-control" name="alamat_sek" id="alamat_sek">
	 </div>
	 <div class="form-group">
	    <label for="telp_sek">Nomor Telepon</label>
	    <input type="text" class="form-control" name="telp_sek" id="telp_sek">
	 </div>
	 <div class="form-group">
	    <label for="fax_sek">Fax</label>
	    <input type="text" class="form-control" name="fax_sek" id="fax_sek">
	 </div>
	 <div class="form-group">
	    <label for="email_sek">Email</label>
	    <input type="email" class="form-control" name="email_sek" id="email_sek">
	 </div><br>

	<h2>Identitas Ketua Kelompok</h2>
	<div class="form-group">
	    <label for="nama_ket">Nama Ketua Kelompok</label>
	    <input type="text" class="form-control" name="nama_ket" id="nama_ket">
	</div>
	<div class="form-group">
	    <label for="alamat_ket">Alamat Lengkap</label>
	    <input type="text" class="form-control" name="alamat_ket" id="alamat_ket">
	</div>
	<div class="form-group">
	    <label for="telp_ket">Nomor Telepon</label>
	    <input type="text" class="form-control" name="telp_ket" id="telp_ket">
	</div>
	<div class="form-group">
	    <label for="wa_ket">Nomor WA</label>
	    <input type="text" class="form-control" name="wa_ket" id="wa_ket">
	</div>
	<div class="form-group">
	    <label for="email_ket">Email</label>
	    <input type="email" class="form-control" name="email_ket" id="email_ket">
	</div>
	<div class="form-group">
	  <label for="foto_pes">Upload Pas Foto (max. 500 KB)</label>
	  <input type="file" class="form-control-file" name="foto_pes" id="foto_pes">
	</div><br>

	<h2>Identitas Anggota I</h2>
	<div class="form-group">
	    <label for="nama_ang1">Nama</label>
	    <input type="text" class="form-control" name="nama_ang1" id="nama_ang1">
	</div>
	<div class="form-group">
	    <label for="alamat_ang1">Alamat Lengkap</label>
	    <input type="text" class="form-control" name="alamat_ang1" id="alamat_ang1">
	</div>
	<div class="form-group">
	    <label for="telp_ang1">Nomor Telepon</label>
	    <input type="text" class="form-control" name="telp_ang1" id="telp_ang1">
	</div>
	<div class="form-group">
	    <label for="wa_ang1">Nomor WA</label>
	    <input type="text" class="form-control" name="wa_ang1" id="wa_ang1">
	</div>
	<div class="form-group">
	    <label for="email_ang1">Email</label>
	    <input type="email" class="form-control" name="email_ang1" id="email_ang1">
	</div>
	<div class="form-group">
	  <label for="foto_ang1">Upload Pas Foto (max. 500 KB)</label>
	  <input type="file" class="form-control-file" name="foto_ang1" id="foto_ang1">
	</div><br>

	<h2>Identitas Anggota II</h2>
	<div class="form-group">
	    <label for="nama_ang2">Nama</label>
	    <input type="text" class="form-control" name="nama_ang2" id="nama_ang2">
	</div>
	<div class="form-group">
	    <label for="alamat_ang2">Alamat Lengkap</label>
	    <input type="text" class="form-control" name="alamat_ang2" id="alamat_ang2">
	</div>
	<div class="form-group">
	    <label for="telp_ang2">Nomor Telepon</label>
	    <input type="text" class="form-control" name="telp_ang2" id="telp_ang2">
	</div>
	<div class="form-group">
	    <label for="wa_ang2">Nomor WA</label>
	    <input type="text" class="form-control" name="wa_ang2" id="wa_ang2">
	</div>
	<div class="form-group">
	    <label for="email_ang2">Email</label>
	    <input type="email" class="form-control" name="email_ang2" id="email_ang2">
	</div>
	<div class="form-group">
	  <label for="foto_ang2">Upload Pas Foto (max. 500 KB)</label>
	  <input type="file" class="form-control-file" name="foto_ang2" id="foto_ang2">
	</div><br>

	<h2>Identitas Pendamping</h2>
	<div class="form-group">
	    <label for="nama_pen">Nama</label>
	    <input type="text" class="form-control" name="nama_pen" id="nama_pen">
	</div>
	<div class="form-group">
	    <label for="alamat_pen">Alamat Lengkap</label>
	    <input type="text" class="form-control" name="alamat_pen" id="alamat_pen">
	</div>
	<div class="form-group">
	    <label for="telp_pen">Nomor Telepon</label>
	    <input type="text" class="form-control" name="telp_pen" id="telp_pen">
	</div>
	<div class="form-group">
	    <label for="wa_pen">Nomor WA</label>
	    <input type="text" class="form-control" name="wa_pen" id="wa_pen">
	</div>
	<div class="form-group">
	    <label for="email_pen">Email</label>
	    <input type="email" class="form-control" name="email_pen" id="email_pen">
	</div>
	<!-- <div class="form-group">
	  <label for="foto_pen">Upload Pas Foto (max. 500 KB)</label>
	  <input type="file" class="form-control-file" name="foto_pen" id="foto_pen">
	</div> --><br>
	<h2>Upload Abstrak Paper</h2>
	<div class="form-group">
	    <label for="judulAbstrak">Judul Abstrak</label>
	    <input type="text" class="form-control" name="judulAbstrak" id="judulAbstrak">
	</div>
	<div class="form-group">
	  <label for="fileAbstrak">Upload file abstrak (max. 5 MB dan ekstensi file pdf)</label>
	  <input type="file" class="form-control-file" name="fileAbstrak" id="fileAbstrak">
	</div>	
	<button type="submit" name="paper2" class="btn btn-primary btn-block">Submit</button>
</form>