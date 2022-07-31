<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>kelas</title>
    <!-- ini bagian load bootstrap css file -->
    <link href="<?php echo base_url('pendukung/assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- selesai load bootstrap css file -->
  </head>
  <body>
 
    <div class="container">
        <h1><center>Daftar kelas</center></h1>
      <table class="table table-striped" border="1px">
      <a href="<?php echo base_url('kelas/add/') ?>"> add</a>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">kd_kelas</th>
            <th scope="col">Nama kelas</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <?php
          $count = 0;
          foreach ($kelas as $row) :
            $count++;
        ?>
          <tr>
            <th scope="row"><?php echo $count;?></th>
            <td><?php echo $row->kd_kelas;?></td>
            <td><?php echo $row->nama_kelas;?></td>
            <td>
			    <a href="<?php echo base_url('kelas/edit/'.$row->kd_kelas) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
				<a onclick="deleteConfirm('<?php echo base_url('kelas/delete/'.$row->kd_kelas) ?>')" href="<?php echo base_url('kelas/delete/'.$row->kd_kelas) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
            </td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
 
    </div>
 
    <!-- ini bagian load jquery js file -->
    <script src="<?php echo base_url('pendukung/assets/js/jquery.min.js');?>"></script>
    <!-- ini bagian load bootstrap js file -->
    <script src="<?php echo base_url('pendukung/assets/js/bootstrap.min.js');?>"></script>
    <!-- selesai load bootstrap js file -->
  </body>
</html>