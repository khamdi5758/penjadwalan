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

						<a href="<?php echo site_url('mapel/index') ?>">
							Back</a>

						<form action="" method="post" enctype="multipart/form-data">
							<input type="hidden" name="kd_mapel" value="<?php echo $mapel->kd_mapel?>" />

							
								<label for="namemapel">Name mapel</label>
								<input class="form-control <?php echo form_error('nama_mapel') ? 'is-invalid':'' ?>"
								 type="text" name="nama_mapel" placeholder="Product nama_mapel" value="<?php echo $mapel->nama_mapel ?>" />
								
									<?php echo form_error('nama_mapel') ?>
								
							<input type="submit" name="btn" value="Save" />
						</form>

</body>

</html>