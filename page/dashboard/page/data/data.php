<?php 
$conn = mysqli_connect("localhost", "physicse_root", "anggaalifa30", "physicse_physics_expo");

require_once 'functions.php';

$nama_akun = $_SESSION['nama'];
$id_transaksi = $_SESSION['id_transaksi'];


$peserta = query("SELECT * FROM peserta INNER JOIN kompetisi ON peserta.id_event = kompetisi.id_event WHERE id_transaksi = '$id_transaksi'
    ");
 ?>

 <div class="container">
 	<div class="row">
		<div class="col-sm-10">
			<table class="table table-bordered table-striped">
				<h2>Data Peserta</h2>
		        <thead>
		            <tr>
		                <th style="width: 40px;">No.</th>
		                <th style="text-align: center; width: 200px">Foto Peserta</th>
		                <th colspan="2" style="text-align: center">Identitas</th>
		            </tr>
		        </thead>
		        <tbody>
		            <?php $i = 1; ?>
		            <?php foreach ($peserta as $row) :?>
					<tr>
						<th rowspan="8"><?= $i++; ?></th>
						<td rowspan="8" style="text-align: center"><img src="assets/img/upload/<?= $row['foto_peserta']; ?>" alt="<?= $row['foto_peserta']; ?>" style="width: 3cm;height: 4cm;"></td>
						<th style="width: 200px">Nama Peserta</th>
						<td><?= $row["nama_pes"]; ?></td>
					</tr>
					<tr>
						<th>Alamat Lengkap</th>
						<td><?= $row["alamat_pes"]; ?></td>
					</tr>
					<tr>
						<th>Nomor Telepon</th>
						<td><?= $row["telp_pes"]; ?></td>
					</tr>
					<tr>
						<th>Nomor WA</th>
						<td><?= $row["wa_pes"]; ?></td>
					</tr>
					<tr>
						<th>Alamat Email</th>
						<td><?= $row["email_pes"]; ?></td>
					</tr>
					<tr>
						<th>Asal Institusi</th>
						<td><?= $row["nama_sek"]; ?></td>
					</tr>
					<tr>
						<th>Nama Pendamping</th>
						<td><?= $row["nama_pendamping"]; ?></td>
					</tr>
					<tr>
						<th>Event yang diikuti</th>
						<td><?= $row["nama_event"]; ?></td>
					</tr>
		        	<?php endforeach; ?>
		        </tbody>
		    </table>
		 </div>			
 	</div>
 </div>