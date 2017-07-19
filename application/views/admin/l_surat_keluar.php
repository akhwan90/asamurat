<div class="clearfix">

<div class="panel panel-info">
	<div class="panel-heading" style="overflow: auto">
		<div class="col-md-2"><h3 style="margin-top: 5px">Surat Keluar</h3></div>
		<div class="col-md-2">
			<a href="<?php echo base_URL(); ?>index.php/admin/surat_keluar/add" class="btn btn-info"><i class="icon-plus-sign icon-white"> </i> Tambah Data</a>
		</div>
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form class="navbar-form navbar-left" method="post" action="<?php echo base_URL(); ?>index.php/admin/surat_keluar/cari" style="margin-top: 0px">
				<input type="text" class="form-control" name="q" style="width: 200px" placeholder="Kata kunci pencarian ..." required>
				<button type="submit" class="btn btn-danger"><i class="icon-search icon-white"> </i> Cari</button>
			</form>
		</div>
	</div>
</div>

<?php echo $this->session->flashdata("k");?>
	

<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="10%">No. Agd/Kode</th>
			<th width="30%">Isi Ringkas, File</th>
			<th width="25%">Tujuan Surat</th>
			<th width="20%">Nomor, Tgl. Surat</th>
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
			<td><?php echo $b->no_agenda."/".$b->kode;?></td>
			<td><?php echo $b->isi_ringkas."<br><b>File : </b><i><a href='".base_URL()."upload/surat_keluar/".$b->file."' target='_blank'>".$b->file."</a>"?></td>
			<td><?php echo $b->tujuan?></td>
			<td><?php echo $b->no_surat."<br><i>".tgl_jam_sql($b->tgl_surat)."</i>"?></td>
			<td class="ctr">
				<?php  
				if ($b->pengolah == $this->session->userdata('admin_id')) {
				?>
				<div class="btn-group">
					<a href="<?php echo base_URL()?>index.php/admin/surat_keluar/edt/<?php echo $b->id?>" class="btn btn-success btn-sm"><i class="icon-edit icon-white"> </i> Edit</a>
					<a href="<?php echo base_URL()?>index.php/admin/surat_keluar/del/<?php echo $b->id?>" class="btn btn-warning btn-sm" onclick="return confirm('Anda Yakin..?')">
					<i class="icon-trash icon-white"> </i> Hapus</a>
				</div>	
				<?php } else { ?>
				<div class="label label-danger">No Action</div>
				<?php } ?>
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
