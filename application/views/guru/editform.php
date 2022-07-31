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

						<a href="<?php echo site_url('guru/index') ?>">
							Back</a>

						<form action="" method="post" enctype="multipart/form-data">
							<input type="hidden" name="nip" value="<?php echo $guru->nip?>" />

							
								<label for="nameguru">Name guru</label>
								<input class="form-control <?php echo form_error('nama_guru') ? 'is-invalid':'' ?>"
								 type="text" name="nama_guru" placeholder="Product nama_guru" value="<?php echo $guru->nama_guru ?>" />
								
									<?php echo form_error('nama_guru') ?>
								
							<input type="submit" name="btn" value="Save" />
						</form>

</body>

</html>