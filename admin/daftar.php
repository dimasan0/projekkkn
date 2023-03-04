<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
<div class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #F8DE7E; font-family: Poppins, sans-serif;">
        <div class="row text-center">
            <div class="col-md-12">
                <br /><br />
                <h2> Desa Pesawaran : Register</h2>
                <h5>( Register admin )</h5>
                <br />
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel heading">
                        <strong> Enter Details To Register </strong>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon">Username</span>
                                <input type="text" class="form-control" name="user"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">Password</span>
                                <input type="password" class="form-control" name="pass"/>
                            </div>
                            <hr />
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btn-block" name="daftar" type="submit"><a style="color: white;" href="daftar.php"> Register </a></button>
                                <button class="btn btn-warning btn-block" name="daftar" type="submit"><a href="login.php"> Back </a></button>
                            </div>
                        </form>
                        <?php
                        include "koneksi.php";
                        if(isset($_POST['daftar'])){

                            $username = $_POST['user'];
                            $password = $_POST['pass'];

                            $query = mysqli_query($koneksi, "INSERT INTO admin(id,username,password) VALUES ('','$username','$password')");

                            echo "Data anda telah berhasil diinput, Masukkan Username dan password anda di <span><a href='login.php'><b> Disini </b></a></span>";
                            echo "<h3><a href='login.php'>Klik Disini</a>  untuk Login </h3>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>