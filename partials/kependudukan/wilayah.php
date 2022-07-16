<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="row">
	<div class="col-md-4 col-lg-4">
		<?php $this->load->view($folder_themes .'/partials/kependudukan/navigasi') ?>
	</div>
	<div class="col-md-8 col-lg-8">
		<div class="card mb-1 fullscreen has-background-img ">
			<div class="card-header border-bottom">
				<div class="media">
					<div class="icon-circle icon-40 bg-light-primary mr-3">
						<i class="material-icons">view_day</i>
					</div>
					<div class="media-body">
						<h6 class="my-0 content-color-primary">Tabel <?= $heading ?></h6>
						<p class="small mb-0">
							<i class="material-icons icon-sm">local_offer</i> Demografi <?= ucwords($this->setting->sebutan_desa)." ".$desa['nama_desa']?>
						</p>
					</div>
				</div>
			</div>
			<div class="card-body">
				<?php if(count($daftar_dusun) > 0) : ?>
				<div class="mb-0 content-color-secondary">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr class="pink-gradient">
									<th class="padat">No</th>
									<th colspan="8">Wilayah, Kepala/Ketua</th>
									<th style='text-align:center'>KK</th>
									<th style='text-align:center'>L+P</th>
									<th style='text-align:center'>L</th>
									<th style='text-align:center'>P</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($daftar_dusun as $key_dusun => $data_dusun): ?>
								<tr>
									<td align="center"><?= $key_dusun + 1; ?></td>
									<td align="left" colspan="8">
										<?= ucwords($this->setting->sebutan_dusun . ' ' . $data_dusun['dusun']); ?>
										<?php if ($data_dusun['nama_kadus']): ?>
										, <?= ucwords($this->setting->sebutan_singkatan_kadus) ?> <?= $data_dusun['nama_kadus']; ?>
										<?php endif ?>
									</td>
									<td class="angka" style='text-align:center'><?= $data_dusun['jumlah_kk']; ?></td>
									<td class="angka" style='text-align:center'><?= $data_dusun['jumlah_warga']; ?></td>
									<td class="angka" style='text-align:center'><?= $data_dusun['jumlah_warga_l']; ?></td>
									<td class="angka" style='text-align:center'><?= $data_dusun['jumlah_warga_p']; ?></td>
								</tr>
								<?php
									$no_rw = 1;
									foreach ($data_dusun['daftar_rw'] as $data_rw):
								?>
								<?php if ($data_rw['rw'] != '-'): ?>
								<tr>
									<td></td>
									<td align="center"><?= $no_rw++; ?></td>
									<td align="left" colspan="7">
										RW <?= $data_rw['rw']; ?>
										<?php if ($data_rw['nama_ketua']): ?>
										, Ketua <?= $data_rw['nama_ketua']; ?>
										<?php endif ?>
									</td>
									<td class="angka" style='text-align:center'><?= $data_rw['jumlah_kk']; ?></td>
									<td class="angka" style='text-align:center'><?= $data_rw['jumlah_warga']; ?></td>
									<td class="angka" style='text-align:center'><?= $data_rw['jumlah_warga_l']; ?></td>
									<td class="angka" style='text-align:center'><?= $data_rw['jumlah_warga_p']; ?></td>
								</tr>
								<?php endif ?>
								<?php
									$no_rt = 1;
									foreach ($data_rw['daftar_rt'] as $data_rt):
								?>
								<?php if ($data_rt['rt'] != '-'): ?>
								<tr>
									<td></td>
									<td></td>
									<td align="center"><?= $no_rt++; ?></td>
									<td align="left" colspan="6">
										RT <?= $data_rt['rt']; ?>
										<?php if ($data_rt['nama_ketua']): ?>
										, Ketua <?= $data_rt['nama_ketua']; ?>
										<?php endif ?>
									</td>
									<td class="angka" style='text-align:center'><?= $data_rt['jumlah_kk']; ?></td>
									<td class="angka" style='text-align:center'><?= $data_rt['jumlah_warga']; ?></td>
									<td class="angka" style='text-align:center'><?= $data_rt['jumlah_warga_l']; ?></td>
									<td class="angka" style='text-align:center'><?= $data_rt['jumlah_warga_p']; ?></td>
								</tr>
								<?php endif ?>
								<?php endforeach; ?>
								<?php endforeach; ?>
								<?php endforeach; ?>
							</tbody>
							<tfoot>
								<tr class="pink-gradient">
									<td colspan="9" align="left">TOTAL</td>
									<td class="angka" style='text-align:center'><?= $total['total_kk']; ?></td>
									<td class="angka" style='text-align:center'><?= $total['total_warga']; ?></td>
									<td class="angka" style='text-align:center'><?= $total['total_warga_l']; ?></td>
									<td class="angka" style='text-align:center'><?= $total['total_warga_p']; ?></td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
				<?php else : ?>
				<div class="font-weight-bold text-center mt-4 mb-4">
					<h5>Data tidak tersedia.</h5>
				</div>
				<?php endif ?>
			</div>
		</div>
	</div>
</div>
