<?php
session_start();
if ( !isset($_SESSION['login']) ) {
    header("Location: http://physicsexpo.web.id/login.php");
    exit;
}

require_once __DIR__ . '/vendor/autoload.php';

$conn = mysqli_connect("localhost", "physicse_root", "anggaalifa30", "physicse_physics_expo");

$nama_akun = $_SESSION['nama'];
$id_transaksi = $_SESSION['id_transaksi'];


$query = "SELECT * FROM partisipasi INNER JOIN kompetisi ON partisipasi.id_event = kompetisi.id_event WHERE id_transaksi = '$id_transaksi'";

$result = mysqli_query($conn, $query);
$tiket = [];
while ($rows = mysqli_fetch_assoc($result)) {
	$tiket[] = $rows;
}


$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>E-Ticket</h1>';

foreach ($tiket as $row) {
	$html .= '<table border="1" width="100%">
	<tr>
		<td colspan="2" style="font-weight:bold">
		TICKET TYPE : <br><span style="font-size: 20pt; color: #FD3E4E;">'. $row["nama_event"] .'</span> (Rp.'. $row["biaya_event"] .',00)
	</td>
	</tr>
	<tr>
		<td rowspan="2" style="text-align: center;"><img src="logoNavbar.png" alt="Logo Acara" style="height: 2cm;"></td>
		<th style="width: 200px;text-align: center;">'. $row["tgl_event"] .'<br>'. $row["tempat_event"] .'</th>
	</tr>
	<tr>
		<th style="font-weight:bold"><br>
		<img alt="'. $row["id_partisipasi"] .'" src="barcode.php?codetype=Code39&size=40&text='. $row["id_partisipasi"].'&print=true" /></th>
	</tr>
	<tr>
		<th style="text-align: center">'.
			$row["id_transaksi"] .'<br>'. $row["nama_akun"] .'<br>Ordered on '. $row["tgl_order"] .'
		</th>
		<th>Status : <br><span style="color: red;">'. $row["status"] .'</span></th>
	</tr>
</table>
<p>*) E-Ticket harus dicetak dan dibawa saat melakukan daftar ulang.</p> <br><br><br><br>';
}

$html .= '</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();
 ?>