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
			<div class="col-lg-6 col-md-6 col-sm-6 col-sx-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">			
		<?php 
		var_dump($phoneBooks);
		   for ($i = 0; $i < sizeof($phoneBooks); $i++){ 
				if ($phoneBooks[$i]){
				$phoneBook = $phoneBooks[$i];
		?>
				<table class="table table-bordered table-striped">
					<tr>
						<td><strong></strong></td>
						<td colspan="2" class="text-right"><a href="<?= base_url('cextension/pdf_security'); ?>" class="btn btn-primary" target="_blank">PDF</a></td>
					</tr>
					<tr>
						<td>Employee Name</td>
						<td>Position</td>
						<td>Ext</td>
					</tr>

					<?php						
						for ($j = 0; $j < sizeof($phoneBook); $j++){
					?>
					<tr>
						<td class="col-md-2"><?php echo $phoneBooks[$i][$j]->employeename; ?></td>
						<td class="col-md-3"><?php echo $phoneBooks[$i][$j]->positiondesc; ?></td>
						<td class="col-md-1"><?php echo $phoneBooks[$i][$j]->extension; ?></td>	
					</tr>
			<?php
			 			}
					}
					 
				} 
			?>	
				</table>			
			</div>
	</div>
</div>	
