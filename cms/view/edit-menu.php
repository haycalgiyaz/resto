<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit Menu</h1>
            </div>
        </div>
    </div>
</div>

<div class="container" style="width:95%; margin: 2%; padding: 3%; background-color: white; overflow: hidden">
    <p> <b>Ubah Menu di Form Berikut</b></p>
    <form action="process/menu/simpan-menu.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="act" value="edit">
        <input type="hidden" name="id" value="<?php echo $data['id_menu'] ?>">
        <div class="col-md-8" >
            <div class="form-group">
                <label>Nama Menu</label>
                <input type="text" name="nm_menu" class="form-control" placeholder="Ex: Nasi Bakar" value="<?php echo $data['nm_menu'] ?>" required>
            </div>
            <div class="form-group">
                <div class="col-md-6" style="padding-left: 0px">
                    <label>Harga (Per Porsi)</label>
                    Rp. <input type="number" name="harga" class="form-control" placeholder="Ex: 20000" value="<?php echo $data['harga'] ?>" required>
                </div>
                <div class="col-md-6" style="padding-right: 0px">
                    <label>Kaegori</label>
                    <select name="kategori" class="form-control">
                        <option>--Pilih Kategori--</option>
                        <option value="1" <?php echo $data['kategori'] == 1 ? 'selected':''?> >Makanan</option>
                        <option value="2" <?php echo $data['kategori'] == 2 ? 'selected':''?>>Minuman</option>
                        <option value="3" <?php echo $data['kategori'] == 3 ? 'selected':''?>>Camilan</option>
                        <option value="4" <?php echo $data['kategori'] == 4 ? 'selected':''?>>Extensi</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Deskripsi Menu</label>
                <textarea name="desc_menu" class="form-control" placeholder="Ex: Nasi dengan isi suwiran daging bebek berbumbu khas, dibungkus dengan daun pisang, kemudian dibakar dalam panggangan selama beberapa menit. Aroma Harum menambah cita rasa dari nasi bakar ini" rows="8"><?php echo $data['desc_menu'] ?></textarea>
            </div>
            <div class="form-group">
                <label>Upload Foto</label>
                <img src="images/uploads/<?php echo $data['img_url'] ?>" style="width: 100%">
                <input type="file" name="img_url">
            </div>
            <div class="form-group">
                <label>Lokasi</label>
                <select name="location" class="form-control">
                    <option>-Pilih Lokasi-</option>
                    <option value="dapur" <?php echo $data['location'] == 'dapur' ? 'selected':''?>>Dapur</option>
                    <option value="bar" <?php echo $data['location'] == 'bar' ? 'selected':''?>>Bar</option>
                </select>
            </div>
            <div class="form-group">
                <label>Publish?</label>
                <br>
                <label class="switch switch-default switch-success-outline-alt mr-2">
                    <input type="checkbox" class="switch-input" name="is_publish" value="1" <?php echo $data['is_publish'] == 1 ? 'checked':''?>> <span class="switch-label"></span> <span class="switch-handle"></span></label>
            </div>

            <div class="form-group">
                <input type="submit" name="simpan" class="btn btn-success btn-lg" value="Simpan Perubahan?">
                <a href="index.php?page=daftar-menu" class="btn btn-danger btn-lg">Cancel</a>
            </div>
        </div>
    </form>
</div>