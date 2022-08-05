<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("jadwal_model");
        $this->load->model("guru_model");
        $this->load->model("mapel_model");
        $this->load->model("jam_model");
        $this->load->model("kelas_model");
        $this->load->model("rulas_model");

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["jadwal"] = $this->jadwal_model->getjadwal();
        // foreach ($data["jadwal"] as $jadwal) {
        //     echo $jadwal->mapel;
        // }
        // echo $data["jadwal"]->mapel;
        $this->load->view("jadwal/index", $data);
    }

    public function add()
    {
        $data["guru"] = $this->guru_model->getguru();
        $data["mapel"] = $this->mapel_model->getmapel();
        $data["jam"] = $this->jam_model->getjam();
        $data["kelas"] = $this->kelas_model->getkelas();
        $data["rulas"] = $this->rulas_model->getrulas();
        $jadwal = $this->jadwal_model;
        $validation = $this->form_validation;
        $validation->set_rules($jadwal->rules());

        if ($validation->run()) {
            
        
            $jadwal->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url('jadwal/index'));
        }

        $this->load->view("jadwal/addform",$data);
    }

    public function edit($id = null)
    {

        if (!isset($id)) redirect('jadwal/editform');
       
        $jadwal = $this->jadwal_model;
        $validation = $this->form_validation;
        $validation->set_rules($jadwal->rules());

        if ($validation->run()) {
            $jadwal->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url('jadwal/index'));
        }
        $data["guru"] = $this->guru_model->getguru();
        $data["mapel"] = $this->mapel_model->getmapel();
        $data["jam"] = $this->jam_model->getjam();
        $data["kelas"] = $this->kelas_model->getkelas();
        $data["rulas"] = $this->rulas_model->getrulas();
        $data["jadwal"] = $jadwal->getjadwalById($id);
        if (!$data["jadwal"]) show_404();
        
        $this->load->view("jadwal/editform", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->jadwal_model->delete($id)) {
            redirect(base_url('jadwal/index'));
        }
    }
}