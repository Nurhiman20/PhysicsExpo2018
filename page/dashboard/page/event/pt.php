<?php 
require_once 'functions.php';

if (isset($_POST['pt2'])) {
	$nama_akun = $_SESSION['nama'];
	$id_transaksi = $_SESSION['id_transaksi'];

	// data sekolah
	$nama_sek = htmlspecialchars($_POST['nama_sek']);
	$alamat_sek = htmlspecialchars($_POST['alamat_sek']);
	$telp_sek = htmlspecialchars($_POST['telp_sek']);
	$fax_sek = htmlspecialchars($_POST['fax_sek']);
	$email_sek = htmlspecialchars($_POST['email_sek']);

	// data peserta
	$nama_pes = htmlspecialchars($_POST['nama_pes']);
	$alamat_pes = htmlspecialchars($_POST['alamat_pes']);
	$telp_pes = htmlspecialchars($_POST['telp_pes']);
	$wa_pes = htmlspecialchars($_POST['wa_pes']);
	$email_pes = htmlspecialchars($_POST['email_pes']);

	// query tabel sekolah
	$query_sek = "INSERT INTO sekolah
				VALUES
				('','$nama_sek','$alamat_sek','$telp_sek','$fax_sek','$email_sek')
			 ";

	// query tabel peserta
	$query_pes = "INSERT INTO peserta
				VALUES
				('','$nama_sek','5','$nama_pes','$alamat_pes','$telp_pes','$wa_pes','$email_pes','','','$id_transaksi')
			 ";

	// query tabel partisipasi
	$id_partisipasi = time();
	$tanggal = date('M j, Y');
	$query_part = "INSERT INTO partisipasi
				VALUES
				('$id_partisipasi','$id_transaksi','$nama_akun','Physics Talk','Belum Lunas','','5','$tanggal')
			 ";

	// jalankan query
	mysqli_query($conn, $query_sek);
	mysqli_query($conn, $query_pes);
	mysqli_query($conn, $query_part);

	$sukses = true;
}

?>

<h1 class="text-center">Physics Talk</h1>
<?php if (isset($sukses)): ?>
	<div class="alert alert-success" role="alert">
	    Pendaftaran berhasil.
	</div>
<?php endif; ?><!-- 

<?php if (isset($gagalKirim)): ?>
	<div class="alert alert-danger" role="alert">
	    Pendaftaran gagal.
	</div>
<?php endif ?> -->

<form action="" method="post" enctype="multipart/form-data">
	<h2>Identitas Institusi / Universitas / Sekolah</h2>
	<div class="form-group">
	    <label for="nama_sek">Nama Institusi</label>
	    <input type="text" class="form-control" name="nama_sek" id="nama_sek">
	</div>
	<div class="form-group">
	    <label for="alamat_sek">Alamat Lengkap</label>
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

	<h2>Identitas Peserta</h2>
	<div class="form-group">
	    <label for="nama_pes">Nama</label>
	    <input type="text" class="form-control" name="nama_pes" id="nama_pes">
	</div>
	<div class="form-group">
	    <label for="alamat_pes">Alamat Lengkap</label>
	    <input type="text" class="form-control" name="alamat_pes" id="alamat_pes">
	</div>
	<div class="form-group">
	    <label for="telp_pes">Nomor Telepon</label>
	    <input type="text" class="form-control" name="telp_pes" id="telp_pes">
	</div>
	<div class="form-group">
	    <label for="wa_pes">Nomor WA</label>
	    <input type="text" class="form-control" name="wa_pes" id="wa_pes">
	</div>
	<div class="form-group">
	    <label for="email_pes">Email</label>
	    <input type="email" class="form-control" name="email_pes" id="email_pes">
	</div>
	<button type="submit" name="pt2" class="btn btn-primary btn-block">Submit</button>
</form>