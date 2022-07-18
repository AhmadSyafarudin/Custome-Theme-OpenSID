<div class="main-idm">
	<div class="container main-idm-list">
		<div class="container card idm-contain">
			<div class="row">
				<h2>Status IDM</h2>
				<div class="card card-idm" style="width: 18rem;">
					<h5 class="card-title title-menu list-menu">Status IDM Saat Ini</h5>
					  <img src="<?= base_url("$this->theme_folder/$this->theme/assets/image/icon/status-idm-saatini.png?" . THEME_VERSION) ?>" class="card-img-top img-idm" style="width: 180px;">
					  <h5 class="card-title title-menu list-menu">0.8271</h5>
					</a>
				</div>
				<div class="card card-idm" style="width: 18rem;">
			    	  <h5 class="card-title title-menu list-menu">Skor Minimal</h5>
					  <img src="<?= base_url("$this->theme_folder/$this->theme/assets/image/icon/skor-minimal.png?" . THEME_VERSION) ?>" class="card-img-top img-idm" style="width: 180px;">
					  <h5 class="card-title title-menu list-menu">0.8122</h5>
					</a>
				</div>
				<div class="card card-idm" style="width: 18rem;">
			    	  <h5 class="card-title title-menu list-menu">Skor IDM</h5>
					  <img src="<?= base_url("$this->theme_folder/$this->theme/assets/image/icon/status-idm.png?" . THEME_VERSION) ?>" class="card-img-top img-idm" style="width: 180px;">
					  <h5 class="card-title title-menu list-menu">Mandiri</h5>
					</a>
				</div>
				<div class="card card-idm" style="width: 18rem;">
			    	  <h5 class="card-title title-menu list-menu">Target Status</h5>
					  <img src="<?= base_url("$this->theme_folder/$this->theme/assets/image/icon/target-status.png?" . THEME_VERSION) ?>" class="card-img-top img-idm" style="width: 180px;">
					  <h5 class="card-title title-menu list-menu">Mandiri</h5>
					</a>
			</div>
		</div>
	<div class="card chart-idm">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Indeks'],
          ['IKL', 0.87],
          ['IKE', 0.82],
          ['IKS', 0.90]
        ]);

        var options = {
          title: 'Indeks Desa Membangun',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    <div class="chart" id="piechart_3d" style="width: 900px; height: 500px;"></div>
</div>
<div class="row">
	<div class="table-hover">
	<table id="datatable" class="table table-hover table-bordered" >
  <thead>
    <tr>
      <th>No</th>
      <th>INDIKATOR IDM</th>
      <th>SKOR</th>
      <th>KETERANGAN</th>
      <th>KEGIATAN YANG DAPAT DILAKUKAN	</th>
      <th>+NILAI</th>
      <th>PUSAT</th>
      <th>PROVINSI</th>
      <th>KABUPATEN</th>
      <th>DESA</th>
      <th>CSR</th>
      <th>LAINNYA</th>
    </tr> 
  </thead>
</div>
</div>

</div>
</div>
</div>
</div>
</div>