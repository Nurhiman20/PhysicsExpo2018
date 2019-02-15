<?php 
require_once 'functions.php';

if (isset($_POST['ubah'])) {
	if (update($_POST) > 0) {
		$berhasil = true;
	} else {
		$error = true;
	}
}
 ?>

 <div class="row">
 	<div class="col-sm-10">
 		<form action="" method="post">
 			<div class="form-group">
			    <label for="status">Status Pembayaran</label>
			    <input type="text" class="form-control" name="status" id="status" value="Belum Lunas">
			</div>
			<div class="form-group">
			    <label for="Keterangan">Keterangan</label>
			    <input type="text" class="form-control" name="Keterangan" id="Keterangan">
			 </div>
			 <button type="submit" name="ubah" class="btn btn-primary btn-block">Submit</button>
 		</form>
 	</div>
 </div>