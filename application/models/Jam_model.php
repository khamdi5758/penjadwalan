<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Jam_model extends CI_Model{
    Private $table = 'tb_jam';
    // public $nip;
    // public $nama_guru;

    // public function rules()
    // {
    //     return [

    //         ['field' => 'nip',
    //         'label' => 'nip',
    //         'rules' => 'required'],
            
    //         ['field' => 'nama_guru',
    //         'label' => 'nama_guru',
    //         'rules' => 'required']
    //     ];
    // }
 
    function getjam(){
        return $this->db->get($this->table)->result();
    }

    // public function getguruById($id)
    // {
    //     return $this->db->get_where($this->table, ["nip" => $id])->row();
    // }

    // public function save()
    // {
    //     $post = $this->input->post();
    //     $this->nip= $post["nip"];
    //     $this->nama_guru = $post["nama_guru"];
    //     return $this->db->insert($this->table, $this);
    // }

    // public function update()
    // {
    //     $post = $this->input->post();
    //     $this->nip= $post["nip"];
    //     $this->nama_guru = $post["nama_guru"];
    //     return $this->db->update($this->table, $this, array('nip' => $post['nip']));
    // }

    // public function delete($id)
    // {
    //     return $this->db->delete($this->table, array("nip" => $id));
    // }

}
