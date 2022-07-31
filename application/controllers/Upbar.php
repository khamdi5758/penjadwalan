<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upbar extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('modelcrud');
      $this->load->library('upload');
      $this->load->library('pagination');
  }

  // fungsi untuk mengambil data
	public function index()
	{
      $data['users'] = $this->modelcrud->get();
  		$this->load->view('upbar/home',$data);
	}

  // untuk menampilkan halaman tambah data
  public function tambah()
  {
      return $this->load->view('upbar/tambah_data');
  }

  // untuk memasukan data ke database
  public function insertdata()
  {
      $name   = $this->input->post('name');
      $alamat = $this->input->post('alamat');

      // get foto
      $config['upload_path'] = './pendukung/images/';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['fotopost']['name'])) {
	        if ( $this->upload->do_upload('fotopost') ) {
	            $foto = $this->upload->data();
	            $data = array(
	                          'name'       => $name,
                            'foto'       => $foto['file_name'],
	                          'alamat'     => $alamat,
	                        );
							$this->modelcrud->insert($data);
              redirect('');
	        }else {
              die("gagal upload");
	        }
	    }else {
	      echo "tidak masuk";
	    }

  }

  // delete
  public function deletedata($id,$foto)
  {
      $path = './pendukung/images/';
      @unlink($path.$foto);

      $where = array('id' => $id );
      $this->modelcrud->delete($where);
      return redirect('');
  }

  // edit
  public function edit($id)
  {
      $kondisi = array('id' => $id );

      $data['data'] = $this->modelcrud->get_by_id($kondisi);
      return $this->load->view('upbar/edit_data',$data);
  }

  // update
  public function updatedata()
  {
      $id   = $this->input->post('id');
      $name = $this->input->post('name');
      $alamat = $this->input->post('alamat');

      $path = './pendukung/images/';

      $kondisi = array('id' => $id );

      // get foto
      $config['upload_path'] = './pendukung/images/';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['fotopost']['name'])) {
	        if ( $this->upload->do_upload('fotopost') ) {
	            $foto = $this->upload->data();
	            $data = array(
	                          'name'       => $name,
                            'foto'       => $foto['file_name'],
	                          'alamat'     => $alamat,
	                        );
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

							$this->modelcrud->update($data,$kondisi);
              redirect('');
	        }else {
              die("gagal update");
	        }
	    }else {
	      echo "tidak masuk";
	    }
  }
} // end class
