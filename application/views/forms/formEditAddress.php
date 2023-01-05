<div class="box">
	<div class="box-header">
		<div class="col-lg-4">
			<h2>Add Address</h2>
      <?php echo validation_errors(); ?>
		</div>
	</div>
	<div class="box-body">
		<?php echo form_open(base_url() . 'csetting/editAddress'); ?>
			<div class="form-group">
				<label for="company">Company Name :</label>
				<input type="hidden" name="id"value="<?=$address->id ?>">
				<input type="text" name="company" class="form-control" placeholder="Company Name" value="<?=$address->company ?>" required autofocus>
			</div>
			
      <div class="form-group">
				<label for="road">Address :</label>
				<textarea name="road" class="form-control" id="road" required><?=$address->road ?></textarea>
			</div>
      
      <div class="form-group">
				<label for="phone">Phone No :</label>
				<input type="text" name="phone" class="form-control" value="<?=$address->phone ?>" placeholder="Phone No" required>
			</div>
      
      <div class="form-group">
				<label for="fax">Fax No :</label>
				<input type="text" name="fax" class="form-control" value="<?=$address->phone ?>" placeholder="Fax No" required>
			</div>

			<div class="form-group">
				<button type="submit" name="btnAddDepartment" class="btn btn-primary">Save</button>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>