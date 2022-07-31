<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Rulas_model extends CI_Model{
    Private $table = 'tb_ruangkelas';
    public $kd_rulas;
    public $nama_rulas;

    public function rules()
    {
        return [

            ['field' => 'kd_rulas',
            'label' => 'kd_rulas',
            'rules' => 'numeric'],
            
            ['field' => 'nama_rulas',
            'label' => 'nama_rulas',
            'rules' => 'required']
        ];
    }
 
    function getrulas(){
        return $this->db->get($this->table)->result();
    }

    public function getrulasById($id)
    {
        return $this->db->get_where($this->table, ["kd_rulas" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kd_rulas= $post["kd_rulas"];
        $this->nama_rulas = $post["nama_rulas"];
        return $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kd_rulas= $post["kd_rulas"];
        $this->nama_rulas = $post["nama_rulas"];
        return $this->db->update($this->table, $this, array('kd_rulas' => $post['kd_rulas']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("kd_rulas" => $id));
    }

}
