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
								<!-- <input class="form-control <?php //echo form_error('nipguru') ? 'is-invalid':'' ?>"
								 type="number" name="nipguru" min="0" /> -->
								 <select class="form-control <?php echo form_error('nipguru') ? 'is-invalid':'' ?>" name="nipguru">
									<option selected="selected">pilih guru</option>
									<?php foreach ($guru as $row) :?>
									<option value="<?=$row->nip?>"><?=$row->nama_guru?></option>
									<?php endforeach;?>
								</select>
									<?php echo form_error('nipguru') ?>

								<label for="kd_mapel">kd mapel</label>
								<!-- <input class="form-control <?php //echo form_error('kd_mapel') ? 'is-invalid':'' ?>"
								 type="number" name="kd_mapel" min="0" /> -->
								 <select class="form-control <?php echo form_error('kd_mapel') ? 'is-invalid':'' ?>" name="kd_mapel">
									<option selected="selected">pilih mapel</option>
									<?php foreach ($mapel as $row) :?>
									<option value="<?=$row->kd_mapel;?>"><?=$row->nama_mapel;?></option>
									<?php endforeach;?>
								</select>
								<?php echo form_error('kd_mapel') ?>
							

								<label for="hari">hari</label>
								<!-- <input class="form-control <?php //echo form_error('hari') ? 'is-invalid':'' ?>"
								 type="text" name="hari" min="0" /> -->

								 <select class="form-control <?php echo form_error('hari') ? 'is-invalid':'' ?>" name="hari">
									<option selected="selected">pilih hari</option>
									<option value="senin">senin</option>
									<option value="selasa">selasa</option>
									<option value="rabu">rabu</option>
									<option value="kamis">kamis</option>
									<option value="jum'at">jum'at</option>
								</select>
								<?php echo form_error('hari') ?>


								<label for="jam">jam</label>
								<!-- <input class="form-control <?php //echo form_error('jam') ? 'is-invalid':'' ?>"
								 type="number" name="jam" min="0" /> -->
								 <select class="form-control <?php echo form_error('jam') ? 'is-invalid':'' ?>" name="jam">
									<option selected="selected">pilih jam</option>
									<?php foreach ($jam as $row) :?>
									<option value="<?=$row->idjam;?>"><?=$row->waktu;?></option>
									<?php endforeach;?>
								</select>
								<?php echo form_error('jam') ?>

								
								<label for="kelas">kelas</label>
								<!-- <input class="form-control <?php //echo form_error('kelas') ? 'is-invalid':'' ?>"
								 type="number" name="kelas" min="0" /> -->
								 <select class="form-control <?php echo form_error('kelas') ? 'is-invalid':'' ?>" name="kelas">
									<option selected="selected">pilih kelas</option>
									<?php foreach ($kelas as $row) :?>
									<option value="<?=$row->kd_kelas;?>"><?=$row->nama_kelas;?></option>
									<?php endforeach;?>
								</select>
								<?php echo form_error('kelas') ?>


								<label for="ruang">ruang</label>
								<!-- <input class="form-control <?php //echo form_error('ruang') ? 'is-invalid':'' ?>"
								 type="number" name="ruang" min="0" /> -->
								 <select class="form-control <?php echo form_error('ruang') ? 'is-invalid':'' ?>" name="ruang">
									<option selected="selected">pilih ruang</option>
									<?php foreach ($rulas as $row) :?>
									<option value="<?=$row->kd_rulas;?>"><?=$row->nama_rulas;?></option>
									<?php endforeach;?>
								</select>
								<?php echo form_error('ruang') ?>
								
							<input type="submit" name="btn" value="Save" />
						</form>
</body>

</html>