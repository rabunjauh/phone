<div class="container box">
	<div class="row" style="margin-top: 10px">				
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<a href="<?php echo base_url() . 'cextension' ?>" class="btn btn-default btn-flat">Wasco</a>
			<a href="<?php echo base_url() . 'cextension/client' ?>" class="btn btn-default btn-flat">Client</a>
		</div>	

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
			<a href="<?= base_url('cextension/pdf_extension_wasco_y1'); ?>" class="btn btn-primary" target="_blank">Generate PDF</a>
		</div>		
	</div>

	<div class="row text-center">
		<div class="col-lg-6 col-md-6 col-sm-6 col-sx-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
			<h3>Yard 1 Wasco</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-sx-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 text-center">
			<?php echo $cover; ?>
		</div>
	</div>
	
	<div class="row" >
		<?php 
			foreach ($departments as $department) : 
				if ( $department->deptdesc === 'TOP MANAGEMENT'){
					$ext = $topManagements;
				}elseif ( $department->deptdesc === 'STRUCTURAL ENGINEERING'){
					$ext = $strEngExtensions;
				}elseif ( $department->deptdesc === 'FINANCE'){
					$ext = $financeDepartments;
				}elseif ( $department->deptdesc === 'HR'){
					$ext = $hrDepartments;
				}elseif ( $department->deptdesc === 'HSE'){
					$ext = $hseDepartments;
				}elseif ( $department->deptdesc === 'MIS'){
					$ext = $misDepartments;
				}elseif ( $department->deptdesc === 'PROJECT & OPERATION'){
					$ext = $poDepartments;
				}elseif ( $department->deptdesc === 'STRUCTURAL QAQC'){
					$ext = $structuralQaqcDepartments;
				}elseif ( $department->deptdesc === 'SUPPLY CHAIN'){
					$ext = $scmDepartments;
				}elseif ( $department->deptdesc === 'TENDERING & ESTIMATION'){
					$ext = $teDepartments;
				}elseif ( $department->deptdesc === 'E & I ENGINEERING'){
					$ext = $eiEngExtensions;
				}elseif ( $department->deptdesc === 'E & I QAQC'){
					$ext = $eiQaqcDepartments;
				}elseif ( $department->deptdesc === 'MEETING ROOM'){
					$ext = $meetingRooms;
				}elseif ( $department->deptdesc === 'FIRST AID'){
					$ext = $firstAids;
				}elseif ( $department->deptdesc === 'SECURITY POST'){
					$ext = $securities;
				}

				if ($ext){
		?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-sx-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">			
				<table class="table table-bordered table-striped">
					<tr>
						<td><strong><?php echo $department->deptdesc; ?></strong></td>
						<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_security'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
					</tr>
					<tr>
						<td>Employee Name</td>
						<td>Position</td>
						<td>Ext</td>
					</tr>

					<?php
					foreach ($ext as $value): 
						if ($value->extId == 0) {
							$extensionNo = $value->ext;
						} else {
							$extensionNo = $value->extension;
						}
					?>
					<tr>
						<td class="col-md-2"><?php echo $value->employeename; ?></td>
						<td class="col-md-3"><?php echo $value->positiondesc; ?></td>
						<td class="col-md-1"><?php echo $extensionNo; ?></td>	
					</tr>
					<?php endforeach ?>	
				</table>			
			</div>
			<?php } ?>
		<?php endforeach ?>
	</div>
</div>	
