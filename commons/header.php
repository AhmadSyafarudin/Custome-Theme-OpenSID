<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v12.0&appId=<?= config_item('fbappid') ?>&autoLogAppEvents=1"></script>
<!-- main header -->
<nav class="main-header px-5">
	<div id="left-menu">
		<img src="<?= base_url("$this->theme_folder/$this->theme/assets/image/button-sidebar.svg") ?>" alt="">
	</div>
</nav>
<div class="jumbotron" style="background-image: url(<?= base_url("$this->theme_folder/$this->theme/assets/image/bg-header.jpg") ?>); background-size: 100% auto; background-repeat:no-repeat;background-position:right; filter:blur(20)">
	<div class="container-c">
		<a href="<?= site_url() ?>" class="brand">
			<img src="<?= gambar_desa($desa['logo']) ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa) . ' ' . ucwords($desa['nama_desa']) ?>" class="" width="150">
			<div class="brand-name">
				<span class="brand-title"><?= NAMA_DESA ?></span>
				<p class="brand-tagline"><?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?>
					<?= ucwords($desa['nama_kecamatan']) ?>
					<?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?>
					<?= ucwords($desa['nama_kabupaten']) ?></p>
				<div class="menu-header">
					<span>Layanan Mandiri</span>
					<span>Bantuan</span>
				</div>
			</div>
	</div>
	</a>
</div>