<?php 
require_once 'functions.php';

$robotic =query("SELECT * FROM peserta WHERE id_event = '1'");
$jf =query("SELECT * FROM peserta WHERE id_event = '2'");
$paper =query("SELECT * FROM peserta WHERE id_event = '3'");
$workshop =query("SELECT * FROM peserta WHERE id_event = '4'");
$phytalk =query("SELECT * FROM peserta WHERE id_event = '5'");
$phycamp =query("SELECT * FROM peserta WHERE id_event = '6'");

 ?>

<h1>Daftar Peserta</h1>
<div class="container">
	<div class="row">
		<div class="col-sm-10">
            <h2>Robotic Challenge</h2>
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
                        <th>Pendamping</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($robotic as $row) :?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row["nama_pes"]; ?></td>
                        <td><?= $row["nama_sek"]; ?></td>
                        <td><?= $row["telp_pes"]; ?></td>
                        <td><?= $row["wa_pes"]; ?></td>
                        <td><?= $row["email_pes"]; ?></td>
                        <td><?= $row["alamat_pes"]; ?></td>
                        <td><?= $row["nama_pendamping"]; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <h2>Jawara Fisika</h2>
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
                        <th>Pendamping</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($jf as $row) :?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row["nama_pes"]; ?></td>
                        <td><?= $row["nama_sek"]; ?></td>
                        <td><?= $row["telp_pes"]; ?></td>
                        <td><?= $row["wa_pes"]; ?></td>
                        <td><?= $row["email_pes"]; ?></td>
                        <td><?= $row["alamat_pes"]; ?></td>
                        <td><?= $row["nama_pendamping"]; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <h2>Paper Competition</h2>
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
                        <th>Pendamping</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($paper as $row) :?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row["nama_pes"]; ?></td>
                        <td><?= $row["nama_sek"]; ?></td>
                        <td><?= $row["telp_pes"]; ?></td>
                        <td><?= $row["wa_pes"]; ?></td>
                        <td><?= $row["email_pes"]; ?></td>
                        <td><?= $row["alamat_pes"]; ?></td>
                        <td><?= $row["nama_pendamping"]; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <h2>Workshop</h2>
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
                    <?php foreach ($workshop as $row) :?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row["nama_pes"]; ?></td>
                        <td><?= $row["nama_sek"]; ?></td>
                        <td><?= $row["telp_pes"]; ?></td>
                        <td><?= $row["wa_pes"]; ?></td>
                        <td><?= $row["email_pes"]; ?></td>
                        <td><?= $row["alamat_pes"]; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <h2>Physics Talk</h2>
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
                    <?php foreach ($phytalk as $row) :?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row["nama_pes"]; ?></td>
                        <td><?= $row["nama_sek"]; ?></td>
                        <td><?= $row["telp_pes"]; ?></td>
                        <td><?= $row["wa_pes"]; ?></td>
                        <td><?= $row["email_pes"]; ?></td>
                        <td><?= $row["alamat_pes"]; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <h2>Physics Camp</h2>
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
                        <th>Pendamping</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($phycamp as $row) :?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row["nama_pes"]; ?></td>
                        <td><?= $row["nama_sek"]; ?></td>
                        <td><?= $row["telp_pes"]; ?></td>
                        <td><?= $row["wa_pes"]; ?></td>
                        <td><?= $row["email_pes"]; ?></td>
                        <td><?= $row["alamat_pes"]; ?></td>
                        <td><?= $row["nama_pendamping"]; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
		</div>
	</div>
</div>