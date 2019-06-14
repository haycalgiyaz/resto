<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Daftar Meja</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <a href="index.php?page=input-meja" class="btn btn-primary">Tambah Meja</a>
        </div>
    </div> 
</div>

<div class="col-md-2">
	
</div>
<div class="col-md-8">
    <h1>Tabel Daftar Meja</h1>
    <table id="example" class="display" width="100%">
    	<br>
    	<thead>
    		<tr>
    			<td>No</td>
    			<td>Nama Meja</td>
    			<td>Total Saji</td>
    			<td>Created At</td>
    			<td>Action</td>
    		</tr>
    	</thead>

    	<tbody>
    		<?php while ($data = mysqli_fetch_array($sql)) { ?>
    		<tr>
    			<td><?php echo $data['id_meja']; ?></td>
    			<td><?php echo $data['nm_meja']; ?></td>
    			<td><?php echo $data['total_serve']; ?></td>
    			<td><?php echo $data['created_at']; ?></td>
    			<td><a href="index.php?page=edit-meja&id=<?php echo $data['id_meja']; ?>" class="btn btn-warning" style="color: white">Edit</a><a href="index.php?page=hapus-meja&id=<?php echo $data['id_meja']; ?>" class="btn btn-danger">Hapus</a></td>
    		</tr>
    		<?php } ?>
    	</tbody>
    </table>
</div>