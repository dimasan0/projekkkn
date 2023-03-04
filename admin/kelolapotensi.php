<?php
    include "koneksi.php";
?>
<h2 style="color: black;">Data Potensi Desa</h2>
<a href="index.php?halaman=tambahpotensi" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
<br><br>

 <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        ?>
        <?php
          $ambil = $koneksi->query("SELECT * FROM potensi");
        ?>
        <?php
          while($pecah = $ambil->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td>
                <img src="../potensi/<?php echo $pecah['gambar']; ?>" width="100">
            </td>
            <td><?php echo $pecah['judul']; ?></td>
            <td><?php echo $pecah['deskripsi']; ?></td>
            <td>
                <a href="index.php?halaman=hapusdatapotensi&id=<?php echo $pecah['id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                <a href="index.php?halaman=ubahdatapotensi&id=<?php echo $pecah['id']; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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