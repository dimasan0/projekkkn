<?php
include "koneksi.php";
$ambil = $koneksi->query("SELECT * FROM galeri WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto = $pecah['gambar'];
if (file_exists("../galeri/$foto"));
{
    unlink("../galeri/$foto");
}
$koneksi->query("DELETE FROM galeri WHERE id='$_GET[id]'");

echo "<sript>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=kelolagaleri';</script>";
?>