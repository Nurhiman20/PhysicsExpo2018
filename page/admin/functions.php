<?php 
// koneksi ke database
// $conn = mysqli_connect("localhost", "root", "" , "physics_expo");
$conn = mysqli_connect("localhost", "physicse_root", "anggaalifa30" , "physicse_physics_expo");

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
	mysqli_query($conn, "DELETE FROM partisipasi WHERE id_event = $id");

	return mysqli_affected_rows($conn);
}

function hapus_peserta($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM peserta WHERE id_event = $id");

	return mysqli_affected_rows($conn);
}

?>