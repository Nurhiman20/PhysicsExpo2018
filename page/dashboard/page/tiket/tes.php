
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
	$html .= '<table>
	<tr>
		<th colspan="2">
		TICKET TYPE : <br><span style="font-size: 20pt; color: #FD3E4E;">'. $row["nama_event"] .'</span> (Rp.'. $row["biaya_event"] .',00)
	</th>
	</tr>
	<tr>
		<td colspan="2" style="background-color: #F3F3F3">		     
		</td>
	</tr>
	<tr>
		<td rowspan="2" style="text-align: center"><img src="assets/img/logoNavbar.png" alt="Logo Acara" style="height: 3cm;"></td>
		<th style="width: 200px;text-align: center;">'. $row["tgl_event"] .'<br>'. $row["tempat_event"] .'</th>
	</tr>
	<tr>
		<th>ID : <br>'. $row["id_partisipasi"] .'</th>
	</tr>
	<tr>
		<td colspan="2" style="background-color: #F3F3F3">		     
		</td>
	</tr>
	<tr>
		<th colspan="2" style="text-align: center">'.
			$row["id_transaksi"] .'<br>'. $row["nama_akun"] .'<br>Ordered on '. $row["tgl_order"] .'
		</th>
	</tr>
</table>
<p>*) E-Ticket harus dicetak dan dibawa saat melakukan daftar ulang.</p> <br><br><br><br>';
}

$html .= '</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();