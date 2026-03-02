<?php
	session_start();
	include "../koneksi.php";

	if(isset($_POST['edit'])){
		$nisn = $_POST['nisn'];
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$id_kelas = $_POST['id_kelas'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		$id_spp = $_POST['id_spp'];

		// Update data siswa
		$query = mysqli_query($koneksi, "UPDATE siswa SET 
										 nis = '$nis', 
										 nama = '$nama', 
										 id_kelas = '$id_kelas', 
										 alamat = '$alamat', 
										 no_telp = '$no_telp', 
										 id_spp = '$id_spp' 
										 WHERE nisn = '$nisn'");
		
		if($query){
			header("location:siswa.php?pesan=edit_berhasil");
		} else {
			header("location:edit_siswa.php?nisn=$nisn&pesan=edit_gagal");
		}
	} else {
		header("location:siswa.php");
	}
?>
