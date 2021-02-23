<div class="container box">	
	<div class = "row">
		<div class="col-lg-12">
			<h1>Add New Employee</h1>
		</div>
	</div>

	<div class="row text-right">
		<div class="col-lg-6">			
			<a href="<?php echo base_url() . 'cemployee' ?>" class="btn btn-primary"><li class="glyphicon glyphicon-arrow-left"></li> Back</a>
		</div>
	</div>		
	<br>			
	<div class="row">
		<div class="col-lg-6">
			<?=form_open(base_url() . 'cemployee/addEmployee'); ?>
			<div class="form-group">
				<label for="txtEmployeeNo">Employee No  :</label>
				<input type="text" name="txtEmployeeNo" class="form-control" placeholder="Employee No">
			</div>	

			<div class="form-group">
				<label for="txtEmployee">Employee Name :</label>
				<input type="text" name="txtEmployee" class="form-control" placeholder="Employee Name" required>
			</div>

			<div class="form-group">
				<label for="selDepartment">Department :</label>
				<select name="selDepartment" class="form-control">
				<option value="">Department</option>
				<?php foreach ( $departments as $department ): ?>
				<option value="<?=$department->iddept; ?>"><?=$department->deptdesc; ?></option>
				<?php endforeach; ?>
			</select>
			</div>
			 
			<div class="form-group">
				<label for="selPosition">Position :</label>
				<select name="selPosition" class="form-control">
				<option value="">Position</option>
				<?php foreach ($positions as $position): ?>
				<option value="<?=$position->idposition; ?>"><?=$position->deptdesc . " - " . $position->positiondesc; ?></option>
				<?php endforeach; ?>
				</select>
			</div> 
			
			<div class="form-group">
				<label for="selCode">Company Code :</label>
				<select name="selCode" class="form-control">
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
					<option value="">Extension No</option>
					<?php foreach ( $extensions as $extension ): ?>
						<option value="<?=$extension->id; ?>"><?=$extension->extension . " Yard : " . $extension->pabxLocation; ?></option>}
						option
					<?php endforeach; ?>	
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary" name="btnAdd"><li class="glyphicon glyphicon-floppy-disk"></li> Save</button>
			</div>					
			<?=form_close(); ?>
		</div>
	</div>	
</div>	
