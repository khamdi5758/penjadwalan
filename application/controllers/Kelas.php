<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kelas_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["kelas"] = $this->kelas_model->getkelas();
        $this->load->view("kelas/index", $data);
    }

    public function add()
    {
        $kelas = $this->kelas_model;
        $validation = $this->form_validation;
        $validation->set_rules($kelas->rules());

        if ($validation->run()) {
            $kelas->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url('kelas/index'));
        }

        $this->load->view("kelas/addform");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('kelas/editform');
       
        $kelas = $this->kelas_model;
        $validation = $this->form_validation;
        $validation->set_rules($kelas->rules());

        if ($validation->run()) {
            $kelas->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url('kelas/index'));
        }

        $data["kelas"] = $kelas->getkelasById($id);
        if (!$data["kelas"]) show_404();
        
        $this->load->view("kelas/editform", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->kelas_model->delete($id)) {
            redirect(base_url('kelas/index'));
        }
    }
}