<?php
include "koneksi.php";
$ambil = $koneksi->query("SELECT * FROM potensi WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto = $pecah['gambar'];
if (file_exists("../potensi/$foto"));
{
    unlink("../potensi/$foto");
}
$koneksi->query("DELETE FROM potensi WHERE id='$_GET[id]'");

echo "<sript>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=kelolapotensi';</script>";
?>