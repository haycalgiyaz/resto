<div class="container">
	<?php while ($data = mysqli_fetch_array($sql)) { ?>
	<div class="col-md-12" style="background-color: white">
		<h2>Form Edit Data User</h2>
		<hr>
		<div class="col-md-6">
			<form action="process/update-user.php" method="post">
					<input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
					<label>Nama User</label>
					<input type="text" name="nm_user" placeholder="ketik nama disini" class="form-control" value="<?php echo $data['nm_user'];?>">
					<label>Username</label>
					<input type="text" name="username" placeholder="masukkan username disini" class="form-control" value="<?php echo $data['username']; ?>">
					<label>Password</label>
					<input type="password" name="password" placeholder="*********" class="form-control" value="<?php echo $data['password']; ?>">
					<label>Jenis Kelamin</label>
					<select name="jk_user" class="form-control" value="<?php echo $data['jk_user']; ?>">
						<option value="L">Laki Laki</option>
						<option value="P">Perempuan</option>
					</select>
					<label>No Telpon</label>
					<input type="text" name="no_tlp" placeholder="" class="form-control" value="<?php echo $data['no_tlp']; ?>">
					<label>Alamat</label>
					<input type="text" name="almt_user" placeholder="" class="form-control" value="<?php echo $data['almt_user']; ?>">
					<label>Departermen</label>
					<input type="text" name="nm_departemen" placeholder="" class="form-control" value="<?php echo $data['nm_departemen']; ?>">
					<label>Role</label>
					<select name='role'class="form-control" value="<?php echo $data['role']; ?>">
						<option value="1">Super Admin</option>
						<option value="2">Admin</option>
						<option value="3">Kasir</option>
						<option value="4">Waiters</option>
						<option value="5">Dapur</option>
						<option value="6">Barista</option>
					</select>
				
				</div>
				<div class="form-group">
					<input type="Submit" name="simpan" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
	<?php } ?>
	
</div>