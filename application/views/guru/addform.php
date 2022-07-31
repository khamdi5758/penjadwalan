<!DOCTYPE html>
<html>

<head>
</head>

<body>

				<?php if ($this->session->flashdata('success')): ?>
					<?php echo $this->session->flashdata('success'); ?>
				<?php endif; ?>
						<a href="<?php echo base_url('guru/index') ?>"> Back</a>

						<form action="<?php echo base_url('guru/add') ?>" method="post" enctype="multipart/form-data" >
                                <label for="nip">nip</label>
								<input class="form-control <?php echo form_error('nip') ? 'is-invalid':'' ?>"
								 type="number" name="nip" min="0" />
									<?php echo form_error('nip') ?>
							

								<label for="nama_guru">nama guru</label>
                                 <input type="text" class="form-control <?php echo form_error('nama_guru') ? 'is-invalid':'' ?>"
								 name="nama_guru">
									<?php echo form_error('nama_guru') ?>
								
							<input type="submit" name="btn" value="Save" />
						</form>
</body>

</html>