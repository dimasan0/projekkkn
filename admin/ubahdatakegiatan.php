<h2>Ubah Data</h2>

<?php
include "koneksi.php";
$ambil = $koneksi->query("SELECT * FROM kegiatan WHERE id = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" value="<?php echo $pecah['judul']; ?>">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="10">
            <?php
            echo $pecah['deskripsi'];
            ?>
        </textarea>
    </div>
    <div class="form-group">
        <img src="../kegiatan/<?php echo $pecah['gambar'] ?>" width="200">
    </div>
    <div class="form-group">
        <label>Ganti Gambar</label>
        <input type="file" class="form-control" name="foto">
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
        move_uploaded_file($lokasifoto, "../kegiatan/$namafoto");

        $koneksi->query("UPDATE kegiatan SET judul ='$_POST[judul]',
            deskripsi='$_POST[deskripsi]',gambar='$namafoto'
            WHERE id='$_GET[id]'");
    }
    else
    {
        $koneksi->query("UPDATE kegiatan SET judul ='$_POST[judul]',
            deskripsi='$_POST[deskripsi]'
            WHERE id='$_GET[id]'");
    }
    echo "<script>alert('Data Telah Diubah');</script>";
    echo "<script>location='index.php?halaman=kelolakegiatan';</script>";
}