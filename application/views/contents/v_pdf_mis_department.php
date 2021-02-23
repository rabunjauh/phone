
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
			<h3><?php echo $misDepartments_desc->deptdesc; ?></h3>
		</div>
	</div>

	<div class="row">	
		<div class="col-lg-12">
			<table class="table table-bordered table-striped" border="1" width="100%">
					<tr>
						<th class="col-lg-5">Employee Name</th>
						<th class="col-lg-5">Position</th>
						<th class="col-lg-1">Ext</th>
					</tr>
					<?php
					foreach ($misDepartments as $misDepartment): ?>
					<tr>
						<td class="col-lg-5"><?php echo $misDepartment->employeename; ?></td>
						<td class="col-lg-5"><?php echo $misDepartment->positiondesc; ?></td>
						<td class="col-lg-1"><?php echo $misDepartment->extension; ?></td>	
					</tr>
					<?php endforeach; ?>	
				</table>
			</div>
	</div>	
</div>	
<?php echo $footer; ?>
</body>
</html>