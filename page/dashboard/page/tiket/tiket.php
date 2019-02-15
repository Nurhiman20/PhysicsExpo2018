<?php 
$conn = mysqli_connect("localhost", "physicse_root", "anggaalifa30", "physicse_physics_expo");

require_once 'functions.php';

$nama_akun = $_SESSION['nama'];
$id_transaksi = $_SESSION['id_transaksi'];


$tiket = query("SELECT * FROM partisipasi INNER JOIN kompetisi ON partisipasi.id_event = kompetisi.id_event WHERE id_transaksi = '$id_transaksi'
    ");
 ?>

 <div class="container">
 	<div class="row">
		<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-10">
					<h1>E-Ticket</h1>
				</div>
				<div class="col-sm-2" style="margin-top: 20px;">
					<a href="page/tiket/cetak.php" target="_blank"><button class="btn btn-primary">Cetak E-Ticket</button></a>
				</div>
			</div>
			
			<?php foreach ($tiket as $row) : ?>
			<table class="table table-bordered">
		        <thead>
		            <tr>
		                <th colspan="2">TICKET TYPE : <br><span style="font-size: 20pt; color: #FD3E4E;"><?= $row['nama_event']; ?></span> (Rp. <?= $row['biaya_event']; ?>,00)</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<tr>
		        		<td colspan="2" style="background-color: #F3F3F3">		     
		        		</td>
		        	</tr>
					<tr>
						<td rowspan="2" style="text-align: center; padding-top: 30px;"><img src="assets/img/logoNavbar.png" alt="Logo Acara" style="height: 3cm;"></td>
						<th style="width: 200px;text-align: center;"><?= $row['tgl_event']; ?> <br><?= $row['tempat_event']; ?></th>
					</tr>
					<tr>
						<th>ID : <br>
							<img alt="<?= $row['id_partisipasi']; ?>" src="page/tiket/barcode.php?codetype=Code39&size=40&text=<?= $row['id_partisipasi']; ?>&print=true" /></th>
					</tr>
					<tr>
						<td colspan="2" style="background-color: #F3F3F3">							
						</td>
					</tr>
					<tr>
						<th style="text-align: center"><?= $row['id_transaksi']; ?> <br><?= $row['nama_akun']; ?> <br>Ordered on <?= $row['tgl_order']; ?></th>
						<th>Status : <br><span style="color: red;"><?= $row['status']; ?></span></th>
					</tr>
		        </tbody>
		    </table>
		    <p>*) E-Ticket harus dicetak dan dibawa saat melakukan daftar ulang.</p> <br><br><br><br>
		    <?php endforeach; ?>
		 </div>			
 	</div>
 </div>