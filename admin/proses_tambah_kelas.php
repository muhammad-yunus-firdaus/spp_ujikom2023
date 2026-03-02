<?php
	session_start();
	include "../koneksi.php";

	if(isset($_POST['tambah'])){
		$nama_kelas = $_POST['nama_kelas'];
		$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

		// Insert data kelas baru
		$query = mysqli_query($koneksi, "INSERT INTO kelas (nama_kelas, kompetensi_keahlian) 
										 VALUES ('$nama_kelas', '$kompetensi_keahlian')");
		
		if($query){
			header("location:kelas.php?pesan=tambah_berhasil");
		} else {
			header("location:tambah_data_kelas.php?pesan=tambah_gagal");
		}
	} else {
		header("location:tambah_data_kelas.php");
	}
?>
