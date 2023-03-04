<h2>Tambah Data Galeri</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" name="judul">
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php
include "koneksi.php";
if (isset($_POST['save']))
{
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../galeri/".$nama);
    $koneksi->query("INSERT INTO galeri
        (judul, gambar)
        VALUES ('$_POST[judul]','$nama')");
    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equipv='refresh' content='1;url=index.php?halaman=kelolagaleri'>";
}
?>