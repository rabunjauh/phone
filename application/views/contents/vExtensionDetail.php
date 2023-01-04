<div class="container box">
	<div class="row">
		<div class="col-lg-6">
			<h2>Extension Detail</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<!-- <a href="<?php echo base_url() . 'cemployee/addextensionDetail'; ?>" class="btn btn-primary btn-lg">Add extensionDetail</a> -->
		</div>
	</div>	
	<br>
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-bordered" id="extensionDetail">
				<thead>
					<tr>
						<th>No</th>
						<th>Extension No</th>
						<th>Status</th>
						<th>Group</th>
						<th>Department</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php $no = 1; ?>
				<?php var_dump($extensionDetails); ?>
				<?php foreach ( $extensionDetails as $extensionDetail ): ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $extensionDetail->extension_no; ?></td>
						<td><?php echo ($extensionDetail->status == 0) ? 'Available' : 'Not Available'; ?></td>
						<td><?php echo $extensionDetail->name; ?></td>
						<td><?php echo $extensionDetail->deptdesc; ?></td>
						<td>
							<a href="<?php echo base_url() . 'cemployee/modifyextensionDetail/' . $extensionDetail->id; ?>" class="btn btn-primary"><li class="glyphicon glyphicon-edit"></li> Edit</a> | 
							<a href="<?php echo base_url() . 'cemployee/deleteextensionDetail/' . $extensionDetail->id; ?>" class="btn btn-primary"><li class="glyphicon glyphicon-trash"></li> Delete</a></td>
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
  	$('#extensionDetail').DataTable();
	});
</script>