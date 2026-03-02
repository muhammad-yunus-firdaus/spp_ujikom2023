<?php
	session_start();
	include "../koneksi.php";

	$id_pembayaran = $_GET['id_pembayaran'];
	mysqli_query($koneksi,"delete from pembayaran where id_pembayaran=$id_pembayaran");
	header("location:history_pembayaran.php");

?>