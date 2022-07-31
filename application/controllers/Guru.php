<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("guru_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["guru"] = $this->guru_model->getguru();
        $this->load->view("guru/index", $data);
    }

    public function add()
    {
        $guru = $this->guru_model;
        $validation = $this->form_validation;
        $validation->set_rules($guru->rules());

        if ($validation->run()) {
            $guru->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url('guru/index'));
        }

        $this->load->view("guru/addform");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('guru/editform');
       
        $guru = $this->guru_model;
        $validation = $this->form_validation;
        $validation->set_rules($guru->rules());

        if ($validation->run()) {
            $guru->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url('guru/index'));
        }

        $data["guru"] = $guru->getguruById($id);
        if (!$data["guru"]) show_404();
        
        $this->load->view("guru/editform", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->guru_model->delete($id)) {
            redirect(base_url('guru/index'));
        }
    }
}