<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "physicse_root", "", "physicse_physics_expo");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		    $rows[] = $row;
		}	
	return $rows;
}

function hapus_partisipasi($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM partisipasi WHERE id_partisipasi = $id");

	return mysqli_affected_rows($conn);
}

function hapus_peserta($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM peserta WHERE id_event = $id");

	return mysqli_affected_rows($conn);
}

function upload_fotoPes(){
	
	$namaFile = $_FILES['foto_pes']['name'];
	$ukuranFile = $_FILES['foto_pes']['size'];
	$error = $_FILES['foto_pes']['error'];
	$tmpName = $_FILES['foto_pes']['tmp_name'];

	if ($error === 4) {
		echo "<script>
				alert('Silahkan upload foto peserta terlebih dahulu!')
				</script>";
		return false;
	}

	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('Ekstensi file foto peserta tidak cocok.')
				</script>";
		return false;
	}

	if ($ukuranFile > 500000) {
		echo "<script>
				alert('Ukuran file foto peserta terlalu besar.')
				</script>";
		return false;
	}

	$namaFileBaru = base_convert(microtime(false), 10, 36);
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'assets/img/upload/' . $namaFileBaru);

	return $namaFileBaru;
}

function upload_fotoPen(){
	
	$namaFile = $_FILES['foto_pen']['name'];
	$ukuranFile = $_FILES['foto_pen']['size'];
	$error = $_FILES['foto_pen']['error'];
	$tmpName = $_FILES['foto_pen']['tmp_name'];

	if ($error === 4) {
		echo "<script>
				alert('Silahkan upload foto pendamping terlebih dahulu!')
				</script>";
		return false;
	}

	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('Ekstensi file foto pendamping tidak cocok.')
				</script>";
		return false;
	}

	if ($ukuranFile > 500000) {
		echo "<script>
				alert('Ukuran file foto pendamping terlalu besar.')
				</script>";
		return false;
	}

	$namaFileBaru = base_convert(microtime(false), 8, 36);
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'assets/img/upload/' . $namaFileBaru);

	return $namaFileBaru;
}

function upload_fotoAng1(){
	
	$namaFile = $_FILES['foto_ang1']['name'];
	$ukuranFile = $_FILES['foto_ang1']['size'];
	$error = $_FILES['foto_ang1']['error'];
	$tmpName = $_FILES['foto_ang1']['tmp_name'];

	if ($error === 4) {
		echo "<script>
				alert('Silahkan upload foto anggota 1 terlebih dahulu!')
				</script>";
		return false;
	}

	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('Ekstensi file foto anggota 1 tidak cocok.')
				</script>";
		return false;
	}

	if ($ukuranFile > 500000) {
		echo "<script>
				alert('Ukuran file foto anggota 1 terlalu besar.')
				</script>";
		return false;
	}

	$namaFileBaru = base_convert(microtime(false), 10, 16);
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'assets/img/upload/' . $namaFileBaru);

	return $namaFileBaru;
}

function upload_fotoAng2(){
	
	$namaFile = $_FILES['foto_ang2']['name'];
	$ukuranFile = $_FILES['foto_ang2']['size'];
	$error = $_FILES['foto_ang2']['error'];
	$tmpName = $_FILES['foto_ang2']['tmp_name'];

	if ($error === 4) {
		echo "<script>
				alert('Silahkan upload foto anggota 2 terlebih dahulu!')
				</script>";
		return false;
	}

	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('Ekstensi file foto anggota 2 tidak cocok.')
				</script>";
		return false;
	}

	if ($ukuranFile > 500000) {
		echo "<script>
				alert('Ukuran file foto anggota 2 terlalu besar.')
				</script>";
		return false;
	}

	$namaFileBaru = base_convert(microtime(false), 8, 16);
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'assets/img/upload/' . $namaFileBaru);

	return $namaFileBaru;
}

function uploadAbstrak() {
	$namaFile = $_FILES['fileAbstrak']['name'];
	$ukuranFile = $_FILES['fileAbstrak']['size'];
	$error = $_FILES['fileAbstrak']['error'];
	$tmpName = $_FILES['fileAbstrak']['tmp_name'];

	if ($error === 4) {
		echo "<script>
				alert('Silahkan upload abstrak terlebih dahulu!')
				</script>";
		return false;
	}

	$ekstensiFileValid = ['pdf'];
	$ekstensiFile = explode('.', $namaFile);
	$ekstensiFile = strtolower(end($ekstensiFile));
	if (!in_array($ekstensiFile, $ekstensiFileValid)) {
		echo "<script>
				alert('Ekstensi file abstrak tidak cocok.')
				</script>";
		return false;
	}

	if ($ukuranFile > 5000000) {
		echo "<script>
				alert('Ukuran file abstrak terlalu besar.')
				</script>";
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiFile;

	move_uploaded_file($tmpName, 'assets/abstrak/' . $namaFileBaru);

	return $namaFileBaru;
}

?>
