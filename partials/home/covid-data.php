<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php if ($this->setting->covid_desa) : ?>
<?php
//API Local Data COVID19
$odpd = $covid[0]; //"Orang Dalam Pemantauan (ODP)" => "ODP",
$pdpd = $covid[1]; //"Pasien Dalam Pengawasan (PDP)" => "PDP",
$odr = $covid[2]; //"Orang Dalam Resiko (ODR)" => "ODR"
$otg = $covid[3]; //"Orang Tanpa Gejala (OTG)" => "OTG",
$positif = $covid[4]; //"Positif Covid-19" => "POSITIF",
?>
<div class="row">
    <div class="col-12 mb-1 z-index-1">
        <div id="accordion2">
            <div class="card">
                <button class="btn btn-link text-white p-0" data-toggle="collapse" data-target="#collapseFour2" aria-expanded="true" aria-controls="collapseFour2">
                    <div class="card-header bg-primary font-weight-bold" id="headingFour2">LIVE DATA STATUS COVID-19 <i class="material-icons icon arrow">expand_more</i></div>
                </button>
                <div id="collapseFour2" class="collapse" aria-labelledby="headingFour2" data-parent="#accordion2">
                    <div class="card-body">
                        <div class="row">
                            <?php if ($this->setting->covid_desa) : ?>
							<div id="covid-desa" class="col-12 mb-2">
								<div class="media border-bottom">
									<div class="media-body">
										<span class="font-weight-bold" data-name="wilayah">
											<a href=""><?= strtoupper($this->setting->sebutan_desa . ' ' . $desa['nama_desa']); ?></a>
										</span>
									</div>
								</div>
								<div class="row">
									<?php if(IS_PREMIUM) : ?>
									<?php foreach ($covid as $key => $val):
										if ($key >= 7) break;
										if($key >= 3) echo '<br/>'
									?>
									<div class="col-6 col-lg-3 col-md-3 px-2 py-1">
										<div class="square covid odr">
											<span><?= $val['nama']; ?></span>
											<span><?= number_format($val['jumlah']); ?></span>
											<span class="small">Orang</span>
										</div>
									</div>
									<?php endforeach; ?>
									<div class="col-6 col-lg-3 col-md-3 px-2 py-1">
										<div class="square covid odr">
											<span>Jumlah Terdata</span>
											<span><?= number_format($val['jumlah']); ?></span>
											<span class="small">Orang</span>
										</div>
									</div>
									<?php else: ?>
									<div class="col-6 col-lg-3 col-md-3 px-2 py-1">
										<div class="square covid odr">
											<span>Kontak Erat</span>
											<span data-name="odp"><?= ribuan($odpd['jumlah']) ?></span>
											<span class="small">Orang</span>
										</div>
									</div>
									<div class="col-6 col-lg-3 col-md-3 px-2 py-1">
										<div class="square covid pdp">
											<span>Suspek</span>
											<span data-name="pdp"><?= ribuan($pdpd['jumlah']) ?></span>
											<span class="small">Orang</span>
										</div>
									</div>
									<div class="col-6 col-lg-3 col-md-3 px-2 py-1">
										<div class="square covid positif">
											<span>Konfirmasi</span>
											<span data-name="positif"><?= ribuan($positif['jumlah']) ?></span>
											<span class="small">Orang</span>
										</div>
									</div>
									<div class="col-6 col-lg-3 col-md-3 px-2 py-1">
										<div class="square covid odp">
											<span>Discarded</span>
											<span data-name="odr"><?= ribuan($odr['jumlah']) ?></span>
											<span class="small">Orang</span>
										</div>
									</div>
									<?php endif; ?>
								</div>
							</div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif ?>
<?php $this->load->view('head_tags_front') ?>
