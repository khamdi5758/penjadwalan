<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mapel_model extends CI_Model{
    Private $table = 'tb_mapel';
    public $kd_mapel;
    public $nama_mapel;

    public function rules()
    {
        return [

            ['field' => 'kd_mapel',
            'label' => 'kd_mapel',
            'rules' => 'numeric'],
            
            ['field' => 'nama_mapel',
            'label' => 'nama_mapel',
            'rules' => 'required']
        ];
    }
 
    function getmapel(){
        return $this->db->get($this->table)->result();
    }

    public function getmapelById($id)
    {
        return $this->db->get_where($this->table, ["kd_mapel" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kd_mapel= $post["kd_mapel"];
        $this->nama_mapel = $post["nama_mapel"];
        return $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kd_mapel= $post["kd_mapel"];
        $this->nama_mapel = $post["nama_mapel"];
        return $this->db->update($this->table, $this, array('kd_mapel' => $post['kd_mapel']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("kd_mapel" => $id));
    }

}
