<?php 
require_once 'functions.php';

$transaksi =query("SELECT * FROM partisipasi INNER JOIN kompetisi ON partisipasi.nama_event = kompetisi.nama_event
    ");

if (isset($_POST['submit'])) {
	$id_partisipasi = $_POST['id_partisipasi'];
	$id_transaksi = $_POST['id_transaksi'];
	$nama_akun = $_POST['nama_akun'];
	$status = $_POST['status'];
	$keterangan = $_POST['keterangan'];
	$id_event = $_POST['id_event'];
	$nama_event = $_POST['nama_event'];
	
	// UPDATE `partisipasi` SET `status` = 'Lunas', `keterangan` = '' WHERE `partisipasi`.`id_partisipasi` = 14;

	$update = "UPDATE partisipasi SET
				status = '$status',
				keterangan = '$keterangan'
				WHERE partisipasi.id_partisipasi = '$id_partisipasi';
				";
		mysqli_query($conn, $update);
}	
 ?>

<h1>Konfirmasi Pembayaran</h1>
<div class="container">
	<div class="row">
		<div class="col-sm-10">
			<table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 40px;">No.</th>
                        <th>ID Transaksi</th>
                        <th>Nama Akun</th>
                        <th style="width: 200px">Nama Event</th>
                        <th>Biaya</th>
                        <th>Status Pembayaran</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($transaksi as $row) :?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row["id_transaksi"]; ?></td>
                        <td><?= $row["nama_akun"]; ?></td>
                        <td><?= $row["nama_event"]; ?></td>
                        <td><?= $row["biaya_event"]; ?></td>
                        <td><?= $row["status"]; ?></td>
                        <td><?= $row["keterangan"]; ?></td>
                        <td>
                        	<form action="index.php?page=pembayaran&id=<?= $row['id_partisipasi']; ?>" method="post">
                        	<button type="submit" name="update" class="btn btn-primary btn-block">Update</button>
                        	</form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <?php if (isset($_POST['update'])): ?>
            	<?php 
            	$conn = mysqli_connect("localhost", "physicse_root", "anggaalifa30" , "physicse_physics_expo");
            	$id = $_GET['id'];

            	$query = query("SELECT * FROM partisipasi WHERE id_partisipasi='$id'");                   	


            ?>
            	<div class="row">
				 	<div class="col-sm-10">
				 		<form action="" method="post">
				 			<?php foreach ($query as $data): ?>
				 			<div class="form-group">
				 				<input type="hidden" value="<?= $data['id_partisipasi']; ?>" name='id_partisipasi'>
				 				<input type="hidden" value="<?= $data['id_transaksi']; ?>" name='id_transaksi'>
				 				<input type="hidden" value="<?= $data['nama_akun']; ?>" name='nama_akun'>
				 				<input type="hidden" value="<?= $data['id_event']; ?>" name='id_event'>
				 				<input type="hidden" value="<?= $data['nama_event']; ?>" name='nama_event'>
							    <label for="status">Status Pembayaran</label>
							    <input type="text" class="form-control" name="status" id="status" value="<?= $data['status']; ?>">
							</div>
							<div class="form-group">
							    <label for="Keterangan">Keterangan</label>
							    <input type="text" class="form-control" name="keterangan" id="keterangan" value="<?= $data['keterangan']; ?>">
							 </div>
							 <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>					 
				 				
				 			<?php endforeach ?>
				 		</form>
				 	</div>
				 </div>
            <?php endif ?>
		</div>
	</div>
</div>