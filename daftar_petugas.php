<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Akun SPP Online</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

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
                            	<img src="asset/icon/petugas.png" width="100px" height="100px"><br>
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun SPP Online</h1>
                            </div>
                            <form class="user" action="proses_daftar.php" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" name="username" 
                                            placeholder="Username">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" name="password" 
                                            placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama_petugas" 
                                        placeholder="Nama Petugas">
                                </div>
                                 <div class="form-group">
                                    <select name="level" class="form-control">
                                    	<option value="Admin">Admin</option>
                                    	<option value="Petugas">Petugas</option>
                                    </select>
                                </div>
                                <input class="btn btn-primary btn_user btn-block" type="submit" name="daftar" value="Daftar Akun">
                              </form>
                            <div class="text-center mt-3">
                                <a class="small" href="login_petugas.php">Sudah Punya Akun? Silahkan Login!</a>
                            </div>
                            <div class="text-center mt-2">
                                <a class="small" href="index.php"><i class="fas fa-arrow-left"></i> Kembali ke Login Siswa</a>
                            </div>
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