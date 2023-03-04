<h2>Ubah Data</h2>

<?php
include "koneksi.php";
$ambil = $koneksi->query("SELECT * FROM potensi WHERE id = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <img src="../potensi/<?php echo $pecah['gambar'] ?>" width="200">
    </div>
    <div class="form-group">
        <label>Ganti Gambar</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" name="judul">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control" value="<?php echo $pecah['deskripsi']; ?>">
    </div>
    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah']))
{
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    //jika foto diubah
    if (!empty($lokasifoto))
    {
        move_uploaded_file($lokasifoto, "../potensi/$namafoto");

        $koneksi->query("UPDATE potensi SET gambar='$namafoto',
            deskripsi ='$_POST[deskripsi]' , judul ='$_POST[judul]'
            WHERE id='$_GET[id]'");
    }
    else
    {
        $koneksi->query("UPDATE potensi SET deskripsi ='$_POST[deskripsi]'
            , judul ='$_POST[judul]'
            WHERE id='$_GET[id]'");
    }
    echo "<script>alert('Data Telah Diubah');</script>";
    echo "<script>location='index.php?halaman=kelolapotensi';</script>";
}