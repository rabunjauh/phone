
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
		<div class="row text-center">
		<div class="col-xs-12">
			<h1>Yard 1 Client</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 text-center">
			<?php echo $cover; ?>
		</div>
	</div>	
	
	<div class="row">	
		<div class="col-xs-12">
			<?php if (isset($clients1_desc->deptdesc)): ?>
				<table class="table table-bordered table-striped" border="1" width="100%">
					<tr><td colspan="1" class="text-center"><strong>Client 1</strong></td><td colspan="2" class="text-center"><strong><?php echo $clients1_desc->deptdesc; ?></strong></td></tr>
					<tr>
						<th class="col-xs-5">Name</th>
						<th class="col-xs-5">Position</th>
						<th class="col-xs-1">Ext</th>
						</tr>
					<?php
					foreach ($clients1 as $client1): ?>
					<tr>
						<td class="col-xs-5"><?php echo $client1->employeename; ?></td>
						<td class="col-xs-5"><?php echo $client1->positiondesc; ?></td>
						<td class="col-xs-1"><?php echo $client1->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>
			<?php endif; ?>
		</div>
	</div>	
</div>	
<?php echo $footer; ?>
</body>
</html>