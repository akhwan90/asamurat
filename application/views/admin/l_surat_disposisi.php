<div class="clearfix">


<div class="panel panel-info">
	<div class="panel-heading" style="overflow: auto">
		<div class="col-md-3"><h3 style="margin-top: 5px">Disposisi Surat</h3></div>
		<div class="col-md-3">
			<a href="<?php echo base_URL(); ?>index.php/admin/surat_disposisi/<?php echo $this->uri->segment(3)?>/add" class="btn btn-info"><i class="icon-plus-sign icon-white"> </i> Tambah Data</a>
			<a href="<?php echo base_URL(); ?>index.php/admin/surat_masuk" class="btn btn-info"><i class="icon-share icon-white"> </i> Kembali</a>
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-4"></div>
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
