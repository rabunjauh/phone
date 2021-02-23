<div class="container box">	
	<div class = "row">
		<h1>Modify Employee</h1>
	</div>	

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<?=form_open(base_url() . 'cemployee/modifyEmployee/' . $getEmployeeByIds->idemployee); ?>
		<?php foreach ( $employees as $employee ): ?>
			<div class="form-group">
					<label for="txtEmployeeId">Employee ID :</label>			
					<input type="text" name="txtEmployeeId" class="form-control" value="<?php echo $employee->idemployee; ?>" placeholder="EmployeeId" disabled>
			</div>
			
			<div class="form-group">
				<label for="txtEmployeeNo" >Employee No :</label>
					<input type="text" name="txtEmployeeNo" class="form-control" value="<?php echo $employee->employeeno; ?>" placeholder="Employee No">
				</div>	

			<div class="form-group">
				<label for="txtEmployeeName">Employee :</label>			
					<input type="text" name="txtEmployeeName"  class="form-control" value="<?php  echo $employee->employeename; ?>" placeholder="EmployeeId" required>
				</div>

			<div class="form-group">
				<label for="selDepartment">Department :</label>
				<select name="selDepartment" class="form-control" required>
				<option value="<?php echo $employee->iddept; ?>"><?php echo $employee->deptdesc; ?></option>
				<?php foreach ( $departments as $department ): ?>
				<option value="<?=$department->iddept; ?>"><?=$department->deptdesc; ?></option>
				<?php endforeach; ?>
			</select>
			</div>
			
			<div class="form-group">
				<label for="selPosition">Position :</label>
				<select name="selPosition" class="form-control" required>
					<option value="<?php echo $employee->idposition; ?>"><?php echo $employee->positiondesc; ?></option>
					<?php foreach ($positions as $position): ?>
					<option value="<?=$position->idposition; ?>"><?=$position->deptdesc . " - " . $position->positiondesc; ?></option>
					<?php endforeach; ?>	
				</select>
			</div>
			
			<div class="form-group">
				<label for="selCode">Company Code :</label>
				<select name="selCode" class="form-control">
				<option value="<?php echo $employee->code; ?>"><?php echo $employee->code; ?></option>
				<option value="">Company Code</option>
				<option value="c1">Client 1</option>
				<option value="c2">Client 2</option>
				<option value="c3">Client 3</option>
				<option value="c4">Client 4</option>
				<option value="c5">Client 5</option>
				<option value="c6">Client 6</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="selExtension">Extension No :</label>
				<select name="selExtension" class="form-control">
					<option value="<?php echo $employee->extId; ?>"><?php echo $employee->extension; ?></option>
					<option value="">Extension No</option>
					<?php foreach ( $extensions as $extension ): ?>
						<option value="<?php echo $extension->id; ?>"><?php echo $extension->extension . " " . $extension->pabxLocation; ?></option>}
					<?php endforeach; ?>
				</select>
				<input type="hidden" name="txtprevid" id="txtprevid" value="<?php echo $employee->extId; ?>" />
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary" name="btnUpdateEmployee">Save</button>
			</div>
			
			<?=form_close(); ?>
		<?php endforeach; ?>	
		</div>
	</div>
</div>	
