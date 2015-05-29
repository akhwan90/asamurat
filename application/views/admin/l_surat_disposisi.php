<div class="clearfix">
<div class="row">
  <div class="col-lg-12">
	
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Disposisi Surat</a>
			</div>
		<div class="navbar-collapse collapse navbar-inverse-collapse" style="margin-right: -20px">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_URL(); ?>index.php/admin/surat_disposisi/<?php echo $this->uri->segment(3)?>/add" class="btn-info"><i class="icon-plus-sign icon-white"> </i> Tambah Data</a></li>
				<li><a href="<?php echo base_URL(); ?>index.php/admin/surat_masuk" class="btn-info"><i class="icon-share icon-white"> </i> Kembali</a></li>
			</ul>
			
		</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</div><!-- /.navbar -->

  </div>
</div>

<?php echo $this->session->flashdata("k");?>
	
<div class="alert alert-info">Perihal Surat</b> : <i><?php echo $judul_surat; ?></i></div>

<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="5%">ID</th>
			<th width="25%">Tujuan Disposisi</th>
			<th width="35%">Isi Disposisi</th>
			<th width="20%">Sifat, Batas Waktu</th>
			<th width="15%">Aksi</th>
		</tr>
	</thead>
	
	<tbody>
		<?php 
		if (empty($data)) {
			echo "<tr><td colspan='5'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
		} else {
			$no 	= ($this->uri->segment(4) + 1);
			foreach ($data as $b) {
		?>
		<tr>
			<td class="ctr"><?php echo $no;?></td>
			<td><?php echo $b->kpd_yth; ?></td>
			<td><?php echo $b->isi_disposisi; ?></td>
			<td><?php echo $b->sifat."<br><i>Batas waktu s.d. ".tgl_jam_sql($b->batas_waktu)."</i>"?></td>
			<td class="ctr">
				<div class="btn-group">
					<a href="<?php echo base_URL(); ?>index.php/admin/surat_disposisi/<?php echo $this->uri->segment(3)?>/edt/<?=$b->id?>" class="btn btn-success btn-sm"><i class="icon-edit icon-white"> </i> Edit</a>
					<a href="<?php echo base_URL(); ?>index.php/admin/surat_disposisi/<?php echo $this->uri->segment(3)?>/del/<?=$b->id?>" class="btn btn-warning btn-sm" onclick="return confirm('Anda Yakin..?')">
					<i class="icon-trash icon-white"> </i> Hapus</a>
				</div>					
			</td>
		</tr>
		<?php 
			$no++;
			}
		}
		?>
	</tbody>
</table>
<center><ul class="pagination"><?php echo $pagi; ?></ul></center>
</div>
