<?php
	session_start();
	include "../koneksi.php";

	if(isset($_POST['edit'])){
		$id_petugas = $_POST['id_petugas'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nama_petugas = $_POST['nama_petugas'];
		$level = $_POST['level'];

		// Update data petugas
		$query = mysqli_query($koneksi, "UPDATE petugas SET 
										 username = '$username', 
										 password = '$password', 
										 nama_petugas = '$nama_petugas', 
										 level = '$level' 
										 WHERE id_petugas = '$id_petugas'");
		
		if($query){
			header("location:petugas.php?pesan=edit_berhasil");
		} else {
			header("location:edit_petugas.php?id_petugas=$id_petugas&pesan=edit_gagal");
		}
	} else {
		header("location:petugas.php");
	}
?>
