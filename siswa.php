<?php
    session_start();
    include "koneksi.php";

    if($_SESSION['status']== ""){
        header("location:index.php?pesan=belum_login");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SPP Siswa - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="siswa.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="admin/img/home.png" height="25px" width="25px">
                </div>
                <div class="sidebar-brand-text mx-3">SPP Siswa</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="siswa.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
       

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="history_pembayaran.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>History Pembayaran</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo $_SESSION['nama'];?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="admin/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#profileModal">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard Siswa</h1>
                    </div>

                    <!-- Content Row - Profile Card -->
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Profil Siswa</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table table-borderless">
                                        <tr>
                                            <td width="200"><strong>NISN</strong></td>
                                            <td>: <?php echo $_SESSION['nisn']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>NIS</strong></td>
                                            <td>: <?php echo $_SESSION['nis']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Nama</strong></td>
                                            <td>: <?php echo $_SESSION['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Kelas</strong></td>
                                            <td>: <?php echo $_SESSION['nama_kelas']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Kompetensi Keahlian</strong></td>
                                            <td>: <?php echo $_SESSION['kompetensi_keahlian']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Alamat</strong></td>
                                            <td>: <?php echo $_SESSION['alamat']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>No. Telepon</strong></td>
                                            <td>: <?php echo $_SESSION['no_telp']; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Summary Cards -->
                        <div class="col-xl-4 col-lg-5">
                            <!-- Total Pembayaran -->
                            <div class="card border-left-success shadow mb-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <?php 
                                                $nisn = $_SESSION['nisn'];
                                                $query = mysqli_query($koneksi,"SELECT SUM(jumlah_bayar) as total_bayar FROM pembayaran WHERE nisn = '$nisn'");
                                                $data = mysqli_fetch_array($query);
                                                $total = $data['total_bayar'] ? $data['total_bayar'] : 0;
                                            ?>
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Pembayaran SPP</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?php echo number_format($total, 0, ',', '.'); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Jumlah Bulan Terbayar -->
                            <div class="card border-left-info shadow mb-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <?php 
                                                $query2 = mysqli_query($koneksi,"SELECT COUNT(id_pembayaran) as jml_bulan FROM pembayaran WHERE nisn = '$nisn'");
                                                $data2 = mysqli_fetch_array($query2);
                                            ?>
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Bulan Terbayar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data2['jml_bulan']; ?> Bulan</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tahun SPP -->
                            <div class="card border-left-primary shadow mb-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <?php 
                                                $id_spp = $_SESSION['id_spp'];
                                                $query3 = mysqli_query($koneksi,"SELECT * FROM spp WHERE id_spp = '$id_spp'");
                                                $data3 = mysqli_fetch_array($query3);
                                            ?>
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Tahun SPP Aktif</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data3['tahun']; ?></div>
                                            <small class="text-muted">Nominal: Rp. <?php echo number_format($data3['nominal'], 0, ',', '.'); ?>/bulan</small>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                       <span>Copyright &copy; SPP Online 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Profile Modal-->
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="profileModalLabel"><i class="fas fa-user mr-2"></i>Profil Siswa</h5>
                    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <img class="img-profile rounded-circle" src="admin/img/undraw_profile.svg" width="100">
                        <h4 class="mt-3"><?php echo $_SESSION['nama']; ?></h4>
                        <span class="badge badge-primary"><?php echo $_SESSION['nama_kelas']; ?></span>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th width="200" class="bg-light">NISN</th>
                            <td><?php echo $_SESSION['nisn']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg-light">NIS</th>
                            <td><?php echo $_SESSION['nis']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg-light">Nama Lengkap</th>
                            <td><?php echo $_SESSION['nama']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg-light">Kelas</th>
                            <td><?php echo $_SESSION['nama_kelas']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg-light">Kompetensi Keahlian</th>
                            <td><?php echo $_SESSION['kompetensi_keahlian']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg-light">Alamat</th>
                            <td><?php echo $_SESSION['alamat']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg-light">No. Telepon</th>
                            <td><?php echo $_SESSION['no_telp']; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" untuk keluar dari aplikasi ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="logout_siswa.php">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>