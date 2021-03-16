<div class="container box">
	<div class="row text-center">
		<div class="col-lg-6 col-md-6 col-sm-6 col-sx-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
			<h3><?= $officeLocationDesc->office_location_desc ?></h3>
		</div>
	</div>
	
	<div class="row" >
		<div class="col-lg-6 col-md-6 col-sm-6 col-sx-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">	
				<div class="row">				
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left" style="margin: 10px 0px 10px 0px">
						<a href="<?= base_url('cextension/pdf_extension_wasco_y1'); ?>" class="btn btn-primary" target="_blank">Generate PDF All</a>
					</div>		
				</div>
		<?php 
			if (isset($phoneBooks)){
			foreach ($phoneBooks as $key => $departmentGroups) :
		?>
			<table class="table table-bordered table-striped">
					<tr>
						<td><strong><?php echo $key; ?></strong></td>
						<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_security'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
					</tr>
					<tr>
						<td>Employee Name</td>
						<td>Position</td>
						<td>Ext</td>
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
							<td class="col-md-2"><?php echo $departmentGroup['employeename']; ?></td>
							<td class="col-md-3"><?php echo $departmentGroup['positiondesc']; ?></td>
							<td class="col-md-1"><?php echo $extensionNo; ?></td>	
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
