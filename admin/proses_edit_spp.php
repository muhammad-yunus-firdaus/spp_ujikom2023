<?php
	session_start();
	include "../koneksi.php";

	if(isset($_POST['edit'])){
		$id_spp = $_POST['id_spp'];
		$tahun = $_POST['tahun'];
		$nominal = $_POST['nominal'];

		// Update data SPP
		$query = mysqli_query($koneksi, "UPDATE spp SET 
										 tahun = '$tahun', 
										 nominal = '$nominal' 
										 WHERE id_spp = '$id_spp'");
		
		if($query){
			header("location:spp.php?pesan=edit_berhasil");
		} else {
			header("location:edit_spp.php?id_spp=$id_spp&pesan=edit_gagal");
		}
	} else {
		header("location:spp.php");
	}
?>
