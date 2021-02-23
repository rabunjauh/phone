
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
			<h3>Yard 1 Wasco</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 text-center">
			<?php echo $cover; ?>
		</div>
	</div>	
	
	<?php if (!isset($topManagements_yard2_desc->deptdesc) && !isset($hrDepartments_yard2_desc->deptdesc) && !isset($firstAids_yard2_desc->deptdesc) && !isset($teDepartments_yard2_desc->deptdesc) && !isset($financeDepartments_yard2_desc->deptdesc) && !isset($misDepartments_yard2_desc->deptdesc)): ?>
		<div class="row">
			<?php if (isset($meetingRooms_yard2_desc->deptdesc)): ?>
			<div class="col-xs-4">
				<table  class="table table-bordered table-striped" border="1" width="100%">
					<tr>
						<td colspan="2" class="col-xs-4"><strong><?php echo $meetingRooms_yard2_desc->deptdesc; ?></strong></td>
					</tr>
					<tr>
						<td class="col-xs-3">Meeting Room description</td>
						<td class="col-xs-1">Ext</td>
					</tr>

					<?php
					foreach ($meetingRooms as $meetingRoom): ?>
					<tr>
						<td class="col-xs-3"><?php echo $meetingRoom->employeename; ?></td>
						<td class="col-xs-1"><?php echo $meetingRoom->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>
			</div>
		<?php endif; ?>

		<?php if (isset($securities_yard2_desc->deptdesc)): ?>
			<div class="col-xs-3">			
				<table class="table table-bordered table-striped">
					<tr>
						<td colspan="3" class="col-xs-3"><strong><?php echo $securities_yard2_desc->deptdesc; ?></strong></td>
					<tr>
						<td class="col-xs-1">Employee Name</td>
						<td class="col-xs-1">Position</td>
						<td class="col-xs-1">Ext</td>
					</tr>

					<?php
					foreach ($securities as $security): ?>
					<tr>
						<td class="col-xs-1"><?php echo $security->employeename; ?></td>
						<td class="col-xs-1"><?php echo $security->positiondesc; ?></td>
						<td class="col-xs-1"><?php echo $security->extension; ?></td>	
					</tr>
					<?php endforeach ?>					
				</table>			
			</div>
		<?php endif; ?>		

		<?php if (isset($hseDepartments_yard2_desc->deptdesc)): ?>
			<div class="col-xs-4">
				<table  class="table table-bordered table-striped">
					<tr>
						<td colspan="3" class="col-xs-4"><strong><?php echo $hseDepartments_yard2_desc->deptdesc; ?></strong></td>
					</tr>
					<tr>
						<td class="col-xs-1">Employee Name</td>
						<td class="col-xs-2">Position</td>
						<td class="col-xs-1">Ext</td>
					</tr>

					<?php
					foreach ($hseDepartments as $hseDepartment): ?>
					<tr>
						<td class="col-xs-1"><?php echo $hseDepartment->employeename; ?></td>
						<td class="col-xs-2"><?php echo $hseDepartment->positiondesc; ?></td>
						<td class="col-xs-1"><?php echo $hseDepartment->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>
			</div>
		<?php endif; ?>

		</div>
	<?php else : ?>	
		<div class="row">
		<?php if (isset($topManagements_yard2_desc->deptdesc)): ?>
			<div class="col-xs-4">			
					<table class="table table-bordered table-striped">
						<tr>
							<td colspan="3" class="col-xs-4"><strong><?php echo $topManagements_yard2_desc->deptdesc; ?></strong></td>
						</tr>
						<tr>
							<td class="col-xs-1">Employee Name</td>
							<td class="col-xs-2">Position</td>
							<td class="col-xs-1">Ext</td>
						</tr>

						<?php
						foreach ($topManagements as $topManagement): ?>
						<tr>
							<td class="col-xs-1"><?php echo $topManagement->employeename; ?></td>
							<td class="col-xs-2"><?php echo $topManagement->positiondesc; ?></td>
							<td class="col-xs-1"><?php echo $topManagement->extension; ?></td>		
						</tr>
						<?php endforeach; ?>	
					</table>			
			</div>
		<?php endif; ?>

		<?php if (isset($meetingRooms_yard2_desc->deptdesc)): ?>
			<div class="col-xs-3">
				<table  class="table table-bordered table-striped">
					<tr>
						<td colspan="3" class="col-xs-3"><strong><?php echo $meetingRooms_yard2_desc->deptdesc; ?></strong></td>
					</tr>
					<tr>
						<td class="col-xs-2">Meeting Room description</td>
						<td class="col-xs-1">Ext</td>
					</tr>

					<?php
					foreach ($meetingRooms as $meetingRoom): ?>
					<tr>
						<td class="col-xs-2"><?php echo $meetingRoom->employeename; ?></td>
						<td class="col-xs-1"><?php echo $meetingRoom->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>
			</div>
		<?php endif; ?>

			<div class="col-xs-4">
				<?php if (isset($hrDepartments_yard2_desc->deptdesc)): ?>
					<table class="table table-bordered table-striped">
						<tr>
							<td colspan="3" class="col-xs-4"><strong><?php echo $hrDepartments_yard2_desc->deptdesc; ?></strong></td>
						</tr>
						<tr>
							<td class="col-xs-1">Employee Name</td>
							<td class="col-xs-2">Position</td>
							<td class="col-xs-1">Ext</td>
						</tr>

						<?php
						foreach ($hrDepartments as $hrDepartment): ?>
							<tr>
								<td class="col-xs-1"><?php echo $hrDepartment->employeename; ?></td>
								<td class="col-xs-2"><?php echo $hrDepartment->positiondesc; ?></td>
								<td class="col-xs-1"><?php echo $hrDepartment->extension; ?></td>	
							</tr>
						<?php endforeach ?>	
					</table>
					<?php endif; ?>
			</div>
		</div>

		<div class="row">
			<?php if (isset($securities_yard2_desc->deptdesc)): ?>
				<div class="col-xs-4">			
					<table class="table table-bordered table-striped">
						<tr>
							<td colspan="3" class="col-xs-4"><strong><?php echo $securities_yard2_desc->deptdesc; ?></strong></td>
							r>
						<tr>
							<td class="col-xs-1">Employee Name</td>
							<td class="col-xs-2">Position</td>
							<td class="col-xs-1">Ext</td>
						</tr>

						<?php
						foreach ($securities as $security): ?>
						<tr>
							<td class="col-xs-1"><?php echo $security->employeename; ?></td>
							<td class="col-xs-2"><?php echo $security->positiondesc; ?></td>
							<td class="col-xs-1"><?php echo $security->extension; ?></td>	
						</tr>
						<?php endforeach ?>					
					</table>			
				</div>
			<?php endif; ?>		

			<?php if (isset($firstAids_yard2_desc->deptdesc)): ?>
				<div class="col-xs-4">
					<table class="table table-bordered table-striped">
						<tr>
							<td colspan="3" class="col-xs-3"><strong><?php echo $firstAids_yard2_desc->deptdesc; ?></strong></td>
							tr>
						<tr>
							<td class="col-xs-1">Employee Name</td>
							<td class="col-xs-2">Position</td>
							<td class="col-xs-1">Ext</td>
						</tr>

						<?php
						foreach ($firstAids as $firstAid): ?>
						<tr>
							<td class="col-xs-1"><?php echo $firstAid->employeename; ?></td>
							<td class="col-xs-2"><?php echo $firstAid->positiondesc; ?></td>
							<td class="col-xs-1"><?php echo $firstAid->extension; ?></td>	
						</tr>
						<?php endforeach ?>	
					</table>			
				</div>
			<?php endif; ?>	

			<?php if (isset($teDepartments_yard2_desc->deptdesc)): ?>
				<div class="col-xs-4">			
					<table  class="table table-bordered table-striped">
						<tr>
							<td colspan="3" class="col-xs-4"><strong><?php echo $teDepartments_yard2_desc->deptdesc; ?></strong></td>
						</tr>
						<tr>
							<td class="col-xs-1">Employee Name</td>
							<td class="col-xs-2">Position</td>
							<td class="col-xs-1">Ext</td>
						</tr>

					<?php
					foreach ($teDepartments as $teDepartment): ?>
					<tr>
						<td class="col-xs-1"><?php echo $teDepartment->employeename; ?></td>
						<td class="col-xs-2"><?php echo $teDepartment->positiondesc; ?></td>
						<td class="col-xs-1"><?php echo $teDepartment->extension; ?></td>	
					</tr>
						<?php endforeach ?>	
					</table>			
				</div>
			<?php endif; ?>	
		</div>

		<div class="row">
			<?php if (isset($hseDepartments_yard2_desc->deptdesc)): ?>
				<div class="col-xs-4">
					<table  class="table table-bordered table-striped">
						<tr>
							<td colspan="3" class="col-xs-4"><strong><?php echo $hseDepartments_yard2_desc->deptdesc; ?></strong></td>
						</tr>
						<tr>
							<td class="col-xs-1">Employee Name</td>
							<td class="col-xs-2">Position</td>
							<td class="col-xs-1">Ext</td>
						</tr>

						<?php
						foreach ($hseDepartments as $hseDepartment): ?>
						<tr>
							<td class="col-xs-1"><?php echo $hseDepartment->employeename; ?></td>
							<td class="col-xs-2"><?php echo $hseDepartment->positiondesc; ?></td>
							<td class="col-xs-1"><?php echo $hseDepartment->extension; ?></td>	
						</tr>
						<?php endforeach ?>	
					</table>
				</div>
			<?php endif; ?>

			<?php if (isset($financeDepartments_yard2_desc->deptdesc)): ?>
				<div class="col-xs-3">			
					<table  class="table table-bordered table-striped">
						<tr>
							<td colspan="3" class="col-xs-3"><strong><?php echo $financeDepartments_desc->deptdesc; ?></strong></td>
						</tr>
						<tr>
							<td class="col-xs-1">Employee Name</td>
							<td class="col-xs-1">Position</td>
							<td class="col-xs-1">Ext</td>
						</tr>

						<?php
						foreach ($financeDepartments as $financeDepartment): ?>
						<tr>
							<td class="col-xs-1"><?php echo $financeDepartment->employeename; ?></td>
							<td class="col-xs-1"><?php echo $financeDepartment->positiondesc; ?></td>
							<td class="col-xs-1"><?php echo $financeDepartment->extension; ?></td>	
						</tr>
						<?php endforeach ?>	
					</table>			
				</div>
			<?php endif; ?>

			<?php if (isset($misDepartments_yard2_desc->deptdesc)): ?>
				<div class="col-xs-4">			
					<table class="table table-bordered table-striped">
						<tr>
							<td colspan="3" class="col-xs-4"><strong><?php echo $misDepartments_yard2_desc->deptdesc; ?></strong></td>
						</tr>
						<tr>
							<td class="col-xs-1">Employee Name</td>
							<td class="col-xs-2">Position</td>
							<td class="col-xs-1">Ext</td>
						</tr>

						<?php
						foreach ($misDepartments as $misDepartment): ?>
						<tr>
							<td class="col-xs-1"><?php echo $misDepartment->employeename; ?></td>
							<td class="col-xs-2"><?php echo $misDepartment->positiondesc; ?></td>
							<td class="col-xs-1"><?php echo $misDepartment->extension; ?></td>	
						</tr>
						<?php endforeach ?>
					</table>			
				</div>
			<?php endif; ?>
		</div>		
	<?php endif; ?>
	

	<div class="row">
		<?php if (isset($structuralQaqcDepartments_yard2_desc->deptdesc)): ?>
			<div class="col-xs-4">
				<table class="table table-bordered table-striped">
					<tr>
						<td colspan="3" class="col-xs-4"><strong><?php echo $structuralQaqcDepartments_yard2_desc->deptdesc; ?></strong></td>
						>
					</tr>
					<tr>
						<td class="col-xs-1">Employee Name</td>
						<td class="col-xs-2">Position</td>
						<td class="col-xs-1">Ext</td>
					</tr>

					<?php
					foreach ($structuralQaqcDepartments as $structuralQaqcDepartment): ?>
					<tr>
						<td class="col-xs-1"><?php echo $structuralQaqcDepartment->employeename; ?></td>
						<td class="col-xs-2"><?php echo $structuralQaqcDepartment->positiondesc; ?></td>
						<td class="col-xs-1"><?php echo $structuralQaqcDepartment->extension; ?></td>	
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		<?php endif; ?>

		<?php if (isset($eiQaqcDepartments_yard2_desc->deptdesc)): ?>
			<div class="col-xs-3">
				<table  class="table table-bordered table-striped">
					<tr>
						<td colspan="3" class="col-xs-3"><strong><?php echo $eiQaqcDepartments_yard2_desc->deptdesc; ?></strong></td>
						
					</tr>
					<tr>
						<td class="col-xs-1">Employee Name</td>
						<td class="col-xs-1">Position</td>
						<td class="col-xs-1">Ext</td>
					</tr>

					<?php
					foreach ($eiQaqcDepartments as $eiQaqcDepartment): ?>
					<tr>
						<td class="col-xs-1"><?php echo $eiQaqcDepartment->employeename; ?></td>
						<td class="col-xs-1"><?php echo $eiQaqcDepartment->positiondesc; ?></td>
						<td class="col-xs-1"><?php echo $eiQaqcDepartment->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>			
			</div>	
		<?php endif; ?>

		<?php if (isset($scmDepartments_yard2_desc->deptdesc)): ?>
			<div class="col-xs-4">
				<table  class="table table-bordered table-striped">
					<tr>
							<td colspan="3" class="col-xs-4"><strong><?php echo $scmDepartments_yard2_desc->deptdesc; ?></strong></td>
					</tr>
					<tr>
						<td class="col-xs-1">Employee Name</td>
						<td class="col-xs-2">Position</td>
						<td class="col-xs-1">Ext</td>
					</tr>

					<?php
					foreach ($scmDepartments as $scmDepartment): ?>
					<tr>
						<td class="col-xs-1"><?php echo $scmDepartment->employeename; ?></td>
						<td class="col-xs-2"><?php echo $scmDepartment->positiondesc; ?></td>
						<td class="col-xs-1"><?php echo $scmDepartment->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>
		</div>
		<?php endif; ?>
	</div>

	<div class="row">
		<?php if (isset($strEngExtensions_yard2_desc->deptdesc)): ?>
			<div class="col-xs-4">
				<table class="table table-bordered table-striped">
					<tr>
						<td colspan="3" class="col-xs-4"><strong><?php echo $strEngExtensions_yard2_desc->deptdesc; ?></strong></td>
						
					</tr>
					<tr>
						<td class="col-xs-1">Employee Name</td>
						<td class="col-xs-2">Position</td>
						<td class="col-xs-1">Ext</td>
					</tr>

					<?php
					foreach ($strEngExtensions as $strEng): ?>
					<tr>
						<td class="col-xs-1"><?php echo $strEng->employeename; ?></td>
						<td class="col-xs-2"><?php echo $strEng->positiondesc; ?></td>
						<td class="col-xs-1"><?php echo $strEng->extension; ?></td>	
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		<?php endif; ?>		
	
		<?php if (isset($poDepartments_yard2_desc->deptdesc)): ?>
			<div class="col-xs-3">
				<table  class="table table-bordered table-striped">
					<tr>
						<td colspan="3" class="col-xs-3"><strong><?php echo $poDepartments_yard2_desc->deptdesc; ?></strong></td>
					</tr>
					<tr>
						<td class="col-xs-1">Employee Name</td>
						<td class="col-xs-1">Position</td>
						<td class="col-xs-1">Ext</td>
					</tr>

					<?php
					foreach ($poDepartments as $poDepartment): ?>
					<tr>
						<td class="col-xs-1"><?php echo $poDepartment->employeename; ?></td>
						<td class="col-xs-1"><?php echo $poDepartment->positiondesc; ?></td>
						<td class="col-xs-1"><?php echo $poDepartment->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>
			</div>
		<?php endif; ?>		
	
		<?php if (isset($eiEngExtensions_yard2_desc->deptdesc)): ?>
			<div class="col-xs-4">			
				<table  class="table table-bordered table-striped">
					<tr>
						<td colspan="3" class="col-xs-4"><strong><?php echo $eiEngExtensions_yard2_desc->deptdesc; ?></strong></td>
					</tr>
					<tr>
						<td class="col-xs-1">Employee Name</td>
						<td class="col-xs-1">Position</td>
						<td class="col-xs-1">Ext</td>
					</tr>

					<?php
					foreach ($eiEngExtensions as $eiEng): ?>
					<tr>
						<td class="col-xs-1"><?php echo $eiEng->employeename; ?></td>
						<td class="col-xs-1"><?php echo $eiEng->positiondesc; ?></td>
						<td class="col-xs-1"><?php echo $eiEng->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>			
			</div>
		<?php endif; ?>								
	</div>
</div>	
<?php echo $footer; ?>
</body>
</html>