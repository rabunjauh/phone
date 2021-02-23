
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo base_url('assets/css/normalize.css') ?>" rel="stylesheet" media="screen,print">

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url('assets/bootstrap-3.2.0/css/bootstrap.css') ?>" rel="stylesheet" media="screen,print">

<!-- Font Awesome -->
<link href="<?php echo base_url('assets/font-awesome-4.1.0/css/font-awesome.min.css') ?>" rel="stylesheet" media="screen,print">
</head>
<body>
<div class="container box">
	<div class="row">
		<div class="col-lg-12 text-center">
			<?php echo $cover; ?>
		</div>
	</div>	

	<div class="row">
		<div class="col-lg-12">
			<h3><?php echo $meetingRooms_desc->deptdesc; ?></h3>
		</div>
	</div>

	<div class="row">	
		<div class="col-lg-12">
			<table class="table table-bordered table-striped" border="1" width="100%">
					<tr>
						<td class="col-lg-11">Meeting Room Description</td>
						<td class="col-lg-1">Ext</td>
					</tr>
					<?php
					foreach ($meetingRooms as $meetingRoom): ?>
					<tr>
						<td class="col-lg-11"><?php echo $meetingRoom->employeename; ?></td>
						<td class="col-lg-1"><?php echo $meetingRoom->extension; ?></td>	
					</tr>
					<?php endforeach; ?>	
				</table>
			</div>
	</div>	
</div>	
<?php echo $footer; ?>
</body>
</html>