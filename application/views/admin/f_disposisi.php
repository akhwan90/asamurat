<?php 
$q_instansi	= $this->db->query("SELECT * FROM tr_instansi LIMIT 1")->row();
?>

<html>
<head>
<style type="text/css" media="print">
	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000}
	td { padding: 7px 5px}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<style type="text/css" media="screen">
	table {border: solid 1px #000; border-collapse: collapse; width: 60%}
	tr { border: solid 1px #000}
	td { padding: 7px 5px}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
</head>

<body onload="window.print()">
<table>
	<tr><td colspan="3">
	<h2><?php echo $q_instansi->nama; ?></h2>
	Alamat : <?php echo $q_instansi->alamat; ?>	
	</td>
	</tr>
	
	<tr><td colspan="3" align="center" style="padding: 15px 0"><b style="font-size: 21px;">LEMBAR DISPOSISI</b></td></tr>
	<tr><td width="25%"><b>Indeks Berkas</b></td><td width="50%">: <?php echo $datpil1->indek_berkas; ?></td><td><b>Kode : </b><?php echo $datpil1->kode; ?></td></tr>
	<tr><td width="25%"><b>Tanggal/Nomor</b></td><td colspan="2">: <?php echo tgl_jam_sql($datpil1->tgl_surat)." / ".$datpil1->no_surat; ?></td></tr>
	<tr><td><b>Asal Surat</b></td><td colspan="2">: <?php echo $datpil1->dari; ?></td></tr>
	<tr><td><b>Isi Ringkas</b></td><td colspan="2">: <?php echo $datpil1->isi_ringkas; ?></td></tr>
	<tr><td><b>Diterima Tanggal</b></td><td colspan="2">: <?php echo tgl_jam_sql($datpil1->tgl_diterima); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>No. Agenda &nbsp;&nbsp; </b> ( <?php echo $datpil1->no_agenda; ?> ) </td></tr>
	<tr><td colspan="3"><b>Tanggal Penyelesaian </b>: </td></tr>
	<tr><td style="height: 350px" valign="top" colspan="2"><b>Isi Disposisi : </b> <br><br>

	<ol>
	<?php 
	if (!empty($datpil3)) {
		foreach ($datpil3 as $d3) {
			echo "<li><b><i>".$d3->isi_disposisi."</i></b>. Batas : ".tgl_jam_sql($d3->batas_waktu).", Sifat: ".$d3->sifat." </li>";
		}
	}
	?>
	</ol>
	
	
	</b></td><td valign="top" width="50%" style="border-left: solid 1px">
	Diteruskan kepada  : 
	<ol>
	<?php 
	if (!empty($datpil2)) {
		foreach ($datpil2 as $dp) {
			echo "<li>".$dp->kpd_yth."</li>";
		}
	}
	?>
	</ol>
	</td></tr>
	<tr><td colspan="3" style="line-height: 30px">Sesudah digunakan harap dikembalikan<br>
	Kepada : ........................................................................................................................................<br>
	Tanggal : ........................................................................................................................................<br>
	</td></tr>
</table>
</body>
</html>
