<?php
    include "koneksi.php";
?>
<h2 style="color: black;">Data Kegiatan</h2>
<a href="index.php?halaman=tambahkegiatan" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
<br><br>

 <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        ?>
        <?php
          $ambil = $koneksi->query("SELECT * FROM kegiatan");
        ?>
        <?php
          while($pecah = $ambil->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['judul']; ?></td>
            <td><?php echo $pecah['deskripsi']; ?></td>
            <td>
                <img src="../kegiatan/<?php echo $pecah['gambar']; ?>" width="100">
            </td>
            <td>
                <a href="index.php?halaman=hapusdatakegiatan&id=<?php echo $pecah['id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                <a href="index.php?halaman=ubahdatakegiatan&id=<?php echo $pecah['id']; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Edit</a>
            </td>
        </tr>
        <?php
        $nomor++;
        ?>
        <?php
          }
        ?>
    </tbody>
</table>