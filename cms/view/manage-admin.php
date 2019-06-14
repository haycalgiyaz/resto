<div class="breadcrumbs">
    <div class="col-sm-6">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Manage Administrator </h1>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="page-header float-right">
            <div class="page-title">
                <a class="btn btn-primary" href="index.php?page=tambah-admin"><span class="ti ti-plus"></span> Tambah Admin</a>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin:2%; padding: 3%; background-color: white">
	<table id="example" class="display">
		<thead>
			<tr>
			    <td>Id User</td>
			    <td>Nama </td>
			    <td>Username</td>
			    <td>Hak Akses</td>
			    <td>Created At</td>
			    <td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php  while ($data = mysqli_fetch_array($query)) {?>
				<tr>
					<td><?php echo $data['id_admin']; ?></td>
					<td><?php echo $data['nama_admin']; ?></td>
					<td><?php echo $data['username']; ?></td>
					<td>x</td>
					<td><?php echo $data['created_at']; ?></td>
					<td><a href="index.php?page=edit-admin&id=<?php echo $data['id_admin']; ?>" class="btn btn-warning" style="color: white">Edit</a><a href="index.php?page=hapus-admin&id=<?php echo $data['id_user']; ?>" class="btn btn-danger">Hapus</a></td>
				</tr>
			<?php } ?>
		</tbody>

	</table>
</div>


