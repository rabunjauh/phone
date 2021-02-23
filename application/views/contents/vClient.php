<div class="container box">
	
		<div class="row">
			<div class="col-lg-6">
				<h1>Employee Data</h1>
			</div>
		</div>

		<div class="row text-right">
			<div class="col-lg-6 col-lg-offset-6">
				<a href="<?php echo base_url() . 'cemployee' ?>" class="btn btn-default"><strong>Wasco</strong></a>
			<a href="<?php echo base_url() . 'cemployee/client' ?>" class="btn btn-default"><strong>Client</strong></a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6">			
				<a href="<?php echo base_url() . 'cemployee/add_client' ?>" class="btn btn-primary btn-lg">Add Employee</a>
			</div>
		</div>	
		<div class="row">
			<div class="col-lg-12">
			<?=form_open(base_url() . 'cemployee/search/'); ?>
			<div class="form-inline">
				<div class="form-group">
					<select name="selCategory" class="form-control">
						<option value="">Search By</option>
						<option value="idemployee">Employee ID</option>
						<option value="employeeno">Employee No</option>
						<option value="employeename">Employee Name</option>
						<option value="deptdesc">Department</option>
						<option value="positiondesc">Position</option>
					</select>						
					<input type="text" class="form-control" name="txtSearch" placeholder="Search">
					<button type="submit" name="btnSearch" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i>Search</button>
				</div>
			</div>
			<?=form_close(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
			<table class="table table-bordered">
			<tr>
				<td>No</td>
				<td>Employee ID</td>
				<td>Employee No</td>
				<td>Employee Name</td>
				<td>Department</td>
				<td>Position</td>
				<td colspan="2">Action</td>
			</tr>

			<?php
			$no = 1;
			foreach ($employees as $employee): ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $employee->idemployee; ?></td>
				<td><?php echo $employee->employeeno; ?></td>
				<td><?php echo $employee->employeename; ?></td>
				<td><?php echo $employee->deptdesc; ?></td>
				<td><?php echo $employee->positiondesc; ?></td>
				<td><a href="<?=base_url() . "cemployee/modifyEmployee/" . $employee->idemployee; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>	
			</tr>
			<?php $no++; ?>
			<?php endforeach ?>
		</table>
		<?php echo $this->pagination->create_links(); ?>
		</div>
		</div>		
</div>	