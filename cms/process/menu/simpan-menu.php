<?php 

include '../koneksi.php';
$date = date("Y-m-d h:i:s");

if ($_POST['act'] == 'simpan') 
{
	
	$nm = $_POST['nm_menu'];
	$harga = $_POST['harga'];
	$kategori = $_POST['kategori'];
	$desc_menu = $_POST['desc_menu'];
	$location = $_POST['location'];
	$is_publish = isset($_POST['is_publish'])? $_POST['is_publish'] : 0;

	$foto = $_FILES['img_url']['name'];
	$tmp = $_FILES['img_url']['tmp_name'];
	
	// ======================================================================
	// simpan gambar
	// ======================================================================

	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$fotobaru = date('dmYHis').$foto;
	// Set path folder tempat menyimpan fotonya
	$path = "../../images/uploads/".$fotobaru;
	// Proses upload
	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		// Proses simpan ke Database
		$sql = "INSERT INTO tb_menu values('','$nm', '$harga', '$kategori', '', '$fotobaru', '$desc_menu', '$location', '$is_publish', '$date', '$date')";
		$query = mysqli_query($con, $sql); // Eksekusi/ Jalankan query dari variabel $query
		if($query){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
			header("location: ../../index.php?page=daftar-menu"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.<br>";
			var_dump($con);

		}
	}else{
		// Jika gambar gagal diupload, Lakukan :
  		echo "Maaf, Gambar gagal untuk diupload.";
	}

}
elseif ($_POST['act'] == 'edit') 
{
	$nm = $_POST['nm_menu'];
	$id = $_POST['id'];
	$harga = $_POST['harga'];
	$kategori = $_POST['kategori'];
	$desc_menu = $_POST['desc_menu'];
	$location = $_POST['location'];
	$is_publish = isset($_POST['is_publish'])? $_POST['is_publish'] : 0;

	$foto = $_FILES['img_url']['name'];
	
	if ($foto) {
		// die('stop');
		# code...
		// ======================================================================
		// simpan gambar
		// ======================================================================

		// Rename nama fotonya dengan menambahkan tanggal dan jam upload
		$tmp = $_FILES['img_url']['tmp_name'];
		$fotobaru = date('dmYHis').$foto;
		// Set path folder tempat menyimpan fotonya
		$path = "../../images/uploads/".$fotobaru;
		// Proses upload
		if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
			// Proses simpan ke Database
			$sql = "UPDATE tb_menu set nm_menu = '$nm', harga = '$harga', kategori = '$kategori', img_url = '$fotobaru', desc_menu = '$desc_menu', location = '$location', is_publish = '$is_publish', updated_at = '$date' where id_menu = '$id'";
			// var_dump($sql);
			$query = mysqli_query($con, $sql); // Eksekusi/ Jalankan query dari variabel $query
			if($query){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
				header("location: ../../index.php?page=daftar-menu"); // Redirect ke halaman index.php
			}else{
				// Jika Gagal, Lakukan :
				echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.<br>";
				var_dump($con);

			}
		}else{
			// Jika gambar gagal diupload, Lakukan :
	  		echo "Maaf, Gambar gagal untuk diupload.";
		}
	}else{
		$sql = "UPDATE tb_menu set nm_menu = '$nm', harga = '$harga', kategori = '$kategori', desc_menu = '$desc_menu', location = '$location', is_publish = '$is_publish', updated_at = '$date' where id_menu = '$id'";
		$query = mysqli_query($con, $sql); // Eksekusi/ Jalankan query dari variabel $query
		if($query){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
			header("location: ../../index.php?page=daftar-menu"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.<br>";
			var_dump($con);

		}
	}
	
}
 ?>