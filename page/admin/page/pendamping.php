<?php 
require_once 'functions.php';

$transaksi =query("SELECT * FROM pendamping
    ");
 ?>

<h1>Daftar Peserta</h1>
<div class="container">
	<div class="row">
		<div class="col-sm-10">
			<table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 40px;">No.</th>
                        <th>Nama</th>
                        <th>Institusi</th>
                        <th>No. Telp</th>
                        <th>No. WA</th>
                        <th>Email</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($transaksi as $row) :?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row["nama_pen"]; ?></td>
                        <td><?= $row["nama_sek"]; ?></td>
                        <td><?= $row["telp_pen"]; ?></td>
                        <td><?= $row["wa_pen"]; ?></td>
                        <td><?= $row["email_pen"]; ?></td>
                        <td><?= $row["alamat_pen"]; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
		</div>
	</div>
</div>