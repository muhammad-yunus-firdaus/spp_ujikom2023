<?php
	session_start();
	include "../koneksi.php";

	if(isset($_POST['tambah'])){
		$tahun = $_POST['tahun'];
		$nominal = $_POST['nominal'];

		// Cek apakah tahun sudah ada
		$cek_tahun = mysqli_query($koneksi, "SELECT * FROM spp WHERE tahun = '$tahun'");
		if(mysqli_num_rows($cek_tahun) > 0){
			header("location:tambah_data_spp.php?pesan=tahun_sudah_ada");
		} else {
			// Insert data SPP baru
			$query = mysqli_query($koneksi, "INSERT INTO spp (tahun, nominal) 
											 VALUES ('$tahun', '$nominal')");
			
			if($query){
				header("location:spp.php?pesan=tambah_berhasil");
			} else {
				header("location:tambah_data_spp.php?pesan=tambah_gagal");
			}
		}
	} else {
		header("location:tambah_data_spp.php");
	}
?>
