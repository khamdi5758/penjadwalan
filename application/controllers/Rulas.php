<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rulas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("rulas_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["rulas"] = $this->rulas_model->getrulas();
        $this->load->view("rulas/index", $data);
    }

    public function add()
    {
        $rulas = $this->rulas_model;
        $validation = $this->form_validation;
        $validation->set_rules($rulas->rules());

        if ($validation->run()) {
            $rulas->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url('rulas/index'));
        }

        $this->load->view("rulas/addform");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('rulas/editform');
       
        $rulas = $this->rulas_model;
        $validation = $this->form_validation;
        $validation->set_rules($rulas->rules());

        if ($validation->run()) {
            $rulas->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url('rulas/index'));
        }

        $data["rulas"] = $rulas->getrulasById($id);
        if (!$data["rulas"]) show_404();
        
        $this->load->view("rulas/editform", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->rulas_model->delete($id)) {
            redirect(base_url('rulas/index'));
        }
    }
}