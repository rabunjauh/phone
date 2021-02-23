<div class="container box">
	<div class="row">
		<div class="col-lg-12">
			<h2>Department</h2>
		</div>
	</div>

	<div class="row text-right">
		<div class="col-lg-6 col-lg-offset-6">
			<a href="<?php echo base_url() . 'cemployee/department' ?>" class="btn btn-default"><strong>Department</strong></a>
		<a href="<?php echo base_url() . 'cemployee/company' ?>" class="btn btn-default"><strong>Company</strong></a>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<a href="<?php echo base_url() . 'cemployee/add_company'; ?>" class="btn btn-primary btn-lg">Add Company</a>
		</div>
	</div>	
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-bordered">
				<tr>
					<th>No</th>
					<th>Company Name</th>
					<th>Action</th>
				</tr>
				<?php $no = 1; ?>
				<?php foreach ( $companies as $company ): ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $company->company; ?></td>
						<td><a href="<?php echo base_url() . 'cemployee/modify_company/' . $company->id; ?>" class="btn btn-primary"><li class="glyphicon glyphicon-edit"></li> Edit</a> | <a href="<?php echo base_url() . 'cemployee/delete_company/' . $company->id; ?>" class="btn btn-primary"><li class="glyphicon glyphicon-trash"></li> Delete</a></td>
					</tr>
					<?php $no++; ?>
				<?php endforeach; ?>	
			</table>
			<?php echo $this->pagination->create_links(); ?>
		</div>
	</div>
</div>