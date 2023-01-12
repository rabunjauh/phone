<div class="container box">
	<div class="row">
		<div class="col-lg-6">
			<h2>Department</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<a href="<?php echo base_url() . 'cemployee/addDepartment'; ?>" class="btn btn-primary btn-lg">Add Department</a>
		</div>
	</div>	
	<br>
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-bordered" id="department">
				<thead>
					<tr>
						<th>No</th>
						<th>Department Name</th>
						<th>Code</th>
						<th>Status</th>
						<th>Order No</th>
						<th>Change Order</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php $no = 1; ?>
				<?php foreach ( $departments as $department ): ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $department->deptdesc; ?></td>
						<td><?php echo $department->group_desc; ?></td>
						<td>
							<?php 
								if ($department->stsactive == 1) {
									echo "ACTIVE";
								} else {
									echo "NOT ACTIVE";
								}
							?>
						</td>
						<td><?php echo $department->ordering; ?></td>
						<td>
							<a href="<?php echo base_url() . 'cemployee/increaseLevel/' . $department->iddept; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-arrow-up"></i></a>
							<a href="<?php echo base_url() . 'cemployee/decreaseLevel/' . $department->iddept; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-arrow-down"></i></a>
						</td>
						<td><a href="<?php echo base_url() . 'cemployee/modifyDepartment/' . $department->iddept; ?>" class="btn btn-primary"><li class="glyphicon glyphicon-edit"></li> Edit</a> | <a href="<?php echo base_url() . 'cemployee/deleteDepartment/' . $department->iddept; ?>" class="btn btn-primary"><li class="glyphicon glyphicon-trash"></li> Delete</a></td>
					</tr>
					<?php $no++; ?>
				<?php endforeach; ?>	
				</tbody>
			</table>
		</div>	
	</div>
</div>
<script>
	$(document).ready(function () {
  	$('#department').DataTable();
	});
</script>