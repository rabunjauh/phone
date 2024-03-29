<!DOCTYPE html>
<html>

<head>
	<title>Wasco Engineering Indonesia - Phone</title>
	<style type="text/css">
		.box {
			font-size: 12px;
		}

		.nav {
			margin-top: 10px 10px 10px 10px;
		}

		#topBtn {
			display: none;
			position: fixed;
			bottom: 20px;
			right: 30px;
			z-index: 99;
			font-size: 18px;
			border: 1px;
			border-style: solid;
			background-color: #D3D3D3;
			cursor: pointer;
			padding: 15px;
			border-radius: 4px;
		}

		#topBtn:hover {
			background-color: #FFFFFF;
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
		if ($menu == 'login') {
			echo '';
		} else {
		?>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-sx-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 text-center">
					<?php echo $cover; ?>
				</div>
			</div>
			<!-- Navigation -->
			<div class="row">
				<nav class="nav">
					<ul>
						<?php
						foreach ($navigation as $nav) {
						?>
							<li><a href="<?= base_url('cextension/index/') . $nav->office_location_id; ?>" title=""><?= $nav->office_location_desc ?></a></li>
						<?php
						}
						?>
						<li><a href="<?= base_url("cextension/information"); ?>" title="">Information</a></li>
						<?php
						if ($this->session->userdata('username')) {
						?>
							<li><a href="<?= base_url() . "cemployee"; ?>" title="">Employees</a></li>
							<li><a href="<?= base_url() . "cextension/extensionDetail"; ?>" title="">Extension Detail</a></li>
							<li><a href="<?= base_url() . "cemployee/department"; ?>" title="">Departments</a></li>
							<li><a href="<?= base_url() . "cemployee/position"; ?>" title="">Positions</a></li>
							<li><a href="<?= base_url() . "c_user"; ?>" title="">Users</a></li>
							<li><a href="<?= base_url() . "cemployee/officeLocation"; ?>" title="">Office Location</a></li>
							<li><a href="<?= base_url() . "csetting"; ?>" title="">Setting</a></li>
							<li><a href="<?= base_url() . "login/logout"; ?>" title="">Logout</a></li>
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
		<br>
		<br>
		<div class="row">
			<div id="note">
				<?= ($this->session->flashdata('message')) ? $this->session->flashdata('message') : ''; ?>
			</div>
		</div>

		<?php if (isset($officeLocationId)) { ?>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left" style="margin: 0px 0px 0px 10px">
					<a href="<?= base_url('cextension/index/') . $officeLocationId . "/pdf"; ?>" class="btn btn-primary" target="_blank">Generate PDF</a>
				</div>
			</div>
		<?php } ?>

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