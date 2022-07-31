<!DOCTYPE html>
<html>

<head>
</head>

<body>

			

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

						<a href="<?php echo site_url('rulas/index') ?>">
							Back</a>

						<form action="" method="post" enctype="multipart/form-data">
							<input type="hidden" name="kd_rulas" value="<?php echo $rulas->kd_rulas?>" />

							
								<label for="namerulas">Name rulas</label>
								<input class="form-control <?php echo form_error('nama_rulas') ? 'is-invalid':'' ?>"
								 type="text" name="nama_rulas" placeholder="Product nama_rulas" value="<?php echo $rulas->nama_rulas ?>" />
								
									<?php echo form_error('nama_rulas') ?>
								
							<input type="submit" name="btn" value="Save" />
						</form>

</body>

</html>