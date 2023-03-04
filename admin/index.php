<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "tokobuku");

if (!isset($_SESSION['admin']))
{
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Happybook Store</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color: #F8DE7E;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a> 
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"><a href="index.php?halaman=logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation" style="background-color: #F8DE7E;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=kelolakegiatan"><i class="fa fa-tasks"></i> Kelola Kegiatan</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=kelolagaleri"><i class="fa fa-dashboard"></i> Kelola Galeri</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=kelolapotensi"><i class="fa fa-dashboard"></i> Kelola Potensi</a>
                    </li>
                    <li>
                    </li>				
				</ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="kelolakegiatan")
                    {
                        include 'kelolakegiatan.php';
                    }
                    elseif($_GET['halaman']=="kelolagaleri")
                    {
                        include 'kelolagaleri.php';
                    }
                    elseif($_GET['halaman']=="kelolapotensi")
                    {
                        include 'kelolapotensi.php';
                    }
                    elseif($_GET['halaman']=="tambahkegiatan")
                    {
                        include 'tambahkegiatan.php';
                    }
                    elseif($_GET['halaman']=="tambahgaleri")
                    {
                        include 'tambahgaleri.php';
                    }
                    elseif($_GET['halaman']=="tambahpotensi")
                    {
                        include 'tambahpotensi.php';
                    }
                    elseif($_GET['halaman']=="hapusdatakegiatan")
                    {
                        include 'hapusdatakegiatan.php';
                    }
                    elseif($_GET['halaman']=="hapusdatagaleri")
                    {
                        include 'hapusdatagaleri.php';
                    }
                    elseif($_GET['halaman']=="hapusdatapotensi")
                    {
                        include 'hapusdatapotensi.php';
                    }
                    elseif($_GET['halaman']=="ubahdatakegiatan")
                    {
                        include 'ubahdatakegiatan.php';
                    }
                    elseif($_GET['halaman']=="ubahdatagaleri")
                    {
                        include 'ubahdatagaleri.php';
                    }
                    elseif($_GET['halaman']=="ubahdatapotensi")
                    {
                        include 'ubahdatapotensi.php';
                    }
                    elseif($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    } 
                }
                else
                {
                    include 'home.php';
                }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <!-- /. WRAPPER  -->
</body>
</html>
