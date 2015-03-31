
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Rubah Password</a>
			</div>
		</div><!-- /.container -->
	</div><!-- /.navbar -->


	<?php echo $this->session->flashdata("k_passwod");?>
	
<form action="<?=base_URL()?>admin/passwod/simpan" method="post" accept-charset="utf-8" enctype="multipart/form-data">	

	<table class="table-form" width="100%">
	<tr><td width="20%">Username</td><td><b><input type="text" name="username" class="form-control" readonly value="<?=$this->session->userdata('admin_user')?>" style="width: 200px"></b></td></tr>		
	<tr><td>Password lama</td><td><input type="password" name="p1" class="form-control" style="width: 200px" autofocus required></td></tr>		
	<tr><td>Password baru</td><td><input type="password" name="p2" class="form-control" style="width: 200px" required></td></tr>		
	<tr><td>Ulangi Password baru</td><td><input type="password" class="form-control" name="p3" style="width: 200px" required></td></tr>		
	
	<tr><td colspan="2">
	<br>
	<button type="submit" class="btn btn-primary">Simpan</button>
	<a href="<?=base_URL()?>admin" class="btn btn-success">Kembali</a>
	</td></tr>
	</table>
	</fieldset>
</form>