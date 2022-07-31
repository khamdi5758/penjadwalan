<!DOCTYPE html>
<html>

<head>
</head>

<body>

				<?php if ($this->session->flashdata('success')): ?>
					<?php echo $this->session->flashdata('success'); ?>
				<?php endif; ?>
						<a href="<?php echo base_url('kelas/index') ?>"> Back</a>

						<form action="<?php echo base_url('kelas/add') ?>" method="post" enctype="multipart/form-data" >
                                <label for="kd_kelas">kd_kelas</label>
								<input class="form-control <?php echo form_error('kd_kelas') ? 'is-invalid':'' ?>"
								 type="number" name="kd_kelas" min="0" />
									<?php echo form_error('kd_kelas') ?>
							

								<label for="nama_kelas">nama kelas</label>
                                 <input type="text" class="form-control <?php echo form_error('nama_kelas') ? 'is-invalid':'' ?>"
								 name="nama_kelas">
									<?php echo form_error('nama_kelas') ?>
								
							<input type="submit" name="btn" value="Save" />
						</form>
</body>

</html>