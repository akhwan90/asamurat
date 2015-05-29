<div class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Edit Instansi Pengguna</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->
	
	<form action="<?php echo base_URL(); ?>index.php/admin/pengguna/act_edt" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		
	<input type="hidden" name="idp" value="<?php echo $data->id; ?>">
	<div class="row-fluid well" style="overflow: hidden">
	
	<div class="col-lg-6">
		<table width="100%" class="table-form">
		<tr><td width="20%">Nama</td><td><b><input type="text" name="nama" required value="<?php echo $data->nama; ?>" style="width: 400px" class="form-control"></b></td></tr>
		<tr><td width="20%">Alamat Instansi</td><td><b><textarea name="alamat" required style="width: 400px; height: 90px" class="form-control"><?php echo $data->alamat; ?></textarea></b></td></tr>	
		<tr><td colspan="2">
		<br><button type="submit" class="btn btn-primary"><i class="icon icon-ok icon-white"></i> Simpan</button>
		<a href="<?php echo base_URL(); ?>index.php/admin" class="btn btn-success"><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
		</td></tr>
		</table>
	</div>
	
	<div class="col-lg-6">	
		<table width="100%" class="table-form">
			<tr><td width="20%">Nama Pimpinan</td><td><b><input type="text" name="kepsek" required value="<?php echo $data->kepsek; ?>" style="width: 300px" class="form-control"></b></td></tr>
			<tr><td width="20%">NIP Pimpinan</td><td><b><input type="text" name="nip_kepsek" required value="<?php echo $data->nip_kepsek; ?>" style="width: 300px" class="form-control"></b></td></tr>
			<tr><td width="20%">File Logo</td><td><b><input type="file" name="logo"  style="width: 300px" class="form-control"></b></td></tr>	
		</table>
	</div>
	
	</div>
	
	</form>
