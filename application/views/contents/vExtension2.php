<div class="container box">
	<div class="row text-right print" style="margin-bottom: 10px">				
		<div class="col-lg-12 col-md-12 col-sm-12">
			<br>
			<a href="<?php echo base_url() . 'cextension' ?>" class="btn btn-default btn-flat">Wasco</a>
			<a href="<?php echo base_url() . 'cextension/client' ?>" class="btn btn-default btn-flat">Client</a>
		</div>		
	</div>

	<div class="row text-center print">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h1>Yard 1 Wasco</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 text-center">
			<?php echo $cover; ?>
		</div>
	</div>
	
	<div class="row">	
		<div class="col-lg-12 col-md-12 col-sm-12 ">
			<?php if (isset($topManagements_desc->deptdesc)): ?>
				<table class="table table-bordered table-striped">
					<tr><td colspan="3"><strong><?php echo $topManagements_desc->deptdesc; ?></strong></td></tr>
					<?php
					foreach ($topManagements as $topManagement): ?>
					<tr>
						<td class="col-md-3"><?php echo $topManagement->employeename; ?></td>
						<td class="col-md-4 col_position"><?php echo $topManagement->positiondesc; ?></td>
						<td class="col-md-1 col_ext"><?php echo $topManagement->extension; ?></td>	
					</tr>
					<?php endforeach; ?>	
				</table>
			<?php endif; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-6">
			<?php if (isset($securities_desc->deptdesc)): ?>
			<table class="table table-bordered table-striped">
				<tr><td colspan="3"><strong><?php echo $securities_desc->deptdesc; ?></strong></td></tr>
				<tr>
					<td>Employee Name</td>
					<td>Position</td>
					<td>Ext</td>
				</tr>

				<?php
				foreach ($securities as $security): ?>
				<tr>
					<td class="col-md-2"><?php echo $security->employeename; ?></td>
					<td class="col-md-3 col_position"><?php echo $security->positiondesc; ?></td>
					<td class="col-md-1 col_ext"><?php echo $security->extension; ?></td>	
				</tr>
				<?php endforeach ?>	
			</table>
			<?php endif; ?>
		</div>

		<div class="col-lg-6 col-md-6">
			<?php if (isset($firstAids_desc->deptdesc)): ?>
			<table  class="table table-bordered table-striped">
				<tr><td colspan="3"><strong><?php echo $firstAids_desc->deptdesc; ?></strong></td></tr>
				<tr>
					<td>Employee Name</td>
					<td>Position</td>
					<td>Ext</td>
				</tr>

				<?php
				foreach ($firstAids as $firstAid): ?>
				<tr>
					<td class="col-md-2"><?php echo $firstAid->employeename; ?></td>
					<td class="col-md-3 col_position"><?php echo $firstAid->positiondesc; ?></td>
					<td class="col-md-1 col_ext"><?php echo $firstAid->extension; ?></td>	
				</tr>
				<?php endforeach ?>	
			</table>
			<?php endif; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?php if (isset($meetingRooms_desc->deptdesc)): ?>
			<table  class="table table-bordered table-striped">
				<tr><td colspan="3"><strong><?php echo $meetingRooms_desc->deptdesc; ?></strong></td></tr>
				<tr>
					<td>Employee Name</td>
					<td>Ext</td>
				</tr>

				<?php
				foreach ($meetingRooms as $meetingRoom): ?>
				<tr>
					<td class="col-md-5"><?php echo $meetingRoom->employeename; ?></td>
					<td class="col-md-1 col_ext"><?php echo $meetingRoom->extension; ?></td>	
				</tr>
				<?php endforeach ?>	
			</table>
			<?php endif; ?>
		</div>

		<div class="col-lg-6">
			<?php if (isset($hrDepartments_desc->deptdesc)): ?>
			<table class="table table-bordered table-striped">
				<tr><td colspan="3"><strong><?php echo $hrDepartments_desc->deptdesc; ?></strong></td></tr>
				<tr>
					<td>Employee Name</td>
					<td>Position</td>
					<td>Ext</td>
				</tr>

				<?php
				foreach ($hrDepartments as $hrDepartment): ?>
				<tr>
					<td class="col-md-2"><?php echo $hrDepartment->employeename; ?></td>
					<td class="col-md-3 col_position"><?php echo $hrDepartment->positiondesc; ?></td>
					<td class="col-md-1 col_ext"><?php echo $hrDepartment->extension; ?></td>	
				</tr>
				<?php endforeach ?>	
			</table>
			<?php endif; ?>
		</div>
	</div>
	<div class="row">	
		<div class="col-lg-6">
			<?php if (isset($hseDepartments_desc->deptdesc)): ?>
			<table  class="table table-bordered table-striped">
				<tr><td colspan="3"><strong><?php echo $hseDepartments_desc->deptdesc; ?></strong></td></tr>
				<tr>
					<td>Employee Name</td>
					<td>Position</td>
					<td>Ext</td>
				</tr>

				<?php
				foreach ($hseDepartments as $hseDepartment): ?>
				<tr>
					<td class="col-md-2"><?php echo $hseDepartment->employeename; ?></td>
					<td class="col-md-3 col_position"><?php echo $hseDepartment->positiondesc; ?></td>
					<td class="col-md-1 col_ext"><?php echo $hseDepartment->extension; ?></td>	
				</tr>
				<?php endforeach ?>	
			</table>
			<?php endif; ?>
		</div>

		<div class="col-lg-6">
			<?php if (isset($financeDepartments_desc->deptdesc)): ?>
			<table  class="table table-bordered table-striped">
				<tr><td colspan="3"><strong><?php echo $financeDepartments_desc->deptdesc; ?></strong></td></tr>
				<tr>
					<td>Employee Name</td>
					<td>Position</td>
					<td>Ext</td>
				</tr>

				<?php
				foreach ($financeDepartments as $financeDepartment): ?>
				<tr>
					<td class="col-md-2"><?php echo $financeDepartment->employeename; ?></td>
					<td class="col-md-3 col_position"><?php echo $financeDepartment->positiondesc; ?></td>
					<td class="col-md-1"><?php echo $financeDepartment->extension; ?></td>	
				</tr>
				<?php endforeach ?>	
			</table>
			<?php endif; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?php if (isset($strEngExtensions_desc->deptdesc)): ?>
			<table class="table table-bordered table-striped">
				<tr><td colspan="3"><strong><?php echo $strEngExtensions_desc->deptdesc; ?></strong></td></tr>
				<tr>
					<td>Employee Name</td>
					<td>Position</td>
					<td>Ext</td>
				</tr>

				<?php
				foreach ($strEngExtensions as $strEng): ?>
				<tr>
					<td class="col-md-2"><?php echo $strEng->employeename; ?></td>
					<td class="col-md-3 col_position"><?php echo $strEng->positiondesc; ?></td>
					<td class="col-md-1 col_ext"><?php echo $strEng->extension; ?></td>	
				</tr>
				<?php endforeach ?>
			</table>
			<?php endif; ?>
		</div>

		<div class="col-lg-6">
			<?php if (isset($poDepartments_desc->deptdesc)): ?>
			<table  class="table table-bordered table-striped">
				<tr><td colspan="3"><strong><?php echo $poDepartments_desc->deptdesc; ?></strong></td></tr>
				<tr>
					<td>Employee Name</td>
					<td>Position</td>
					<td>Ext</td>
				</tr>

				<?php
				foreach ($poDepartments as $poDepartment): ?>
				<tr>
					<td class="col-md-2"><?php echo $poDepartment->employeename; ?></td>
					<td class="col-md-3 col_position"><?php echo $poDepartment->positiondesc; ?></td>
					<td class="col-md-1 col_ext"><?php echo $poDepartment->extension; ?></td>	
				</tr>
				<?php endforeach ?>	
			</table>
			<?php endif; ?>
		</div>
		
		
	</div>
	<div class="row">	
		<div class="col-lg-6">
			<?php if (isset($structuralQaqcDepartments_desc->deptdesc)): ?>
			<table class="table table-bordered table-striped">

				<tr><td colspan="3"><strong><?php echo $structuralQaqcDepartments_desc->deptdesc; ?></strong></td></tr>
				<tr>
					<td>Employee Name</td>
					<td>Position</td>
					<td>Ext</td>
				</tr>

				<?php
				foreach ($structuralQaqcDepartments as $structuralQaqcDepartment): ?>
				<tr>
					<td class="col-md-2"><?php echo $structuralQaqcDepartment->employeename; ?></td>
					<td class="col-md-3 col_position"><?php echo $structuralQaqcDepartment->positiondesc; ?></td>
					<td class="col-md-1 col_ext"><?php echo $structuralQaqcDepartment->extension; ?></td>	
				</tr>
				<?php endforeach ?>
			</table>
			<?php endif; ?>
		</div>	

		<div class="col-lg-6">
			<?php if (isset($eiQaqcDepartments_desc->deptdesc)): ?>
			<table  class="table table-bordered table-striped">
				<tr><td colspan="3"><strong><?php echo $eiQaqcDepartments_desc->deptdesc; ?></strong></td></tr>
				<tr>
					<td>Employee Name</td>
					<td>Position</td>
					<td>Ext</td>
				</tr>

				<?php
				foreach ($eiQaqcDepartments as $eiQaqcDepartment): ?>
				<tr>
					<td class="col-md-2"><?php echo $eiQaqcDepartment->employeename; ?></td>
					<td class="col-md-3 col_position"><?php echo $eiQaqcDepartment->positiondesc; ?></td>
					<td class="col-md-1 col_ext"><?php echo $eiQaqcDepartment->extension; ?></td>	
				</tr>
				<?php endforeach ?>	
			</table>
			<?php endif; ?>
		</div>							
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?php if (isset($scmDepartments_desc->deptdesc)): ?>
			<table  class="table table-bordered table-striped">
				<tr><td colspan="3"><strong><?php echo $scmDepartments_desc->deptdesc; ?></strong></td></tr>
				<tr>
					<td>Employee Name</td>
					<td>Position</td>
					<td>Ext</td>
				</tr>

				<?php
				foreach ($scmDepartments as $scmDepartment): ?>
				<tr>
					<td class="col-md-2"><?php echo $scmDepartment->employeename; ?></td>
					<td class="col-md-3 col_position"><?php echo $scmDepartment->positiondesc; ?></td>
					<td class="col-md-1 col_ext"><?php echo $scmDepartment->extension; ?></td>	
				</tr>
				<?php endforeach ?>	
			</table>
			<?php endif; ?>
		</div>

		<div class="col-lg-6">
			<?php if (isset($eiEngExtensions_desc->deptdesc)): ?>
			<table  class="table table-bordered table-striped">
				<tr><td colspan="3"><strong><?php echo $eiEngExtensions_desc->deptdesc; ?></strong></td></tr>
				<tr>
					<td>Employee Name</td>
					<td>Position</td>
					<td>Ext</td>
				</tr>

				<?php
				foreach ($eiEngExtensions as $eiEng): ?>
				<tr>
					<td class="col-md-2"><?php echo $eiEng->employeename; ?></td>
					<td class="col-md-3 col_position"><?php echo $eiEng->positiondesc; ?></td>
					<td class="col-md-1 col_ext"><?php echo $eiEng->extension; ?></td>	
				</tr>
				<?php endforeach ?>	
			</table>
			<?php endif; ?>
		</div>				
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?php if (isset($misDepartments_desc->deptdesc)): ?>
			<table class="table table-bordered table-striped">
				<tr><td colspan="3"><strong><?php echo $misDepartments_desc->deptdesc; ?></strong></td></tr>
				<tr>
					<td>Employee Name</td>
					<td>Position</td>
					<td>Ext</td>
				</tr>

				<?php
				foreach ($misDepartments as $misDepartment): ?>
				<tr>
					<td class="col-md-2"><?php echo $misDepartment->employeename; ?></td>
					<td class="col-md-3 col_position"><?php echo $misDepartment->positiondesc; ?></td>
					<td class="col-md-1 col_ext"><?php echo $misDepartment->extension; ?></td>	
				</tr>
				<?php endforeach ?>
			</table>
			<?php endif; ?>
		</div>

		<div class="col-lg-6">
			<?php if (isset($teDepartments_desc->deptdesc)): ?>
			<table  class="table table-bordered table-striped">
				<tr><td colspan="3"><strong><?php echo $teDepartments_desc->deptdesc; ?></strong></td></tr>
				<tr>
					<td>Employee Name</td>
					<td>Position</td>
					<td>Ext</td>
				</tr>

				<?php
				foreach ($teDepartments as $teDepartment): ?>
				<tr>
					<td class="col-md-2"><?php echo $teDepartment->employeename; ?></td>
					<td class="col-md-3 col_position"><?php echo $teDepartment->positiondesc; ?></td>
					<td class="col-md-1 col_ext"><?php echo $teDepartment->extension; ?></td>	
				</tr>
				<?php endforeach ?>	
			</table>
			<?php endif; ?>
		</div>
	</div>
</div>	
