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

						<a href="<?php echo site_url('kelas/index') ?>">
							Back</a>

						<form action="" method="post" enctype="multipart/form-data">
							<input type="hidden" name="kd_kelas" value="<?php echo $kelas->kd_kelas?>" />

							
								<label for="namekelas">Name kelas</label>
								<input class="form-control <?php echo form_error('nama_kelas') ? 'is-invalid':'' ?>"
								 type="text" name="nama_kelas" placeholder="Product nama_kelas" value="<?php echo $kelas->nama_kelas ?>" />
								
									<?php echo form_error('nama_kelas') ?>
								
							<input type="submit" name="btn" value="Save" />
						</form>

</body>

</html>