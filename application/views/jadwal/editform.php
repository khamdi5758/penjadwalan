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

						<a href="<?php echo site_url('jadwal/index') ?>">
							Back</a>

						<form action="" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id_jadwal" value="<?php echo $jadwal->id_jadwal?>" />
							
								<label for="nameguru">Name guru</label>
								<input class="form-control <?php echo form_error('nama_guru') ? 'is-invalid':'' ?>"
								 type="text" name="nama_guru" placeholder="Product nama_guru" value="<?php echo $jadwal->nama_guru ?>" />
								
									<?php echo form_error('nama_guru') ?>


                                <label for="nipguru">nipguru</label>
								<input class="form-control <?php echo form_error('nipguru') ? 'is-invalid':'' ?>"
								 type="number" name="nipguru" min="0" value="<?php echo $guru->nama_guru ?>"/>
									<?php echo form_error('nipguru') ?>

								<label for="kd_mapel">kd mapel</label>
								<input class="form-control <?php echo form_error('kd_mapel') ? 'is-invalid':'' ?>"
								 type="number" name="kd_mapel" min="0" />
								<?php echo form_error('kd_mapel') ?>
							

								<label for="hari">hari</label>
								<input class="form-control <?php echo form_error('hari') ? 'is-invalid':'' ?>"
								 type="text" name="hari" min="0" />
								<?php echo form_error('hari') ?>


								<label for="jam">jam</label>
								<input class="form-control <?php echo form_error('jam') ? 'is-invalid':'' ?>"
								 type="number" name="jam" min="0" />
								<?php echo form_error('jam') ?>

								
								<label for="kelas">kelas</label>
								<input class="form-control <?php echo form_error('kelas') ? 'is-invalid':'' ?>"
								 type="number" name="kelas" min="0" />
								<?php echo form_error('kelas') ?>


								<label for="ruang">ruang</label>
								<input class="form-control <?php echo form_error('ruang') ? 'is-invalid':'' ?>"
								 type="number" name="ruang" min="0" />
								<?php echo form_error('ruang') ?>
								
							<input type="submit" name="btn" value="Save" />
						</form>

</body>

</html>