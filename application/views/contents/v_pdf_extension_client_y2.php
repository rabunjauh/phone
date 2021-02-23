
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
		<div class="col-xs-5">
			<?php if (isset($clients1_desc->deptdesc)): ?>
				<table class="table table-bordered table-striped" border="1" width="100%">
					<tr><td colspan="1" class="text-center"><strong>Client 1</strong></td><td colspan="2" class="text-center"><strong><?php echo $clients1_desc->deptdesc; ?></strong></td></tr>
					<tr>
						<th class="col-xs-2">Name</th>
						<th class="col-xs-2">Position</th>
						<th class="col-xs-1">Ext</th>
						</tr>
					<?php
					foreach ($clients1 as $client1): ?>
					<tr>
						<td class="col-xs-2"><?php echo $client1->employeename; ?></td>
						<td class="col-xs-2"><?php echo $client1->positiondesc; ?></td>
						<td class="col-xs-1"><?php echo $client1->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>
			<?php endif; ?>
		</div>
	
		<div class="col-xs-5">
			<?php if (isset($clients1_desc->deptdesc)): ?>
				<table class="table table-bordered table-striped">
					<tr><td colspan="1" class="text-center"><strong>Client 2</strong></td><td colspan="2" class="text-center"><strong><?php echo $clients2_desc->deptdesc; ?></strong></td></tr>
					<tr>
						<th class="col-xs-2">Name</th>
						<th class="col-xs-2">Position</th>
						<th class="col-xs-1">Ext</th>
						</tr>
					<?php
					foreach ($clients2 as $client2): ?>
					<tr>
						<td class="col-xs-2"><?php echo $client2->employeename; ?></td>
						<td class="col-xs-2"><?php echo $client2->positiondesc; ?></td>
						<td class="col-xs-1"><?php echo $client2->extension; ?></td>
						</tr>
					<?php endforeach ?>	
				</table>
			<?php endif; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-5">
				<?php if (isset($clients3_desc->deptdesc)): ?>
					<table class="table table-bordered table-striped">
						<tr><td colspan="1" class="text-center"><strong>Client 3</strong></td><td colspan="2" class="text-center"><strong><?php if (isset($clients3_desc->deptdesc)){echo $clients3_desc->deptdesc;} ?></strong></td></tr>
						<tr>
							<th class="col-xs-2">Name</th>
							<th class="col-xs-2">Position</th>
							<th class="col-xs-1">Ext</th>
						</tr>
						<?php
						foreach ($clients3 as $client3): ?>
						<tr>
							<td class="col-xs-2"><?php echo $client3->employeename; ?></td>
							<td class="col-xs-2"><?php echo $client3->positiondesc; ?></td>
							<td class="col-xs-1"><?php echo $client3->extension; ?></td>	
						</tr>
						<?php endforeach ?>	
					</table>
				<?php endif; ?>
			</div>
		

		<div class="col-xs-5">
			<?php if (isset($clients4_desc->deptdesc)): ?>
				<table class="table table-bordered table-striped">
					<tr><td colspan="1" class="text-center"><strong>Client 4</strong></td><td colspan="2" class="text-center"><strong><?php echo $clients4_desc->deptdesc; ?></strong></td></tr>
					<tr>
						<th class="col-xs-2">Name</th>
						<th class="col-xs-2">Position</th>
						<th class="col-xs-1">Ext</th>
					</tr>
					<?php
					foreach ($clients4 as $client4): ?>
					<tr>
						<td class="col-xs-2"><?php echo $client4->employeename; ?></td>
						<td class="col-xs-2"><?php echo $client4->positiondesc; ?></td>
						<td class="col-xs-1"><?php echo $client4->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>
			<?php endif; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-5">
			<?php if (isset($clients5_desc->deptdesc)): ?>
				<table class="table table-bordered table-striped">
					<tr><td colspan="1" class="text-center"><strong>Client 5</strong></td><td colspan="2" class="text-center"><strong><?php echo $clients5_desc->deptdesc; ?></strong></td></tr>
					<tr>
						<th class="col-xs-2">Name</th>
						<th class="col-xs-2">Position</th>
						<th class="col-xs-1">Ext</th>
					</tr>
					<?php
					foreach ($clients5 as $client5): ?>
					<tr>
						<td class="col-xs-2"><?php echo $client5->employeename; ?></td>
						<td class="col-xs-2"><?php echo $client5->positiondesc; ?></td>
						<td class="col-xs-1"><?php echo $client5->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>
			<?php endif; ?>
		</div>

		<div class="col-xs-5">
			<?php if (isset($clients6_desc->deptdesc)): ?>
				<table class="table table-bordered table-striped">
					<tr><td colspan="1" class="text-center"><strong>Client 6</strong></td><td colspan="2" class="text-center"><strong><?php echo $clients6_desc->deptdesc; ?></strong></td></tr>
					<tr>
						<th class="col-xs-2">Name</th>
						<th class="col-xs-2">Position</th>
						<th class="col-xs-1">Ext</th>
					</tr>
					<?php
					foreach ($clients6 as $client6): ?>
					<tr>
						<td class="col-xs-2"><?php echo $client6->employeename; ?></td>
						<td class="col-xs-2"><?php echo $client6->positiondesc; ?></td>
						<td class="col-xs-1"><?php echo $client6->extension; ?></td>	
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