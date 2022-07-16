<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/bootstrap-lazy-load.css") ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/widget.min.css?" . THEME_VERSION) ?>">
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/widget.js?" . THEME_VERSION) ?>"></script>
<style>
	.carousel-item{
		/*max-height: 700px;*/
	}
	.carousel-item img{
		display: block;
		margin: auto;
		width: 100%;
	}
</style>
