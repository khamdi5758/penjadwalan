<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mapel_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["mapel"] = $this->mapel_model->getmapel();
        $this->load->view("mapel/index", $data);
    }

    public function add()
    {
        $mapel = $this->mapel_model;
        $validation = $this->form_validation;
        $validation->set_rules($mapel->rules());

        if ($validation->run()) {
            $mapel->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url('mapel/index'));
        }

        $this->load->view("mapel/addform");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('mapel/editform');
       
        $mapel = $this->mapel_model;
        $validation = $this->form_validation;
        $validation->set_rules($mapel->rules());

        if ($validation->run()) {
            $mapel->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url('mapel/index'));
        }

        $data["mapel"] = $mapel->getmapelById($id);
        if (!$data["mapel"]) show_404();
        
        $this->load->view("mapel/editform", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->mapel_model->delete($id)) {
            redirect(base_url('mapel/index'));
        }
    }
}