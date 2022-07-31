<?php
class Gambar_model extends CI_Model
{
  Private $table = 'gambar';

  public function get()
  {
    return $this->db->get($this->table)->result();
  }

  // public function jumlah_row($search)
  // {
  //   $this->db->or_like($search);
  //   $query = $this->db->get($this->table);
  //   return $query->num_rows();
  // }

  public function get_by_id($kondisi)
  {
      $this->db->from($this->table);
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert($this->table,$data);
      return TRUE;
  }

  public function update($data,$kondisi)
  {
      $this->db->update($this->table,$data,$kondisi);
      return TRUE;
  }

  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete($this->table);
      return TRUE;
  }


}
