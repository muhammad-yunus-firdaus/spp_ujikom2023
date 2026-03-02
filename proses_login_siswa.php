<?php
	session_start();
	include "koneksi.php";

	if(isset($_POST['login2'])){
		$nisn = $_POST['nisn'];
		$password = $_POST['password'];

		// Query untuk cek login siswa (password = nisn untuk siswa)
		$query = mysqli_query($koneksi, "SELECT siswa.*, kelas.nama_kelas, kelas.kompetensi_keahlian 
										 FROM siswa 
										 INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas 
										 WHERE nisn = '$nisn'");
		$cek = mysqli_num_rows($query);

		if($cek > 0){
			$data = mysqli_fetch_array($query);
			// Untuk siswa, password default adalah NISN nya
			if($password == $nisn){
				$_SESSION['nisn'] = $data['nisn'];
				$_SESSION['nis'] = $data['nis'];
				$_SESSION['nama'] = $data['nama'];
				$_SESSION['id_kelas'] = $data['id_kelas'];
				$_SESSION['nama_kelas'] = $data['nama_kelas'];
				$_SESSION['kompetensi_keahlian'] = $data['kompetensi_keahlian'];
				$_SESSION['alamat'] = $data['alamat'];
				$_SESSION['no_telp'] = $data['no_telp'];
				$_SESSION['id_spp'] = $data['id_spp'];
				$_SESSION['status'] = "login";
				$_SESSION['level'] = "siswa";

				header("location:siswa.php");
			} else {
				header("location:index.php?pesan=password_salah");
			}
		} else {
			header("location:index.php?pesan=nisn_tidak_ditemukan");
		}
	} else if(isset($_POST['login1'])){
		// Redirect ke halaman login petugas
		header("location:login_petugas.php");
	} else {
		header("location:index.php");
	}
?>
