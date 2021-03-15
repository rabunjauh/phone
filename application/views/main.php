<!DOCTYPE html>
<html>
<head>
	<title>Wasco Engineering Indonesia - Phone</title>
	<style type="text/css">
		.box{
			font-size: 12px;
		}

		.nav{
		margin-top: 30px;
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
		<?php 
			if ($menu == 'login'){
				echo '';
			} else {
		?>
			<!-- Navigation -->
		<div class="row">
			<nav class="nav">
				<ul>
					<?php 
						foreach ($navigation as $nav){
					?>		
							<li><a href="<?=base_url('cextension/index/') . $nav->office_location_id ;?>" title=""><?= $nav->office_location_desc ?></a></li>
					<?php	
						}	
						if ($this->session->userdata('username')) { 
					?>
					<li><a href="<?=base_url() . "cpabx1";?>" title="">PABX</a></li>
					<li><a href="<?=base_url() . "cemployee";?>" title="">Employees</a></li>
					<li><a href="<?=base_url() . "cemployee/department";?>" title="">Departments</a></li>
					<li><a href="<?=base_url() . "cemployee/position";?>" title="">Positions</a></li>
					<li><a href="<?=base_url() . "c_user";?>" title="">Users</a></li>
					<li><a href="<?=base_url() . "login/logout";?>" title="">Logout</a></li>
					<?php 
						} 
					?>
				</ul>
			</nav>	 
		</div>
		<!-- /Navigation -->
		<?php		
			}
		?>
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

