<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Jadwal_model extends CI_Model{
    Private $table = 'tb_jadwal';
    Private $table2 = 'jadwal';
    public $id_jadwal;
    public $nipguru;
    public $kd_mapel;
    public $hari;
    public $jam;
    public $kelas;
    public $ruang;

    public function rules()
    {
        return [

            ['field' => 'id_jadwal',
            'label' => 'id_jadwal',
            'rules' => 'numeric'],

            ['field' => 'nipguru',
            'label' => 'nipguru',
            'rules' => 'required'],
            
            ['field' => 'kd_mapel',
            'label' => 'kd_mapel',
            'rules' => 'required'],

            ['field' => 'hari',
            'label' => 'hari',
            'rules' => 'required'],

            ['field' => 'jam',
            'label' => 'jam',
            'rules' => 'required'],

            ['field' => 'kelas',
            'label' => 'kelas',
            'rules' => 'required'],

            ['field' => 'ruang',
            'label' => 'ruang',
            'rules' => 'required'],
        ];
    }
 
    function getjadwal(){
        return $this->db->get($this->table2)->result();
    }

    public function getjadwalById($id)
    {
        return $this->db->get_where($this->table, ["id_jadwal" => $id])->row();
    }

    public function getjadwalByguru($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->like(["nipguru" => $id]);
        $query = $this->db->get();
        return $query;
        //return $this->db->get_where($this->table, ["nipguru" => $id])->row();
    }

    public function getjadwalByhari($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->like(["hari" => $id]);
        $query = $this->db->get();
        return $query;
        //return $this->db->get_where($this->table, ["hari" => $id])->row();
    }

    public function getjadwalBykelas($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->like(["nipguru" => $id]);
        $query = $this->db->get(["kelas" => $id]);
        return $query;
        //return $this->db->get_where($this->table, ["kelas" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->idjadwal = $post["id_jadwal"];
        $this->nipguru= $post["nipguru"];
        $this->kd_mapel = $post["kd_mapel"];
        $this->hari = $post["hari"];
        $this->jam = $post["jam"];
        $this->kelas = $post["kelas"];
        $this->ruang = $post["ruang"];
        return $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->idjadwal = $post["id_jadwal"];
        $this->nipguru= $post["nipguru"];
        $this->kd_mapel = $post["kd_mapel"];
        $this->hari = $post["hari"];
        $this->jam = $post["jam"];
        $this->kelas = $post["kelas"];
        $this->ruang = $post["ruang"];
        return $this->db->update($this->table, $this, array('id_jadwal' => $post['id_jadwal']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id_jadwal" => $id));
    }

}
