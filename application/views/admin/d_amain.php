<div class="panel panel-info">
	<div class="panel-heading"><h3 style="margin-top: 5px">Dashboard</h3></div>
</div>

<div class="panel panel-success">
	<div class="panel-heading">Statistik Tahun <?php echo $this->session->userdata('admin_ta'); ?></div>
	<div class="panel-body">
		<div class="col-md-6">
			<b>Statistik Surat Masuk Berdasarkan Bulan</b>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Bulan</th>
						<th>Jumlah</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$jml = 0;
					if (!empty($s_surat_masuk_bln)) {
						foreach ($s_surat_masuk_bln as $smb) {
							echo '<tr><td>'.$smb['bln'].'</td><td>'.$smb['jml'].'</td></tr>';
							$jml += $smb['jml'];
						}
					} else {
						echo '<tr><td colspan="2">tidak ada data</td></tr>';
					}
					?>
					<tr>
						<td>Jumlah Total</td>
						<td><?php echo $jml; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<b>Statistik Surat Keluar Berdasarkan Bulan</b>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Bulan</th>
						<th>Jumlah</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$jml2 = 0;
					if (!empty($s_surat_keluar_bln)) {
						foreach ($s_surat_keluar_bln as $skb) {
							echo '<tr><td>'.$skb['bln'].'</td><td>'.$skb['jml'].'</td></tr>';
							$jml2 += $skb['jml'];
						}
					} else {
						echo '<tr><td colspan="2">tidak ada data</td></tr>';
					}
					?>
					<tr>
						<td>Jumlah Total</td>
						<td><?php echo $jml2; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<div class="clearfix"></div>

		<div class="col-md-6">
			<b>Statistik Surat Masuk Berdasarkan Kode</b>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Kode</th>
						<th>Jumlah</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					if (!empty($s_surat_masuk_kode)) {
						foreach ($s_surat_masuk_kode as $smk) {
							echo '<tr><td>'.$smk['kode'].'</td><td>'.$smk['jml'].'</td></tr>';
						}
					} else {
						echo '<tr><td colspan="2">tidak ada data</td></tr>';
					}
					?>
				</tbody>
			</table>
		</div>

		<div class="col-md-6">
			<b>Statistik Surat Keluar Berdasarkan Kode</b>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Kode</th>
						<th>Jumlah</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					if (!empty($s_surat_keluar_kode)) {
						foreach ($s_surat_keluar_kode as $skk) {
							echo '<tr><td>'.$skk['kode'].'</td><td>'.$smk['jml'].'</td></tr>';
						}
					} else {
						echo '<tr><td colspan="2">tidak ada data</td></tr>';
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
