<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Input Menu Baru</h1>
            </div>
        </div>
    </div>
</div>

<div class="container" style="width:95%; margin: 2%; padding: 3%; background-color: white; overflow: hidden">
    <p> <b>Masukkan Produk Menu Terbaru di Form Berikut</b></p>
    <form action="process/menu/simpan-menu.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="act" value="simpan">
        <div class="col-md-8" >
            <div class="form-group">
                <label>Nama Menu</label>
                <input type="text" name="nm_menu" class="form-control" placeholder="Ex: Nasi Bakar" required>
            </div>
            <div class="form-group">
                <div class="col-md-6" style="padding-left: 0px">
                    <label>Harga (Per Porsi)</label>
                    Rp. <input type="number" name="harga" class="form-control" placeholder="Ex: 20000" required>
                </div>
                <div class="col-md-6" style="padding-right: 0px">
                    <label>Kaegori</label>
                    <select name="kategori" class="form-control">
                        <option>--Pilih Kategori--</option>
                        <option value="1">Makanan</option>
                        <option value="2">Minuman</option>
                        <option value="3">camilan</option>
                        <option value="4">Extensi</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Deskripsi Menu</label>
                <textarea name="desc_menu" class="form-control" placeholder="Ex: Nasi dengan isi suwiran daging bebek berbumbu khas, dibungkus dengan daun pisang, kemudian dibakar dalam panggangan selama beberapa menit. Aroma Harum menambah cita rasa dari nasi bakar ini" rows="8"></textarea>
            </div>
            <div class="form-group">
                <label>Upload Foto</label>
                <img src="images/dummy.jpg" style="width: 100%">
                <input type="file" name="img_url" required>
            </div>
            <div class="form-group">
                <label>Lokasi</label>
                <select name="location" class="form-control">
                    <option>-Pilih Lokasi-</option>
                    <option value="dapur">Dapur</option>
                    <option value="bar">Bar</option>
                </select>
            </div>
            <div class="form-group">
                <label>Publish?</label>
                <br>
                <label class="switch switch-default switch-success-outline-alt mr-2">
                    <input type="checkbox" class="switch-input" name="is_publish" value="1"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                
            </div>

            <div class="form-group">
                <input type="submit" name="simpan" class="btn btn-success btn-lg" value="Submit">
                <input type="reset" class="btn btn-danger btn-lg" value="cancel" ">
            </div>
        </div>
    </form>
</div>