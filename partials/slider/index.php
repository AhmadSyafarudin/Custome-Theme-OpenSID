<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div id="carouselExampleCaptions" class="carousel slide w-50 pl-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <?php $active = true;
    $index = 0; ?>
    <?php foreach ($slider_gambar['gambar'] as $gambar) : ?>
      <?php $file_gambar = $slider_gambar['lokasi'] . 'sedang_' . $gambar['gambar']; ?>
      <?php if (is_file($file_gambar)) : ?>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $index ?>" class="<?php echo ($active == true) ? "active" : "" ?>" aria-current="true" aria-label="Slide-<?= $index ?>"></button>
        <?php $active = false;
        $index++; ?>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <div class="carousel-inner">
    <?php $active = true; ?>
    <?php foreach ($slider_gambar['gambar'] as $gambar) : ?>
      <?php $file_gambar = $slider_gambar['lokasi'] . 'sedang_' . $gambar['gambar']; ?>
      <?php if (is_file($file_gambar)) : ?>
        <div class="carousel-item <?php echo ($active == true) ? "active" : "" ?>">
          <img src="<?php echo base_url() . $slider_gambar['lokasi'] . 'sedang_' . $gambar['gambar'] ?>" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5><?= $gambar['judul'] ?></h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <?php $active = false; ?>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>