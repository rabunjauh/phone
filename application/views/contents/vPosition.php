<div class="container box">
	<div class="row">
		<div class="col-lg-12">
			<h2>Position</h2>
		</div>
	</div>

	<div class="row">		
		<div class="col-lg-12">
			<a href="<?php echo base_url() . 'cemployee/addPosition'; ?>" class="btn btn-primary btn-lg">Add Position</a>
		</div>		
	</div>
	<br>

	<div class="row">
		<div class="col-lg-12">
			<table class="table table-bordered" id="position">
				<thead>
					<tr>
						<th>No</th>
						<th>Position Name</th>
						<th>Department</th>
						<th>Level</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ( $positions as $position ): ?>
						<tr>
							<td><?php echo $no + 1; ?></td>
							<td><?php echo $position->positiondesc; ?></td>
							<td><?php echo $position->deptdesc; ?></td>
							<td><?php echo $position->level; ?></td>
							<td><a href="<?php echo base_url() . 'cemployee/modifyPosition/' . $position->idposition; ?>" class="btn btn-primary"><li class="glyphicon glyphicon-edit"></li> Edit</a> | <a href="<?php echo base_url() . 'cemployee/deletePosition/' . $position->idposition; ?>" class="btn btn-primary"><li class="glyphicon glyphicon-trash"></li> Delete</a></td>
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
  	$('#position').DataTable();
	});
</script>