<div class="container">
	<div class="col-md-12" style="background-color: white">
		<h2>Form Edit Data Admin</h2>
		<hr>
		<div class="col-md-6">
			<form action="process/admin/update-admin.php" method="post">
				<input type="hidden" name="id_admin" value="<?php echo $data['id_admin']; ?>">
				<div class="form-group">
					<label>Nama Admin</label>
					<input type="text" name="nama_admin" placeholder="ketik nama disini" class="form-control" value="<?php echo $data['nama_admin'];?>">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" placeholder="masukkan username disini" class="form-control" value="<?php echo $data['username']; ?>">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" placeholder="*********" class="form-control">
				</div>
				<div class="form-group">
					<input type="Submit" name="simpan" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>