<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Daftar User</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <a href="index.php?page=input-user" class="btn btn-primary">Tambah User</a>
        </div>
    </div>
</div>

<!-- <div class="container"> -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Data Table</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>No User</td>
                            <td>Nama </td>
                            <td>Username</td>
                            <td>Jenis Kelamin</td>
                            <td>Nama Departemen</td>
                            <td>Hak Akses</td>
                            <td>Created At</td>
                            <td>Action</td>
                        </tr>
                    </thead>

                    <tbody>
                    <?php while ($data = mysqli_fetch_array($sql)){ ?>
                        <tr>
                            <td><?php echo $data['id_user']; ?></td>
                            <td><?php echo $data['nm_user']; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['jk_user']; ?></td>
                            <td><?php echo $data['nm_departemen']; ?></td>
                            <td><?php echo $data['role']; ?></td>
                            <td><?php echo $data['created_at']; ?></td>
                            <td><a href="index.php?page=edit-user&id=<?php echo $data['id_user']; ?>" class="btn btn-warning" style="color: white">Edit</a><a href="index.php?page=hapus-user&id=<?php echo $data['id_user']; ?>" class="btn btn-danger">Hapus</a></td>
                            <?php } ?>
                        </tbody>
                    </table>
            </div>
                
            </div>
        </div>
    </div>

<!-- </div> -->

