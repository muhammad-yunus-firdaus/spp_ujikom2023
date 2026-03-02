<?php
	session_start();
	include "../koneksi.php";

	if(isset($_POST['tambah'])){
		$nisn = $_POST['nisn'];
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$id_kelas = $_POST['id_kelas'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		$id_spp = $_POST['id_spp'];

		// Cek apakah NISN sudah ada
		$cek_nisn = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn = '$nisn'");
		if(mysqli_num_rows($cek_nisn) > 0){
			header("location:tambah_data_siswa.php?pesan=nisn_sudah_ada");
		} else {
			// Insert data siswa baru
			$query = mysqli_query($koneksi, "INSERT INTO siswa (nisn, nis, nama, id_kelas, alamat, no_telp, id_spp) 
											 VALUES ('$nisn', '$nis', '$nama', '$id_kelas', '$alamat', '$no_telp', '$id_spp')");
			
			if($query){
				header("location:siswa.php?pesan=tambah_berhasil");
			} else {
				header("location:tambah_data_siswa.php?pesan=tambah_gagal");
			}
		}
	} else {
		header("location:tambah_data_siswa.php");
	}
?>
