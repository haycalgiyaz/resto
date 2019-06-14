<div class="container">
	<div class="col-md-12" style="background-color: white">
		<h2>Form Input Data User</h2>
		<hr>
		<div class="col-md-6">
			<form action="process/simpan-user.php" method="post">
				<div class="form-group">
					<label>Nama User</label>
					<input type="text" name="nm_user" placeholder="ketik nama disini" class="form-control" value="">
					<label>Username</label>
					<input type="text" name="username" placeholder="masukkan username disini" class="form-control" value="">
					<label>Password</label>
					<input type="password" name="password" placeholder="*********" class="form-control" value="">
					<label>Jenis Kelamin</label>
					<select name="jk_user" class="form-control">
						<option value="L">Laki Laki</option>
						<option value="P">Perempuan</option>
					</select>
					<label>No Telpon</label>
					<input type="text" name="no_tlp" placeholder="" class="form-control">
					<label>Alamat</label>
					<input type="text" name="almt_user" placeholder="" class="form-control">
					<label>Departermen</label>
					<input type="text" name="nm_departemen" placeholder="" class="form-control">
					<label>Role</label>
					<select name='role'class="form-control">
						<option value="1">Super Admin</option>
						<option value="2">Admin</option>
						<option value="3">Kasir</option>
						<option value="4">Waiters</option>
						<option value="5">Dapur</option>
						<option value="6">Barista</option>
					</select>
				
				</div>
				<div class="form-group">
					<input type="submit" name="simpan" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
	
</div>