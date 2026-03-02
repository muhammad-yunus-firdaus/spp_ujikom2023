<?php
	session_start();
	include "../koneksi.php";

	if(isset($_POST['edit'])){
		$id_kelas = $_POST['id_kelas'];
		$nama_kelas = $_POST['nama_kelas'];
		$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

		// Update data kelas
		$query = mysqli_query($koneksi, "UPDATE kelas SET 
										 nama_kelas = '$nama_kelas', 
										 kompetensi_keahlian = '$kompetensi_keahlian' 
										 WHERE id_kelas = '$id_kelas'");
		
		if($query){
			header("location:kelas.php?pesan=edit_berhasil");
		} else {
			header("location:edit_kelas.php?id_kelas=$id_kelas&pesan=edit_gagal");
		}
	} else {
		header("location:kelas.php");
	}
?>
