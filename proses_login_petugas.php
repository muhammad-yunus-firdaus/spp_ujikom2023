<?php
	session_start();
	include "koneksi.php";

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		// Query untuk cek login petugas
		$query = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'");
		$cek = mysqli_num_rows($query);

		if($cek > 0){
			$data = mysqli_fetch_array($query);
			$_SESSION['id_petugas'] = $data['id_petugas'];
			$_SESSION['username'] = $data['username'];
			$_SESSION['nama'] = $data['nama_petugas'];
			$_SESSION['level'] = $data['level'];
			$_SESSION['status'] = "login";

			// Redirect berdasarkan level
			if($data['level'] == 'admin'){
				header("location:admin/index.php");
			} else {
				header("location:petugas/index.php");
			}
		} else {
			header("location:login_petugas.php?pesan=login_gagal");
		}
	} else {
		header("location:login_petugas.php");
	}
?>
