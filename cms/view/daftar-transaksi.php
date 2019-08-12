<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Daftar Transaksi</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <!-- <a href="index.php?page=input-meja" class="btn btn-primary">Tambah Meja</a> -->
        </div>
    </div> 
</div>

<div class="col-md-2">
	
</div>
<div class="col-md-8">
    <h1>Daftar Transaksi</h1>
    <table id="example" class="table table-default" width="100%">
    	<br>
    	<thead>
    		<tr>
    			<td>No</td>
    			<td>Nama Meja</td>
                <td>Service</td>
    			<td>Grand Total</td>
                <td>Status</td>
                <td>Tgl</td>
    			<td>Action</td>
    		</tr>
    	</thead>

    	<tbody>
    		<?php while ($data = mysqli_fetch_array($query)) { ?>
            <?php 
                $status = $data['status'];
                if (empty($status)) {
                    $label = 'warning';
                    $stat = 'Menunggu';
                }elseif ($status == 1) {
                    $label = 'success';
                    $stat = 'Bill Closed';
                }
             ?>
    		<tr>
    			<td><?php echo $data['id_transaksi']; ?></td>
    			<td><?php echo $data['nm_meja']; ?></td>
                <td><?php echo $data['service']; ?></td>
    			<td><?php echo $data['total_akhir']; ?></td>
    			<td><label class="label label-<?php echo $label ?>"></label> <?php echo $stat ?></td>
                <td><?php echo $data['created_at']; ?></td>
    			<td><a href="index.php?page=view-transaksi&id=<?php echo $data['id_transaksi']; ?>" class="btn btn-warning" style="color: white">View</a></td>
    		</tr>
    		<?php } ?>
    	</tbody>
    </table>
</div>