<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<style>
.single {
    border-radius: 5px;
    box-shadow: 0px 10px 60px 0px rgba(46, 61, 98, 0.1);
    text-align: center;
    position: relative;
    padding-bottom: 20px;
    padding-top: 20px;
    transform: scaleY(1);
    transform-origin: top;
    transition: transform 500ms ease;
}
.inner {
	 transform-origin: top;
	 transition: transform 500ms ease;
     transform: scaleY(1);
}
.image {
	margin-left: 15%;
	margin-right: 15%;
	border-radius: 10%;
	overflow: hidden;
	border: 5px solid #fff;
	transition: all 500ms ease;
}
.single:hover .image {
	border: 5px solid white;
}
.single h3 {
	margin: 0;
	font-size: 25px;
	font-weight: bold;
	color: #252c4b;
	line-height: 1em;
	transition: all 500ms ease;
}
.single p {
	color: #737789;
	margin: 0;
	line-height: 1em;
	font-size: 14px;
	margin-top: 10px;
	margin-bottom: 15px;
	transition: all 500ms ease;
}
.single:hover p,
.single:hover h3 {
	color: #fff;
}
.single::before {
	content: '';
	border-radius: 5px;	 
	background-image: linear-gradient(90deg, hotpink  0%, #9370DB 100%);
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
    transform: scale(1,0);
    transform-origin: bottom;	  
	transition: transform 500ms ease;
	 
}
.single:hover::before {
    transform: scale(1, 1);
    transform-origin: top;
}
.inner{
    position: relative;
}
</style>
<section class="team-one" id="team">
    <div class="card-header pink-gradient font-weight-bold text-center">
        Pemerintah <?= ucwords($this->setting->sebutan_desa . ' ' . $desa['nama_desa']) ?>
    </div>
    <div class="card mb-1 fullscreen has-background-img">
		<?php if ($pemerintah): ?>
        <div class="container-fluid">
            <div class="row">
        		<?php foreach ($pemerintah as $data): ?>
                <div class="col-12 col-lg-3 col-md-3 col-sm-12 mt-3 mb-3">
                    <div class="single">
                        <div class="inner">
                            <h5><?= $data['nama'] ?></h5>
                            <p><?= $data['jabatan'] ?></p>
                            <div class="image">
                                <img data-src="<?= $data['foto'] ?>" loading="lazy" class="lazyload" height="160" width="auto"/>
                            </div>
							<?php if($this->setting->tampilkan_kehadiran) : ?>
                          	<?= $data['status_kehadiran'] == 'hadir' ? '<span class="badge badge-success">Hadir di Kantor Desa</span>' : '<span class="badge badge-danger">Belum Rekam Kehadiran</span>' ?>
							<?php endif ?>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
		<?php else: ?>
		<div class="font-weight-bold text-center mt-4 mb-4">
			<h5>Pemerintah <?= ucwords($this->setting->sebutan_desa . ' ' . $desa['nama_desa']) ?> tidak tersedia.</h5>
		</div>
		<?php endif ?>
    </div>
</section>
