<?php
session_start();
if ( $_SESSION['id_transaksi'] !== '1531890361' || !isset($_SESSION['login']) ) {
    // header("Location: http://localhost/physics_expo/page/admin/login-admin.php");
    header("Location: http://physicsexpo.web.id/page/dashboard");
    exit;
}

require 'functions.php';

$nama_akun = $_SESSION['nama'];
$id_transaksi = $_SESSION['id_transaksi'];
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Physics Expo</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color: #07172e;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="assets/img/logoNavbar.png" alt=""></a> 
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
        
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation" style="background-color: #040d1a">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu" >
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive" style="height: 3cm" />
					</li>
				    <!-- style="background-color: #040d1a" -->
					
                    <li>
                        <a href="index.php"><i class="fa fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="?page=peserta"><i class="fa fa-3x"></i> Data Peserta</a>
                    </li>
                    <li>
                        <a href="?page=tim"><i class="fa fa-3x"></i> Data Tim</a>
                    </li>
                    <li>
                        <a href="?page=sekolah"><i class="fa fa-3x"></i> Data Institusi</a>
                    </li>
                    <li>
                        <a href="?page=pendamping"><i class="fa fa-3x"></i> Data Pendamping</a>
                    </li>
                    <li>
                        <a href="?page=pembayaran"><i class="fa fa-3x"></i> Konfirmasi Pembayaran</a>
                    </li>                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <!--  Body  -->
                    <?php 
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                     
                        if ($page == "peserta") {
                            include "page/peserta.php";
                        }
                        elseif ($page == "sekolah") {
                            include "page/sekolah.php";
                        }
                        elseif ($page == "pendamping") {
                            include "page/pendamping.php";
                        }
                        elseif ($page == "pembayaran") {
                            include "page/pembayaran.php";
                        }
                        elseif ($page == "update") {
                            include "page/page.php";
                        }
                        elseif ($page == "tim") {
                            include "page/tim.php";
                        }
                    } else {?>
                        <p>SELAMAT DATANG</p>
                        <p style="margin-top: -20px; font-size: 20pt"><?= $_SESSION['nama']; ?></p>
                    <?php }; ?>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                
                </div>
                      
            </div>
        </div>     
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS --> 
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
