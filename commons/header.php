<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v12.0&appId=<?= config_item('fbappid') ?>&autoLogAppEvents=1"></script>
<!-- main header -->
<<<<<<< HEAD
<header class="main-header">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-auto px-0">
				<button class="btn pink-gradient btn-icon" id="left-menu">
					<img src="<?= base_url("$this->theme_folder/$this->theme/assets/image/button-sidebar.svg") ?>" alt="">
				</button>
				<a href="<?= site_url(); ?>" class="logo"><img src="<?= gambar_desa($desa['logo']); ?>" alt="">
					<span class="">
						<b class="text-hide-xs"><?= $this->setting->website_title ?></b> <b><?= ucwords($this->setting->sebutan_desa) . ' ' . $desa['nama_desa'] ?></b><br>
						<span class="small"><?= ucwords($this->setting->sebutan_kecamatan) . ' ' . $desa['nama_kecamatan'] . '</span> <span class="small text-hide-xs">' . ucwords($this->setting->sebutan_kabupaten) . ' ' . $desa['nama_kabupaten'] ?></span></span>
				</a>
			</div>
			<div class="col px-0 text-right">
				<?php include("$this->theme_folder/$this->theme/commons/statistik_pengunjung.php"); ?>
				<div class="dropdown d-inline-block text-hide-xs">
					<a class="btn header-color-secondary btn-icon dropdown-toggle caret-none" href="javascript:void(0);" role="button" id="dropdownnotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="material-icons">assessment</i>
					</a>
					<div class="dropdown-menu notification-dropdown" aria-labelledby="dropdownnotification">
						<div class="card">
							<div class="card-header border-bottom">
								<h5 class="content-color-primary">Statistik Pengunjung</h5>
							</div>
							<div class="small card-body text-center">
								<form method=get action="<?= site_url(); ?>">
									<div class="input-group mb-0">
										<input type="text" name="cari" class="form-control" autocomplete="off" value="<?= $cari ?>" placeholder="Cari Artikel" aria-label="Cari Artikel">
										<div class="input-group-append">
											<button class="btn btn-outline-secondary" type="submit">Cari</button>
										</div>
									</div>
								</form>
								<table class="table table-striped table-inverse mt-2">
									<tr>
										<td style="text-align:left">Hari ini</td>
										<td>:</td>
										<td style="text-align:right"><?= ribuan($hari_ini) ?></td>
									</tr>
									<tr>
										<td style="text-align:left">Kemarin</td>
										<td>:</td>
										<td style="text-align:right"><?= ribuan($kemarin) ?></td>
									</tr>
									<tr>
										<td style="text-align:left">Total Pengunjung</td>
										<td>:</td>
										<td style="text-align:right"><?= ribuan($total) ?></td>
									</tr>
									<tr>
										<td style="text-align:left">Sistem Operasi</td>
										<td>:</td>
										<td style="text-align:right"><?= $os; ?></td>
									</tr>
									<tr>
										<td style="text-align:left">IP Address</td>
										<td>:</td>
										<td style="text-align:right"><?= $ip_address; ?></td>
									</tr>
									<tr>
										<td style="text-align:left">Browser</td>
										<td>:</td>
										<td style="text-align:right"><?= $browser; ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<a href="<?= site_url(); ?>feed" class="content-color-secondary" rel="noopener noreferrer" target="_blank">
					<i class="text-hide-xs material-icons">rss_feed</i>
				</a>
				<div class="dropdown d-inline-block text-hide-xs">
					<?php foreach ($sosmed as $data) : ?>
						<?php if (!empty($data["link"])) : ?>
							<a href="<?= $data['link'] ?>" title="<?= $data['nama'] ?>" rel="noopener noreferrer" target="_blank">
								<figure class="avatar avatar-24 vm d-inline-block border ml-1"><img src="<?= base_url() . 'assets/front/' . $data['gambar'] ?>" alt="<?= $data['nama'] ?>"></figure>
							</a>
						<?php endif; ?>
					<?php endforeach; ?>
					<a class="btn header-color-secondary btn-icon dropdown-toggle caret-none" href="javascript:void(0);" role="button" id="dropdownmessage2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<figure class="avatar avatar-24 vm d-inline-block border"><img src="<?= base_url("$this->theme_folder/$this->theme/assets/image/opensid_logo.png"); ?>"></figure>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdownmessage2">
						<a class="dropdown-item pink-gradient-active" href="javascript:void(0);" id="open-right-sidebar">
							<div class="row align-items-center">
								<div class="col">Tema DeNatra <?= THEME_VERSION ?></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<?php if (!in_array($this->uri->segment(1), ['lapak']) && !in_array($this->uri->segment(2), ['lapak'])) : ?>
	<div class="container-fluid">
		<div class="row align-items-center has-background-img min-height-200">
			<figure class="background-img pink-gradient">
				<img src="<?= base_url("$this->theme_folder/$this->theme/assets/image/bg-hd.png"); ?>">
			</figure>
			<div class="container<?= config_item('fluid') ? '-fluid' : '' ?>">
				<div class="row align-items-center <?php if (empty($_GET['cari']) && (in_array($this->uri->segment(1), ['', 'index'])) && (in_array($this->uri->segment(2), ['', 'index'])) && (config_item('menu') == false)) : ?>mb-5 mt-0<?php endif; ?>">
					<div class="col-12 col-sm-auto text-center mt-3 text-hide-xs">
						<figure class="avatar-120 mx-auto my-3">
							<img src="<?= gambar_desa($desa['logo']); ?>" class="mh-100">
						</figure>
					</div>
					<div class="col-12 col-sm text-center mt-3 text-sm-left text-white">
						<h3 class="mb-0">
							<span class="text-hide-xs"><?= ucwords($this->setting->sebutan_desa . " ") ?> <?= ucwords($desa['nama_desa']) ?></span>
						</h3>
						<p class="text-hide-xs"><?= $desa['alamat_kantor'] ?><br><?= ucwords($this->setting->sebutan_kecamatan . " " . $desa['nama_kecamatan']) ?> <?= ucwords($this->setting->sebutan_kabupaten . " " . $desa['nama_kabupaten']) ?> Provinsi <?= $desa['nama_propinsi'] ?><br>Kode Pos <?= $desa['kode_pos'] ?></p>
						<p class="small">
							<?php if (!empty($desa['telepon'])) : ?><i class="material-icons">call</i> <?= $desa['telepon'] ?><?php if (!empty($desa['telepon']) and !empty($desa['email_desa'])) : ?><span class="mx-2">|</span><?php endif; ?><?php endif; ?>
								<?php if (!empty($desa['email_desa'])) : ?><i class="material-icons">mail_outline</i> <?= $desa['email_desa'] ?><?php endif; ?></p>
					</div>
					<div class="text-center text-sm-right col-12 col-sm-auto mb-3">
						<a class="btn btn-sm btn-success success-gradient ml-2" href="https://api.whatsapp.com/send?l=id&text=<?= "https://" . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI] ?>%0A%0A" rel='noopener noreferrer' target='_blank' title='WhatsApp'><i class="material-icons">send</i> WhatsApp</a>
						<a class="btn btn-sm btn-primary primary-gradient ml-2" href="http://www.facebook.com/sharer.php?u=<?= "https://" . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI] ?>" rel='noopener noreferrer' target='_blank' title='Facebook'><i class="material-icons">book</i> Facebook</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="<?= in_array($this->uri->segment(1), ['']) ? 'mb-1' : '' ?> ">
		<?php if (config_item('menu') == true) $this->load->view($folder_themes . '/partials/home/menu'); ?>
	</div>
<?php endif; ?>
=======
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
<nav class="bottom-header">
	<marquee width="60%" direction="left">
		<?php foreach ($teks_berjalan as $newsticker) : ?>
			<?= $newsticker['teks'] ?>
			<?php if ($newsticker['tautan']) : ?>
				<a href="<?= $newsticker['tautan'] ?>" class="newsticker-link"><i data-feather="link" class="icon icon-sm mr-2"></i> <?= $newsticker['judul_tautan'] ?></a>
			<?php endif ?>
		<?php endforeach ?>
	</marquee>
</nav>
>>>>>>> 9ca19233b75dcd867583d6b036e7b453848c3cc9
