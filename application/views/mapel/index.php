<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>mapel</title>
    <!-- ini bagian load bootstrap css file -->
    <link href="<?php echo base_url('pendukung/assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- selesai load bootstrap css file -->
  </head>
  <body>
 
    <div class="container">
        <h1><center>Daftar mapel</center></h1>
      <table class="table table-striped" border="1px">
      <a href="<?php echo base_url('mapel/add/') ?>"> add</a>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">kd_mapel</th>
            <th scope="col">Nama mapel</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <?php
          $count = 0;
          foreach ($mapel as $row) :
            $count++;
        ?>
          <tr>
            <th scope="row"><?php echo $count;?></th>
            <td><?php echo $row->kd_mapel;?></td>
            <td><?php echo $row->nama_mapel;?></td>
            <td>
			    <a href="<?php echo base_url('mapel/edit/'.$row->kd_mapel) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
				<a onclick="deleteConfirm('<?php echo base_url('mapel/delete/'.$row->kd_mapel) ?>')" href="<?php echo base_url('mapel/delete/'.$row->kd_mapel) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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