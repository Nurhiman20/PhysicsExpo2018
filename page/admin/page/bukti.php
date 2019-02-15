<?php 
require_once 'functions.php';

$pembayaran =query("SELECT * FROM pembayaran");
 ?>

<div class="container">
	<div class="row">
		<div class="col-sm-10">
			<table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Transaksi</th>                        
                        <th>Nama Akun</th>
                        <th>Foto Bukti Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pembayaran as $row) :?>
                    <tr>
                        <td><?= $row["id_transaksi"]; ?></td>
                        <td><?= $row["nama_akun"]; ?></td>
                        <td><img src="assets/img/upload/2bl3lgsf3t7.jpg" alt="Bukti Pembayaran"></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
		</div>
	</div>
</div>