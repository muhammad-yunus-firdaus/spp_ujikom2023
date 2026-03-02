<?php 
	include "../koneksi.php";

	//variabel yg dikirim ke pembayaran.php
	$tahun = $_GET['tahun'];

	//mengambil data
	$query = mysqli_query($koneksi,"select *from spp where tahun='$tahun'");
	$userid = mysqli_fetch_array($query);

	$data = array(
		'id_spp'	=> @$userid['id_spp'],
		'tahun'		=> @$userid['tahun'],
		'nominal'	=> @$userid['nominal'],);

	//tampil data
	echo json_encode($data);
?>