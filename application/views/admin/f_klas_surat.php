<?php
$mode		= $this->uri->segment(3);

if ($mode == "edt" || $mode == "act_edt") {
	$act		= "act_edt";
	$idp		= $datpil->id;
	$kode		= $datpil->kode;	
	$nama		= $datpil->nama;	
	$uraian		= $datpil->uraian;	
} else {
	$act		= "act_add";
	$idp		= "";
	$kode		= "";
	$nama		= "";
	$uraian		= "";
}
?>
<div class="panel panel-info">
	<div class="panel-heading"><h3 style="margin-top: 5px">Klasifikasi Surat</h3></div>
</div>

<?php echo $this->session->flashdata("k_passwod");?>

<div class="well">

<form action="<?php echo base_URL(); ?>index.php/admin/klas_surat/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<input type="hidden" name="idp" value="<?php echo $idp; ?>">
	<table width="100%" class="table-form">
	<tr><td width="20%">Kode</td><td><b><input type="text" name="kode" required value="<?php echo $kode; ?>" style="width: 700px" class="form-control" autofocus></b></td></tr>		
	<tr><td width="20%">Nama</td><td><b><input type="text" name="nama" required value="<?php echo $nama; ?>" style="width: 700px" class="form-control"></b></td></tr>		
	<tr><td width="20%">Uraian</td><td><b><textarea name="uraian" required style="width: 700px; height: 100px" class="form-control"><?php echo $uraian; ?></textarea></b></td></tr>		
	<tr><td colspan="2">
	<br><button type="submit" class="btn btn-primary"><i class="icon icon-ok icon-white"></i> Simpan</button>
	<a href="<?php echo base_URL(); ?>index.php/admin/klas_surat" class="btn btn-success"><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
	</td></tr>
	</table>
</form>
</div>
