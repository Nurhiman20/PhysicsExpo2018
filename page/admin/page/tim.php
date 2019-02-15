<?php 
require_once 'functions.php';

$tim = query("SELECT * FROM tim");
$kelompok = query("SELECT * FROM kelompok");
 ?>

<h1>Daftar Tim</h1>
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h2>Robotic Challenge</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Nama Tim</th>
                        <th class="text-center">Ketua Tim</th>
                        <th class="text-center">Anggota 1</th>
                        <th class="text-center">Anggota 2</th>
                        <th class="text-center">Pendamping</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tim as $row) :?>
                        <?php if ($row['nama_tim'] !== ''): ?>
                        <tr>
                            <td><?= $row['nama_tim']; ?></td>
                            <td><?= $row['nama_ketua']; ?></td>
                            <td><?= $row['nama_anggota1']; ?></td>
                            <td><?= $row['nama_anggota2']; ?></td>
                            <td><?= $row['nama_pen']; ?></td>
                        </tr>                   
                        <?php endif ?>
                    <?php endforeach; ?>      
                </tbody>
            </table>

            <h2>Paper Competition</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Ketua Kelompok</th>
                        <th class="text-center">Anggota 1</th>
                        <th class="text-center">Anggota 2</th>
                        <th class="text-center">Asal Sekolah</th>
                        <th class="text-center">Pendamping</th>
                        <th class="text-center" style="width: 280px;">Judul Paper</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kelompok as $rows) :?>
                        <?php if ($row['nama_tim'] !== ''): ?>
                        <tr>
                            <td><?= $rows['nama_ketua']; ?></td>
                            <td><?= $rows['nama_anggota1']; ?></td>
                            <td><?= $rows['nama_anggota2']; ?></td>
                            <td><?= $rows['sekolah']; ?></td>
                            <td><?= $rows['nama_pen']; ?></td>
                            <td style="width: 280px;"><?= $rows['judul']; ?></td>
                        </tr>                   
                        <?php endif ?>
                    <?php endforeach; ?>      
                </tbody>
            </table>
        </div>
    </div>
</div>