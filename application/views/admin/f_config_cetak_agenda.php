<div class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Cetak Agenda</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	
<form action="<?=base_URL()?>admin/cetak_agenda" target="blank" method="post" accept-charset="utf-8" enctype="multipart/form-data">	
	<input type="hidden" name="tipe" value="<?php echo $this->uri->segment(2); ?>">

	<table class="table-form" width="100%">
	<tr><td width="20%">Dari Tanggal</td><td><b><input type="text" name="tgl_start" id="tgl_start" class="form-control" style="width: 150px" required></b></td></tr>		
	<tr><td width="20%">Sampai Tanggal</td><td><b><input type="text" name="tgl_end" id="tgl_end" class="form-control" style="width: 150px"  required></b></td></tr>	
	
	<tr><td colspan="2">
	<br>
	<button type="submit" class="btn btn-primary">Cetak</button>
	<a href="<?=base_URL()?>admin" class="btn btn-success">Kembali</a>
	</td></tr>
	</table>
	</fieldset>
</form>

<script type="text/javascript">
$(function() {
	$( "#tgl_start" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd'
	});
	$( "#tgl_end" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd'
	});
});
</script>