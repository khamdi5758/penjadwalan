<!DOCTYPE html>
<html>

<head>
</head>

<body>

				<?php if ($this->session->flashdata('success')): ?>
					<?php echo $this->session->flashdata('success'); ?>
				<?php endif; ?>
						<a href="<?php echo base_url('mapel/index') ?>"> Back</a>

						<form action="<?php echo base_url('mapel/add') ?>" method="post" enctype="multipart/form-data" >
                                <label for="kd_mapel">kd_mapel</label>
								<input class="form-control <?php echo form_error('kd_mapel') ? 'is-invalid':'' ?>"
								 type="number" name="kd_mapel" min="0" />
									<?php echo form_error('kd_mapel') ?>
							

								<label for="nama_mapel">nama mapel</label>
                                 <input type="text" class="form-control <?php echo form_error('nama_mapel') ? 'is-invalid':'' ?>"
								 name="nama_mapel">
									<?php echo form_error('nama_mapel') ?>
								
							<input type="submit" name="btn" value="Save" />
						</form>
</body>

</html>