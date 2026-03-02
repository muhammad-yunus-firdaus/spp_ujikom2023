<?php
    session_start();
    include "../koneksi.php";

    if($_SESSION['status']== ""){
        header("location:login.php?pesan=belum_login");
    }

    $id_petugas = $_GET['id_petugas'];
    $query = "select *from petugas where id_petugas = '$id_petugas'";
    $data = mysqli_query($koneksi,$query);
    $result = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Data - SPP Online</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                            	
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Petugas</h1>
                            </div>
                            <form class="user" action="proses_edit_petugas.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="id_petugas" value="<?php echo $result['id_petugas']?>" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" value="<?php echo $result['username'];?>">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" value="<?php echo $result['password'];?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama_petugas" 
                                        value="<?php echo $result['nama_petugas'];?>">
                                </div>
                                 <div class="form-group">
                                    <select name="level" class="form-control">
                                    	<option value="Admin">Admin</option>
                                    	<option value="Petugas">Petugas</option>
                                    </select>
                                </div>
                                <input class="btn btn-primary btn_user btn-block" type="submit" name="edit" value="Edit Data">
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>


</html>