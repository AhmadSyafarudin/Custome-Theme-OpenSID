<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $is_premium = preg_match('/premium/', ambilVersi()); ?>
<?php $pengaduan_link = $is_premium ? site_url('pengaduan') : site_url('first/statistik/bantuan_penduduk') ?>
<?php $pengaduan_desc = $is_premium ? 'Pengaduan' : 'Bantuan' ?>

<div class="card mb-1 has-background-img">
	<section class="py-0 bg-white">
		<div class="container-fluid mt-2 main-container">
			<div class="row">
            <div class="col-lg-12">
                    <div class="row text-center">
                        <div class="col-4 col-lg-2 col-md-2">
                            <div class="counter-box text-center mt-2 mb-2">
                                <a href="<?= site_url('data-wilayah') ?>">
                                    <img src="<?= base_url("$this->theme_folder/$this->theme/assets/image/statistik.png") ?>" height="50" />
                                    <div class="small">Statistik</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 col-lg-2 col-md-2">
                            <div class="counter-box text-center mt-2 mb-2">
                                <a href="<?= site_url() ?>lapak">
                                    <img src="<?= base_url("$this->theme_folder/$this->theme/assets/image/lapak.png") ?>" height="50" />
                                    <div class="small">Lapak</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 col-lg-2 col-md-2">
                            <div class="counter-box text-center mt-2 mb-2">
                                <a href="<?= site_url('status-idm/2022') ?>">
                                    <img src="<?= base_url("$this->theme_folder/$this->theme/assets/image/grafik.png") ?>" height="50" />
                                    <div class="small">Status IDM</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 col-lg-2 col-md-2">
                            <div class="counter-box text-center mt-2 mb-2">
                                <a href="<?= site_url() ?>peta">
                                    <img src="<?= base_url("$this->theme_folder/$this->theme/assets/image/peta.png") ?>" height="50" />
                                    <div class="small">Peta Desa</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 col-lg-2 col-md-2">
                            <div class="counter-box text-center mt-2 mb-2">
                                <a href="<?= $pengaduan_link ?>" rel="noopener noreferrer" target="_top">
                                    <img src="<?= base_url("$this->theme_folder/$this->theme/assets/image/folder.png") ?>" height="50" />
                                    <div class="small"><?= $pengaduan_desc ?></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 col-lg-2 col-md-2">
                            <div class="counter-box text-center mt-2 mb-2">
                                <a href="<?= site_url('pembangunan') ?>" rel="noopener noreferrer" target="_top">
                                    <img src="<?= base_url("$this->theme_folder/$this->theme/assets/image/artikel.png") ?>" height="50" />
                                    <div class="small">Pembangunan</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
