<!DOCTYPE html>
<html>

<head>
</head>

<body>

				<?php if ($this->session->flashdata('success')): ?>
					<?php echo $this->session->flashdata('success'); ?>
				<?php endif; ?>
						<a href="<?php echo base_url('rulas/index') ?>"> Back</a>

						<form action="<?php echo base_url('rulas/add') ?>" method="post" enctype="multipart/form-data" >
                                <label for="kd_rulas">kd_rulas</label>
								<input class="form-control <?php echo form_error('kd_rulas') ? 'is-invalid':'' ?>"
								 type="number" name="kd_rulas" min="0" />
									<?php echo form_error('kd_rulas') ?>
							
								<label for="nama_rulas">nama rulas</label>
                                 <input type="text" class="form-control <?php echo form_error('nama_rulas') ? 'is-invalid':'' ?>"
								 name="nama_rulas">
									<?php echo form_error('nama_rulas') ?>
								
							<input type="submit" name="btn" value="Save" />
						</form>
</body>

</html>