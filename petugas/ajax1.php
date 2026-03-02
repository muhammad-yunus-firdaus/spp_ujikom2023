<?php 
	include "../koneksi.php";

	//variabel yg dikirim ke pembayaran.php
	$nisn = $_GET['nisn'];

	//mengambil data
	$query = mysqli_query($koneksi,"select siswa.nisn,siswa.nama,kelas.nama_kelas,kelas.kompetensi_keahlian from siswa inner join kelas on siswa.id_kelas=kelas.id_kelas where nisn='$nisn'");
	$userid = mysqli_fetch_array($query);

	$data = array(
		'nisn'	=> @$userid['nisn'],
		'nama'	=> @$userid['nama'],
		'nama_kelas'	=> @$userid['nama_kelas'],
		'kompetensi_keahlian'	=>@$userid['kompetensi_keahlian'],);

	//tampil data
	echo json_encode($data);
?>