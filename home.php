<?php
    include "koneksi.php";
?>

<div class="hero" id="hero">
  <div class="hero-inner">
    <div class="hero_title">Desa Hanau Berak</div>
    <p class="tagline">Kecamatan Padang Cermin, Kabupaten Pesawaran, Provinsi Lampung. Desa Hanau Berak terdiri dari 9 dusun
      diantaranya yaitu dusun induk, dusun duakha, dusun kroya baru, desa way panas, dusun pettai jajar, dusun pematang jambu, 
      dusun umbul biluk, dusun damar papan, dan dusun way rilau.</p>
  </div>
</div>

<!-- Potensi Unggulan -->
<!-- <div class="p-3 mb-2 bg-info text-dark" id="potensiUnggulan">
  <h4 class="potensiUnggulan">Potensi Unggulan</h4>
  <p class="textPotensiUnggulan">
    Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros.
    Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.
  </p>
</div> -->
<div class="potensiDesa">
  <h4 class="potensiUnggulan">Potensi Unggulan</h4>
  <div class="list">
    <?php
      $nomor = 1;
    ?>
    <?php
      $ambil = $koneksi->query("SELECT * FROM potensi");
    ?>
    <?php
      while($pecah = $ambil->fetch_assoc()){
    ?>
    <div class="list-item">
      <img class="list-item-thumb" src="potensi/<?php echo $pecah['gambar']; ?>" alt="img" />
      <div class="item-content">
        <h1 class="item-title"><?php echo $pecah['judul']; ?></h1>
        <p class="item-description"><?php echo $pecah['deskripsi']; ?></p>
      </div>
    </div>
    <?php
      }
    ?>
  </div>
</div>

<!-- Peta Desa -->
<h4 class="headMap" id="peta">Peta Desa</h4>
<div class="petaDesa">
  <img class="map" src="images/peta.jpg" alt="peta" />
</div>
