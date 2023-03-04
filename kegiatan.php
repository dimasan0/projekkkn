<?php
    include "koneksi.php";
?>
<div class="kegiatanDesa">
    <h4 class="judulKegiatanDesa" id="kegiatanDesa">Kegiatan Desa</h4>
    <div class="list">
        <?php
          $nomor = 1;
        ?>
        <?php
          $ambil = $koneksi->query("SELECT * FROM kegiatan");
        ?>
        <?php
          while($pecah = $ambil->fetch_assoc()){
        ?>
        <div class="list-item">
            <img class="list-item-thumb" src="./kegiatan/<?php echo $pecah['gambar']; ?>" alt="img" />
            <div class="item-content">
              <h1 class="item-title"><?php echo $pecah['judul']; ?></h1>
              <!-- <p class="rating">Tanggal</span></p> -->
              <p class="item-description"><?php echo $pecah['deskripsi']; ?></p>
            </div>
        </div>
        <?php
          }
        ?>
    </div>
</div>
