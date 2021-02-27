<div class="container box">
	<div class="row" style="margin-top: 10px">				
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<a href="<?php echo base_url() . 'cextension' ?>" class="btn btn-default btn-flat">Wasco</a>
			<a href="<?php echo base_url() . 'cextension/client_yard2' ?>" class="btn btn-default btn-flat">Client</a>
		</div>	

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
			<a href="<?= base_url('cextension/pdf_extension_wasco_y2'); ?>" class="btn btn-primary" target="_blank">Generate PDF</a>
		</div>		
	</div>

	<div class="row text-center">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h3>Yard 2 Wasco</h3>
		</div>
	</div>
	<br>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 text-center">
			<?php echo $cover; ?>
		</div>
	</div>

	<?php if (!isset($topManagements_sukajadi_desc->deptdesc) && !isset($hrDepartments_yard2_desc->deptdesc) && !isset($firstAids_yard2_desc->deptdesc) && !isset($teDepartments_yard2_desc->deptdesc) && !isset($financeDepartments_yard2_desc->deptdesc) && !isset($misDepartments_yard2_desc->deptdesc)): ?>
		<div class="row">
			<?php if (isset($meetingRooms_yard2_desc->deptdesc)): ?>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<table  class="table table-bordered table-striped">
					<tr><td><strong><?php echo $meetingRooms_yard2_desc->deptdesc; ?></strong></td>
						<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_meeting_room_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
					</tr>
					<tr>
						<td class="col-md-5">Meeting Room description</td>
						<td class="col-md-1">Ext</td>
					</tr>

					<?php
					foreach ($meetingRooms as $meetingRoom): ?>
					<tr>
						<td class="col-md-5"><?php echo $meetingRoom->employeename; ?></td>
						<td class="col-md-1"><?php echo $meetingRoom->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>
			</div>
		<?php endif; ?>

		<?php if (isset($securities_yard2_desc->deptdesc)): ?>
			<div class="col-lg-4 col-md-4 col-sm-12">			
				<table class="table table-bordered table-striped">
					<tr>
						<td><strong><?php echo $securities_yard2_desc->deptdesc; ?></strong></td>
						<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_security'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
					</tr>
					<tr>
						<td>Employee Name</td>
						<td>Position</td>
						<td>Ext</td>
					</tr>

					<?php
					foreach ($securities as $security): ?>
					<tr>
						<td class="col-md-2"><?php echo $security->employeename; ?></td>
						<td class="col-md-3"><?php echo $security->positiondesc; ?></td>
						<td class="col-md-1"><?php echo $security->extension; ?></td>	
					</tr>
					<?php endforeach ?>					
				</table>			
			</div>
		<?php endif; ?>		

		<?php if (isset($hseDepartments_yard2_desc->deptdesc)): ?>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<table  class="table table-bordered table-striped">
					<tr>
						<td><strong><?php echo $hseDepartments_yard2_desc->deptdesc; ?></strong></td>
						<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_hse_department_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
					</tr>
					<tr>
						<td class="col-md-2">Employee Name</td>
						<td class="col-md-3">Position</td>
						<td class="col-md-1">Ext</td>
					</tr>

					<?php
					foreach ($hseDepartments as $hseDepartment): ?>
					<tr>
						<td class="col-md-2"><?php echo $hseDepartment->employeename; ?></td>
						<td class="col-md-3"><?php echo $hseDepartment->positiondesc; ?></td>
						<td class="col-md-1"><?php echo $hseDepartment->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>
			</div>
		<?php endif; ?>

		</div>
	<?php else : ?>	
		<div class="row">
		<?php if (isset($topManagements_yard2_desc->deptdesc)): ?>
			<div class="col-lg-4 col-md-4 col-sm-12">			
					<table class="table table-bordered table-striped">
						<tr>
							<td><strong><?php echo $topManagements_yard2_desc->deptdesc; ?></strong></td>
							<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_top_management_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
						</tr>
						<tr>
							<td class="col-md-3">Employee Name</td>
							<td class="col-md-4">Position</td>
							<td class="col-md-1">Ext</td>
						</tr>

						<?php
						foreach ($topManagements as $topManagement): ?>
						<tr>
							<td class="col-md-3"><?php echo $topManagement->employeename; ?></td>
							<td class="col-md-4"><?php echo $topManagement->positiondesc; ?></td>
							<td class="col-md-1"><?php echo $topManagement->extension; ?></td>		
						</tr>
						<?php endforeach; ?>	
					</table>			
			</div>
		<?php endif; ?>

		<?php if (isset($meetingRooms_yard2_desc->deptdesc)): ?>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<table  class="table table-bordered table-striped">
					<tr><td><strong><?php echo $meetingRooms_yard2_desc->deptdesc; ?></strong></td>
						<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_meeting_room_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
					</tr>
					<tr>
						<td class="col-md-5">Meeting Room description</td>
						<td class="col-md-1">Ext</td>
					</tr>

					<?php
					foreach ($meetingRooms as $meetingRoom): ?>
					<tr>
						<td class="col-md-5"><?php echo $meetingRoom->employeename; ?></td>
						<td class="col-md-1"><?php echo $meetingRoom->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>
			</div>
		<?php endif; ?>

			<div class="col-lg-4 col-md-4 col-sm-12">
				<?php if (isset($hrDepartments_yard2_desc->deptdesc)): ?>
				<table class="table table-bordered table-striped">
					<tr><td><strong><?php echo $hrDepartments_yard2_desc->deptdesc; ?></strong></td>
							<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_hr_department_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
						</tr>
						<tr>
							<td class="col-md-2">Employee Name</td>
							<td class="col-md-3">Position</td>
							<td class="col-md-1">Ext</td>
						</tr>

						<?php
						foreach ($hrDepartments as $hrDepartment): ?>
						<tr>
							<td class="col-md-2"><?php echo $hrDepartment->employeename; ?></td>
							<td class="col-md-3"><?php echo $hrDepartment->positiondesc; ?></td>
							<td class="col-md-1"><?php echo $hrDepartment->extension; ?></td>	
						</tr>
					<?php endforeach ?>	
				</table>
				<?php endif; ?>
			</div>
		</div>

		<div class="row">
			<?php if (isset($securities_yard2_desc->deptdesc)): ?>
				<div class="col-lg-4 col-md-4 col-sm-12">			
					<table class="table table-bordered table-striped">
						<tr>
							<td><strong><?php echo $securities_yard2_desc->deptdesc; ?></strong></td>
							<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_security_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
						</tr>
						<tr>
							<td>Employee Name</td>
							<td>Position</td>
							<td>Ext</td>
						</tr>

						<?php
						foreach ($securities as $security): ?>
						<tr>
							<td class="col-md-2"><?php echo $security->employeename; ?></td>
							<td class="col-md-3"><?php echo $security->positiondesc; ?></td>
							<td class="col-md-1"><?php echo $security->extension; ?></td>	
						</tr>
						<?php endforeach ?>					
					</table>			
				</div>
			<?php endif; ?>		

			<?php if (isset($firstAids_yard2_desc->deptdesc)): ?>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<table  class="table table-bordered table-striped">
						<tr>
							<td><strong><?php echo $firstAids_yard2_desc->deptdesc; ?></strong></td>
							<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_first_aid_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
						</tr>
						<tr>
							<td class="col-md-2">Employee Name</td>
							<td class="col-md-3">Position</td>
							<td class="col-md-1">Ext</td>
						</tr>

						<?php
						foreach ($firstAids as $firstAid): ?>
						<tr>
							<td class="col-md-2"><?php echo $firstAid->employeename; ?></td>
							<td class="col-md-3"><?php echo $firstAid->positiondesc; ?></td>
							<td class="col-md-1"><?php echo $firstAid->extension; ?></td>	
						</tr>
						<?php endforeach ?>	
					</table>			
				</div>
			<?php endif; ?>	

			<?php if (isset($teDepartments_yard2_desc->deptdesc)): ?>
				<div class="col-lg-4 col-md-4 col-sm-12">			
					<table  class="table table-bordered table-striped">
						<tr>
						<td><strong><?php echo $teDepartments_yard2_desc->deptdesc; ?></strong></td>
						<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_te_department_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
					</tr>
					<tr>
						<td class="col-md-2">Employee Name</td>
						<td class="col-md-3">Position</td>
						<td class="col-md-1">Ext</td>
					</tr>

					<?php
					foreach ($teDepartments as $teDepartment): ?>
					<tr>
						<td class="col-md-2"><?php echo $teDepartment->employeename; ?></td>
						<td class="col-md-3"><?php echo $teDepartment->positiondesc; ?></td>
						<td class="col-md-1"><?php echo $teDepartment->extension; ?></td>	
					</tr>
						<?php endforeach ?>	
					</table>			
				</div>
			<?php endif; ?>	
		</div>

		<div class="row">
			<?php if (isset($hseDepartments_yard2_desc->deptdesc)): ?>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<table  class="table table-bordered table-striped">
						<tr>
							<td><strong><?php echo $hseDepartments_yard2_desc->deptdesc; ?></strong></td>
							<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_hse_department_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
						</tr>
						<tr>
							<td class="col-md-2">Employee Name</td>
							<td class="col-md-3">Position</td>
							<td class="col-md-1">Ext</td>
						</tr>

						<?php
						foreach ($hseDepartments as $hseDepartment): ?>
						<tr>
							<td class="col-md-2"><?php echo $hseDepartment->employeename; ?></td>
							<td class="col-md-3"><?php echo $hseDepartment->positiondesc; ?></td>
							<td class="col-md-1"><?php echo $hseDepartment->extension; ?></td>	
						</tr>
						<?php endforeach ?>	
					</table>
				</div>
			<?php endif; ?>

			<?php if (isset($financeDepartments_yard2_desc->deptdesc)): ?>
				<div class="col-lg-4 col-md-4 col-sm-12">			
					<table  class="table table-bordered table-striped">
						<tr>
							<td><strong><?php echo $financeDepartments_yard2_desc->deptdesc; ?></strong></td>
							<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_finance_department_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
						</tr>
						<tr>
							<td class="col-md-2">Employee Name</td>
							<td class="col-md-3">Position</td>
							<td class="col-md-1">Ext</td>
						</tr>

						<?php
						foreach ($financeDepartments as $financeDepartment): ?>
						<tr>
							<td class="col-md-2"><?php echo $financeDepartment->employeename; ?></td>
							<td class="col-md-3"><?php echo $financeDepartment->positiondesc; ?></td>
							<td class="col-md-1"><?php echo $financeDepartment->extension; ?></td>	
						</tr>
						<?php endforeach ?>	
					</table>			
				</div>
			<?php endif; ?>

			<?php if (isset($misDepartments_yard2_desc->deptdesc)): ?>
				<div class="col-lg-4 col-md-4 col-sm-12">			
					<table class="table table-bordered table-striped">
						<tr>
							<td><strong><?php echo $misDepartments_yard2_desc->deptdesc; ?></strong></td>
							<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_mis_department_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
						</tr>
						<tr>
							<td>Employee Name</td>
							<td>Position</td>
							<td>Ext</td>
						</tr>

						<?php
						foreach ($misDepartments as $misDepartment): ?>
						<tr>
							<td class="col-md-2"><?php echo $misDepartment->employeename; ?></td>
							<td class="col-md-3"><?php echo $misDepartment->positiondesc; ?></td>
							<td class="col-md-1"><?php echo $misDepartment->extension; ?></td>	
						</tr>
						<?php endforeach ?>
					</table>			
				</div>
			<?php endif; ?>
		</div>		
	<?php endif; ?>
	

	<div class="row">
		<?php if (isset($structuralQaqcDepartments_yard2_desc->deptdesc)): ?>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<table class="table table-bordered table-striped">
					<tr>
						<td><strong><?php echo $structuralQaqcDepartments_yard2_desc->deptdesc; ?></strong></td>
						<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_str_qaqc_department_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
					</tr>
					<tr>
						<td class="col-md-2">Employee Name</td>
						<td class="col-md-3">Position</td>
						<td class="col-md-1">Ext</td>
					</tr>

					<?php
					foreach ($structuralQaqcDepartments as $structuralQaqcDepartment): ?>
					<tr>
						<td class="col-md-2"><?php echo $structuralQaqcDepartment->employeename; ?></td>
						<td class="col-md-3"><?php echo $structuralQaqcDepartment->positiondesc; ?></td>
						<td class="col-md-1"><?php echo $structuralQaqcDepartment->extension; ?></td>	
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		<?php endif; ?>

		<?php if (isset($eiQaqcDepartments_yard2_desc->deptdesc)): ?>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<table  class="table table-bordered table-striped">
					<tr>
						<td><strong><?php echo $eiQaqcDepartments_yard2_desc->deptdesc; ?></strong></td>
						<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_ei_qaqc_department_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
					</tr>
					<tr>
						<td class="col-md-2">Employee Name</td>
						<td class="col-md-3">Position</td>
						<td class="col-md-1">Ext</td>
					</tr>

					<?php
					foreach ($eiQaqcDepartments as $eiQaqcDepartment): ?>
					<tr>
						<td class="col-md-2"><?php echo $eiQaqcDepartment->employeename; ?></td>
						<td class="col-md-3"><?php echo $eiQaqcDepartment->positiondesc; ?></td>
						<td class="col-md-1"><?php echo $eiQaqcDepartment->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>			
			</div>	
		<?php endif; ?>

		<?php if (isset($scmDepartments_yard2_desc->deptdesc)): ?>
			<div class="col-lg-4 col-md-4 col-sm-12">
			<table  class="table table-bordered table-striped">
				<tr>
						<td><strong><?php echo $scmDepartments_yard2_desc->deptdesc; ?></strong></td>
						<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_scm_department_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
					</tr>
					<tr>
						<td class="col-md-2">Employee Name</td>
						<td class="col-md-3">Position</td>
						<td class="col-md-1">Ext</td>
					</tr>

					<?php
					foreach ($scmDepartments as $scmDepartment): ?>
					<tr>
						<td class="col-md-2"><?php echo $scmDepartment->employeename; ?></td>
						<td class="col-md-3"><?php echo $scmDepartment->positiondesc; ?></td>
						<td class="col-md-1"><?php echo $scmDepartment->extension; ?></td>	
					</tr>
				<?php endforeach ?>	
			</table>
		</div>
		<?php endif; ?>
	</div>

	<div class="row">
		<?php if (isset($strEngExtensions_sukajadi_desc->deptdesc)): ?>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<table class="table table-bordered table-striped">
					<tr>
						<td><strong><?php echo $strEngExtensions_sukajadi_desc->deptdesc; ?></strong></td>
						<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_str_eng_department_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
					</tr>
					<tr>
						<td class="col-md-2">Employee Name</td>
						<td class="col-md-3">Position</td>
						<td class="col-md-1">Ext</td>
					</tr>

					<?php
					foreach ($strEngExtensions as $strEng): ?>
					<tr>
						<td class="col-md-2"><?php echo $strEng->employeename; ?></td>
						<td class="col-md-3"><?php echo $strEng->positiondesc; ?></td>
						<td class="col-md-1"><?php echo $strEng->extension; ?></td>	
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		<?php endif; ?>		
	
		<?php if (isset($poDepartments_yard2_desc->deptdesc)): ?>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<table  class="table table-bordered table-striped">
					<tr>
						<td><strong><?php echo $poDepartments_yard2_desc->deptdesc; ?></strong></td>
						<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_po_department_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
					</tr>
					<tr>
						<td class="col-md-2">Employee Name</td>
						<td class="col-md-3">Position</td>
						<td class="col-md-1">Ext</td>
					</tr>

					<?php
					foreach ($poDepartments as $poDepartment): ?>
					<tr>
						<td class="col-md-2"><?php echo $poDepartment->employeename; ?></td>
						<td class="col-md-3"><?php echo $poDepartment->positiondesc; ?></td>
						<td class="col-md-1"><?php echo $poDepartment->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>
			</div>
		<?php endif; ?>		
	
		<?php if (isset($eiEngExtensions_yard2_desc->deptdesc)): ?>
			<div class="col-lg-4 col-md-4 col-sm-12">			
				<table  class="table table-bordered table-striped">
					<tr>
						<td><strong><?php echo $eiEngExtensions_yard2_desc->deptdesc; ?></strong></td>
						<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_ei_eng_department_y2'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
					</tr>
					<tr>
						<td>Employee Name</td>
						<td>Position</td>
						<td>Ext</td>
					</tr>

					<?php
					foreach ($eiEngExtensions as $eiEng): ?>
					<tr>
						<td class="col-md-2"><?php echo $eiEng->employeename; ?></td>
						<td class="col-md-3"><?php echo $eiEng->positiondesc; ?></td>
						<td class="col-md-1"><?php echo $eiEng->extension; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>			
			</div>
		<?php endif; ?>								
	</div>
</div>
