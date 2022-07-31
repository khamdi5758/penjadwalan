<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Kelas_model extends CI_Model{
    Private $table = 'tb_kelas';
    public $kd_kelas;
    public $nama_kelas;

    public function rules()
    {
        return [

            ['field' => 'kd_kelas',
            'label' => 'kd_kelas',
            'rules' => 'numeric'],
            
            ['field' => 'nama_kelas',
            'label' => 'nama_kelas',
            'rules' => 'required']
        ];
    }
 
    function getkelas(){
        return $this->db->get($this->table)->result();
    }

    public function getkelasById($id)
    {
        return $this->db->get_where($this->table, ["kd_kelas" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kd_kelas= $post["kd_kelas"];
        $this->nama_kelas = $post["nama_kelas"];
        return $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kd_kelas= $post["kd_kelas"];
        $this->nama_kelas = $post["nama_kelas"];
        return $this->db->update($this->table, $this, array('kd_kelas' => $post['kd_kelas']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("kd_kelas" => $id));
    }

}
