<?php
	session_start();
	include "../koneksi.php";

	if(isset($_POST['tambah'])){
		$id_petugas = $_POST['id_petugas'];
		$nisn = $_POST['nisn'];
		$tgl_bayar = $_POST['tgl_bayar'];
		$bln_dibayar = $_POST['bln_dibayar'];
		$tahun = $_POST['tahun'];
		$id_spp = $_POST['id_spp'];
		$nominal = $_POST['nominal'];

		// Cek apakah siswa ada
		$cek_siswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn = '$nisn'");
		if(mysqli_num_rows($cek_siswa) == 0){
			header("location:pembayaran.php?pesan=siswa_tidak_ditemukan");
			exit();
		}

		$data_siswa = mysqli_fetch_array($cek_siswa);
		
		// Cek apakah SPP sesuai dengan tahun siswa
		$cek_spp = mysqli_query($koneksi, "SELECT * FROM spp WHERE id_spp = '$id_spp' AND tahun = '$tahun'");
		if(mysqli_num_rows($cek_spp) == 0){
			header("location:pembayaran.php?pesan=gagal_spp");
			exit();
		}

		// Cek apakah siswa sudah membayar pada bulan tersebut di tahun yang sama
		$cek_bulan = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE nisn = '$nisn' AND bulan_dibayar = '$bln_dibayar' AND tahun_dibayar = '$tahun'");
		if(mysqli_num_rows($cek_bulan) > 0){
			header("location:pembayaran.php?pesan=gagal_bulan");
			exit();
		}

		// Insert data pembayaran
		$query = mysqli_query($koneksi, "INSERT INTO pembayaran (id_petugas, nisn, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar) 
										 VALUES ('$id_petugas', '$nisn', '$tgl_bayar', '$bln_dibayar', '$tahun', '$id_spp', '$nominal')");
		
		if($query){
			header("location:history_pembayaran.php?pesan=pembayaran_berhasil");
		} else {
			header("location:pembayaran.php?pesan=pembayaran_gagal");
		}
	} else {
		header("location:pembayaran.php");
	}
?>
