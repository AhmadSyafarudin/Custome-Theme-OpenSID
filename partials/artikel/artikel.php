<div class="row row-cols-1 row-cols-md-4 g-4 mx-3 shadow-lg p-3 bg-body rounded mt-3">
    <?php foreach ($artikel as $data) : ?>
        <?php $url = site_url('artikel/' . buat_slug($data)) ?>
        <?php $abstract = potong_teks(strip_tags($data['isi']), 120) ?>
        <?php $image = ($data['gambar'] && is_file(LOKASI_FOTO_ARTIKEL . 'sedang_' . $data['gambar'])) ? AmbilFotoArtikel($data['gambar'], 'sedang') : base_url("$this->theme_folder/$this->theme/assets/image/noimage.png"); ?>

        <div class="col">
            <a href="<?= $url ?>" title="Baca Selengkapnya" class="text-decoration-none">
                <div class="h-100">
                    <img src="<?= $image ?>" class="<?php $image !== base_url("$this->theme_folder/$this->theme/assets/image/noimage.png") and print('cover img-thumbnail img-fluid') ?> rounded border h-50 w-75">
                    <div class="w-75">
                        <h6 class="fw-bold text-body"><?= $data['judul'] ?></h6>
                        <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach ?>
</div>