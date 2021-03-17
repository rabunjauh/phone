<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo base_url('assets/css/normalize.css') ?>" rel="stylesheet" media="screen,print">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/bootstrap-3.2.0/css/bootstrap.css') ?>" rel="stylesheet" media="screen,print">

    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/font-awesome-4.1.0/css/font-awesome.min.css') ?>" rel="stylesheet" media="screen,print">
</head>
<body>
<div class="container box">
	<div class="row text-center">
		<div class="col-lg-6 col-md-6 col-sm-6 col-sx-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
			<h3><?= $officeLocationDesc->office_location_desc ?></h3>
		</div>
	</div>
	<div class="row" >
		<div>	
		<?php 
			if (isset($phoneBooks)){
			foreach ($phoneBooks as $key => $departmentGroups) :
		?>
			<table border="1" width = "100%">
					<tr>
						<td colspan="3"><strong><?php echo $key; ?></strong></td>
					</tr>
					<tr>
						<td width="20%">Employee Name</td>
						<td width="70%">Position</td>
						<td width="10%">Ext</td>
					</tr>
		<?php	
				foreach ($departmentGroups as $assocIndex => $departmentGroup) :
					if ($departmentGroup['extension'] != 0 OR $departmentGroup['ext'] != NULL) {
						if ($departmentGroup['extension']){
							$extensionNo = $departmentGroup['extension'];
						} else {
							$extensionNo = $departmentGroup['ext'];
						}
		?>
						<tr>
							<td><?php echo $departmentGroup['employeename']; ?></td>
							<td><?php echo $departmentGroup['positiondesc']; ?></td>
							<td><?php echo $extensionNo; ?></td>	
						</tr>
		<?php	
					}	
				endforeach;
		?>		
				</table>			
		<?php
			endforeach;
			}	
		?>	
		</div>
	</div>
</div>	
</body>
</html>
