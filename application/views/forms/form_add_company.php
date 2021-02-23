<div class="box">
	<div class="box-header">
		<div class="col-lg-6">
			<h2>Add Company</h2>
		</div>
	</div>

	<div class="box-body">
		<?php echo form_open(base_url() . 'cemployee/add_company'); ?>
			<div class="form-group">
				<label for="txt_company">Company :</label>
				<input type="text" name="txt_company" class="form-control" placeholder="Company" required>
			</div>

			<div class="form-group">
				<button type="submit" name="btn_add_company" class="btn btn-primary">Save</button>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>