<?php
    include "koneksi.php";
?>
<div class="galeriDesa">
    <h4 class="judulgaleriDesa">Galeri Desa</h4>
    <div class="list">
        <?php
          $nomor = 1;
        ?>
        <?php
          $ambil = $koneksi->query("SELECT * FROM galeri");
        ?>
        <?php
          while($pecah = $ambil->fetch_assoc()){
        ?>
        <div class="list-item">
            <img class="list-item-thumb" src="./galeri/<?php echo $pecah['gambar']; ?>" alt="img">
            <div class="item-content">
                <h1 class="item-title"><?php echo $pecah['judul']; ?></h1>
            </div>
        </div>
        <?php
          }
        ?>
    </div>
</div>
