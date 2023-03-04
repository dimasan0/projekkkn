<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <nav class="navbar">
      <!-- LOGO -->
      <img class="logo" src="images/logoCrop.png" alt="logo" />

      <!-- NAVIGATION MENU -->
      <ul class="nav-links">
        <!-- USING CHECKBOX HACK -->
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>

        <!-- NAVIGATION MENUS -->
        <div class="menu">
          <li><a href="index.php">HOME</a></li>
          <li><a href="index.php?halaman=kegiatan">KEGIATAN DESA</a></li>
          <li><a href="index.php?halaman=galeri">GALERI DESA</a></li>
          <li><a href="admin/index.php?halaman=admin">MENU ADMIN</a></li>
        </div>
      </ul>
    </nav>

    <?php if (isset($_GET['halaman'])) {
        if ($_GET['halaman']=="kegiatan") {
            include 'kegiatan.php';
        }
        elseif($_GET['halaman']=="galeri") {
            include 'galeri.php';
        }
        elseif($_GET['halaman']=="admin") {
            include 'admin/login.php';
        }
    }
    else {
        include 'home.php';
    } ?>

    <!-- Footer -->
    <div class="footer">
    <h4>Kontak</h4>
    <footer>
        <p>Email</p>
        <p>No telpon</p>
    </footer>
</div>
</body>
</html>