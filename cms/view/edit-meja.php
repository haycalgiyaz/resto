<div class="container">
	<?php while ($data = mysqli_fetch_array($sql)) { ?>
	<div class="col-md-12" style="background-color: white">
		<h2>Form Edit Data Meja</h2>
		<hr>
		<div class="col-md-6">
			<form action="process/update-meja.php" method="post">
				<div class="form-group">
					<input type="hidden" name="id_meja" value="<?php echo $data['id_meja']; ?>">
					<label>Nama Meja</label>
					<input type="text" name="nm_meja" placeholder="meja x" class="form-control" value="<?php echo $data['nm_meja']; ?>">
				</div>
				<div class="form-group">
					<input type="submit" name="simpan" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
	<?php } ?>
	
</div>