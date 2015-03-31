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
				<li><a href="<?php echo base_URL(); ?>admin/surat_disposisi/<?php echo $this->uri->segment(3)?>/add" class="btn-info"><i class="icon-plus-sign icon-white"> </i> Tambah Data</a></li>
				<li><a href="<?php echo base_URL(); ?>admin/surat_masuk" class="btn-info"><i class="icon-share icon-white"> </i> Kembali</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<form class="navbar-form navbar-left" method="post" action="<?=base_URL()?>admin/surat_disposisi/<?php echo $this->uri->segment(3)?>/cari">
					<input type="text" class="form-control" name="q" style="width: 200px" placeholder="Kata kunci pencarian ..." required>
					<button type="submit" class="btn btn-danger"><i class="icon-search icon-white"> </i> Cari</button>
				</form>
			</ul>
		</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</div><!-- /.navbar -->

  </div>
</div>

<?php echo $this->session->flashdata("k");?>
	
<!--	
<div class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Well done!</strong> You successfully read <a href="http://bootswatch.com/amelia/#" class="alert-link">this important alert message</a>.
</div>
	
<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Oh snap!</strong> <a href="http://bootswatch.com/amelia/#" class="alert-link">Change a few things up</a> and try submitting again.
</div>	
-->
<b>Perihal Surat</b> : <i><?php echo $judul_surat; ?></i><br><br>
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
			<td><?=$b->sifat."<br><i>Batas waktu s.d. ".tgl_jam_sql($b->batas_waktu)."</i>"?></td>
			<td class="ctr">
				<div class="btn-group">
					<a href="<?=base_URL()?>admin/surat_disposisi/<?php echo $this->uri->segment(3)?>/edt/<?=$b->id?>" class="btn btn-success btn-sm"><i class="icon-edit icon-white"> </i> Edit</a>
					<a href="<?=base_URL()?>admin/surat_disposisi/<?php echo $this->uri->segment(3)?>/del/<?=$b->id?>" class="btn btn-warning btn-sm" onclick="return confirm('Anda Yakin..?')">
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
