
<!DOCTYPE html>
<!-- saved from url=(0029)http://bootswatch.com/amelia/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>.:: ASAMURAT (Aplikasi SederhanA Manajemen sURAT) ::.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	<style type="text/css">
	@font-face {
	  font-family: 'Cabin';
	  font-style: normal;
	  font-weight: 400;
	  src: local('Cabin Regular'), local('Cabin-Regular'), url(<?php echo base_url(); ?>aset/font/satu.woff) format('woff');
	}
	@font-face {
	  font-family: 'Cabin';
	  font-style: normal;
	  font-weight: 700;
	  src: local('Cabin Bold'), local('Cabin-Bold'), url(<?php echo base_url(); ?>aset/font/dua.woff) format('woff');
	}
	@font-face {
	  font-family: 'Lobster';
	  font-style: normal;
	  font-weight: 400;
	  src: local('Lobster'), url(<?php echo base_url(); ?>aset/font/tiga.woff) format('woff');
	}	
	
	</style>
    <link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/bootstrap.css" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
      <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
    <![endif]-->
  

    <script src="<?php echo base_url(); ?>aset/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>aset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>aset/js/bootswatch.js"></script>
    <script src="<?php echo base_url(); ?>aset/js/jquery.chained.js"></script>
  <body style="">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <span class="navbar-brand"><strong style="font-family: verdana; margin-left: 310px; text-align: center">ASAMURAT (Aplikasi SederhanA Manajemen sURAT)</strong></span>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
      </div>
    </div>

	<?php 
	$q_instansi	= $this->db->query("SELECT * FROM tr_instansi LIMIT 1")->row();
	?>
    <div class="container">
	
	<br><br>

	<div class="container-fluid" style="margin-top: 30px">
	
      <div class="row-fluid">
		<div style="width: 400px; margin: 0 auto">
			<div class="well well-sm">
				<img src="<?php echo base_url(); ?>upload/<?php echo $q_instansi->logo; ?>" class="thumbnail span3" style="display: inline; float: left; margin-right: 20px; width: 80px; height: 80px">
				<h3 style="margin: 5px 0 0.4em 0; font-size: 21px; color: #000; font-weight: bold"><?php echo $q_instansi->nama; ?></h3>
				<div style="color: #000; font-size: 13px" class="clearfix"><?php echo $q_instansi->alamat; ?></div>
			 </div>
		</div>
		
		<div class="well" style="width: 400px; margin: 20px auto; border: solid 1px #d9d9d9; padding: 30px 20px; border-radius: 8px">
		<form action="<?php echo base_URL(); ?>index.php/admin/do_login" method="post">
		<legend>Login Admin</legend>	
		<?=$this->session->flashdata("k")?>
		<table align="center" style="margin-bottom: 0" class="table-form" width="90%">
			<tr><td width="40%">Username</td><td><input type="text" autofocus name="u" required style="width: 200px" autofocus class="form-control"></td></tr>
			<tr><td>Password</td><td><input type="password" name="p" required style="width: 200px" class="form-control"></td></tr>
			<tr><td>Tahun</td><td><select name="ta" class="form-control" required><option value="">--</option>
			<?php 
			for ($i = 2012; $i <= (date('Y')); $i++) {
				if (date('Y') == $i) {
					echo "<option value='$i' selected>$i</option>";
				} else {
					echo "<option value='$i'>$i</option>";
				}
			}
			?>
			</select>
			</td></tr>
			<tr><td></td><td><input type="submit" class="btn btn-success" value="Login"></td></tr>
		</table>
		<center style="font-size: 11px">Username : <b>admin</b>, Password : <b>admin</b></center>
		</form>
		</div><!--/span-->
      </div><!--/row-->

    </div><!--/.fluid-container-->
	<center style="margin-top: -15px;">Versi 1.0 (September 2013) &copy; <a href="http://facebook.com/akhwan90">Nur Akhwan</a> | 
	<a href="http://nur-akhwan.blogspot.com/">Blog Nur Akhwan</a><br>
	<span style="color: red">*) Jangan dihilangkan copyright-nya ya, kecuali untuk tugas kuliah... hehe :)</span>
	</center>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$(" #alert" ).fadeOut(6000);
	});
	</script>
	  
    </div>
  
</body></html>
