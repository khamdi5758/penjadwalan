<!DOCTYPE html>
<html>
<head>
</head>
<body>
				<?php if ($this->session->flashdata('success')): ?>
					<?php echo $this->session->flashdata('success'); ?>
				<?php endif; ?>
						<a href="<?php echo base_url('jadwal/index') ?>"> keluar </a>

						<form action="<?php echo base_url('jadwal/add') ?>" method="post" enctype="multipart/form-data" >
								<label for="id_jadwal">id_jadwal</label>
								<input class="form-control <?php echo form_error('id_jadwal') ? 'is-invalid':'' ?>"
								 type="number" name="id_jadwal" min="0" />
									<?php echo form_error('id_jadwal') ?>

                                <label for="nipguru">nipguru</label>
								<input class="form-control <?php echo form_error('nipguru') ? 'is-invalid':'' ?>"
								 type="number" name="nipguru" min="0" />
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