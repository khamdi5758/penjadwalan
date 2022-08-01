<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>guru</title>
    <!-- ini bagian load bootstrap css file -->
    <link href="<?php echo base_url('pendukung/assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- selesai load bootstrap css file -->
  </head>
  <body>
 
    <div class="container">
        <h1><center>Daftar jadwal</center></h1>
      <table class="table table-striped" border="1px">
      <a href="<?php echo base_url('guru/add/') ?>"> add</a>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">id jadwal</th>
            <th scope="col">guru</th>
            <th scope="col">mapel</th>
            <th scope="col">hari</th>
            <th scope="col">jamke</th>
            <th scope="col">kelas</th>
            <th scope="col">ruang</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <?php
          $count = 0;
          foreach ($jadwal as $row) :
            $count++;
        ?>
          <tr>
            <th scope="row"><?php echo $count;?></th>
            <td><?php echo $row->id_jadwal;?></td>
            <td><?php echo $row->guru;?></td>
            <td><?php echo $row->mapel;?></td>
            <td><?php echo $row->hari;?></td>
            <td><?php echo $row->jamke;?></td>
            <td><?php echo $row->kelas;?></td>
            <td><?php echo $row->ruang;?></td>
            <td>
			    <a href="<?php echo base_url('guru/edit/'.$row->nip) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
				<a onclick="deleteConfirm('<?php echo base_url('guru/delete/'.$row->nip) ?>')" href="<?php echo base_url('guru/delete/'.$row->nip) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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