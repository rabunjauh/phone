<!DOCTYPE html>
<html>
<head>
	<title>Wasco Engineering Indonesia - Phone</title>
	<style type="text/css">
		.box{
			font-size: 12px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="style_print.css">
	<!-- Header -->
	<?php echo $header; ?>
	<!-- /Header -->

</head>
<body>
	<!-- Container -->
	<div class="container" style="width: 100%;">
		<div class="row text-center">
		</div>
		<!-- Navigation -->
		<div class="row">
			<?php 
				if ( isset($navigation) ){
						echo $navigation;  
				}else{
					echo '';
				}?>

		</div>
		<!-- /Navigation -->
		<div id="note">
                <?=($this->session->flashdata('message')) ? $this->session->flashdata('message') : '';?>   
            </div>
		<!-- Content -->
		<div class="content">
			<?php echo $content; ?>
		</div>
		<!-- /Content -->

		<!-- Footer -->
		<div style="margin-bottom:50px;">
			<?php echo $footer; ?>
		</div>
		<!-- /Footer -->
		
	</div>
	<!-- /Container -->

</body>
</html>

