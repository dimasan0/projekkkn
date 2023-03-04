<h2>Tambah Data Galeri</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi">
    </div>
    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" name="judul">
    </div>
    <button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php
include "koneksi.php";
if (isset($_POST['save']))
{
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../potensi/".$nama);
    $koneksi->query("INSERT INTO potensi
        (gambar,deskripsi,judul)
        VALUES ('$nama','$_POST[deskripsi]','$_POST[judul]')");
    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equipv='refresh' content='1;url=index.php?halaman=kelolapotensi'>";
}
?>