<?php 
require_once 'functions.php';

$transaksi =query("SELECT * FROM sekolah");
 ?>

<h1>Daftar Institusi</h1>
<div class="container">
	<div class="row">
		<div class="col-sm-10">
            <?php foreach ($transaksi as $row) :?>
			<table class="table table-bordered">
                <tbody>
                    <tr>
                        <th style="width: 200px">Nama Institusi</th>
                        <td><?= $row['nama_sek']; ?></td>
                    </tr>
                    <tr>
                        <th style="width: 200px">Nomor Telepon</th>
                        <td><?= $row['telp_sek']; ?></td>
                    </tr>
                    <tr>
                        <th style="width: 200px">Fax</th>
                        <td><?= $row['fax_sek']; ?></td>
                    </tr>
                    <tr>
                        <th style="width: 200px">Email</th>
                        <td><?= $row['email_sek']; ?></td>
                    </tr>
                    <tr>
                        <th style="width: 200px">Alamat</th>
                        <td><?= $row['alamat_sek']; ?></td>
                    </tr>
                </tbody>
            </table>
            <br><br>
            <?php endforeach; ?>
		</div>
	</div>
</div>