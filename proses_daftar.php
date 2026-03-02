<?php
	include "koneksi.php";

	if(isset($_POST['daftar'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nama_petugas = $_POST['nama_petugas'];
		$level = $_POST['level'];

		// Cek apakah username sudah ada
		$cek_username = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username = '$username'");
		if(mysqli_num_rows($cek_username) > 0){
			header("location:daftar_petugas.php?pesan=username_sudah_ada");
		} else {
			// Insert data petugas baru
			$query = mysqli_query($koneksi, "INSERT INTO petugas (username, password, nama_petugas, level) 
											 VALUES ('$username', '$password', '$nama_petugas', '$level')");
			
			if($query){
				header("location:login_petugas.php?pesan=daftar_berhasil");
			} else {
				header("location:daftar_petugas.php?pesan=daftar_gagal");
			}
		}
	} else {
		header("location:daftar_petugas.php");
	}
?>
