<?php
include "koneksi.php";
$ambil = $koneksi->query("SELECT * FROM kegiatan WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto = $pecah['gambar'];
if (file_exists("../kegiatan/$foto"));
{
    unlink("../kegiatan/$foto");
}
$koneksi->query("DELETE FROM kegiatan WHERE id='$_GET[id]'");

echo "<sript>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=kelolakegiatan';</script>";
?>