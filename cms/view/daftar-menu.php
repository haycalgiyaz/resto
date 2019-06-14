<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Daftar Menu</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <a href="index.php?page=input-menu" class="btn btn-primary">Tambah Menu</a>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Data Table</strong>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>Image</td>
                        <td>Nama Menu</td>
                        <td>Lokasi</td>
                        <td>Harga</td>
                        <td>Aksi</td>
                    </tr>
                </thead>

                <tbody>
                <?php while ($data = mysqli_fetch_array($query)){ ?>
                    <tr>
                        <td style="width: 15%"><img src="images/uploads/<?php echo $data['img_url']; ?>" style="width: 100%"></td>
                        <td><?php echo $data['nm_menu']; ?></td>
                        <td><?php echo $data['location']; ?></td>
                        <td>Rp. <?php echo $data['harga']; ?></td>
                        <td><a href="index.php?page=edit-menu&id=<?php echo $data['id_menu']; ?>" class="btn btn-warning" style="color: white">Edit</a><a href="index.php?page=hapus-menu&id=<?php echo $data['id_menu']; ?>" class="btn btn-danger">Hapus</a></td>
                    </tr>
                <?php } ?>

                </table>
        </div>
            
        </div>
    </div>
</div>
