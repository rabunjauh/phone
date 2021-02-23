<?= form_open(base_url().'cpabx1/saveEmpExt'); ?>
	<?php foreach ( $getExtensions as $getExtension ): ?>
		Port No : <?php echo $getExtension->port; ?>
		Extension No : <input type="text" name="extension" size="1" value="<?php echo $getExtension->extension; ?>">

		<select name="employee">
			<?php $employees = $this->db->get('wasco_fingerman.tblmas_employee')->result(); ?>
			<?php foreach ( $employees as $employee ): ?>
			<option value="<?php echo $employee->idemployee ?>" <?php echo ($employee->idemployee == $getExtension->empId)?'selected':''; ?>><?php echo $employee->employeename; ?></option>
			<?php endforeach; ?>
		</select>
<?php endforeach; ?>
	<button type="submit" name="assign">Assign</button>
<?= form_close(); ?>



	