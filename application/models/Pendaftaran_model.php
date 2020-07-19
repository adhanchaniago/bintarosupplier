<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model{
  //load database
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  //listing Pendaftaran
  public function listing()
  {
    $this->db->select('*');
    $this->db->from('pendaftaran');
    $this->db->order_by('id_pendaftaran','DESC');
    $query = $this->db->get();
    return $query->result();
  }



  //tambah / Insert Data
  public function tambah($data)
  {
    $this->db->insert('pendaftaran', $data);
  }


  public function detail($id_pendaftaran)
  {

     //$statusread = 1;

    // $this->db->select('*');
    // $this->db->from('pendaftaran');
    $statusread = 1;

    $this->db->set('status_read',$statusread,);

    $this->db->where('id_pendaftaran',$id_pendaftaran);
    $this->db->update('pendaftaran');
    $this->db->where('id_pendaftaran',$id_pendaftaran);

    $query = $this->db->get('pendaftaran');
    return $query->row();
  }


  // public function total_pendaftaran()
  // {
  //   $this->db->select('*');
  //   $this->db->from('pendaftaran');
  //   $this->db->where('status_read',0);
  //   $query = $this->db->get();
  //   return $query->result();
  // }






    //Edit Data
    public function edit($data)
    {
      $this->db->where('id_pendaftaran',$data['id_pendaftaran']);
      $this->db->update('pendaftaran',$data);
    }

    //Delete Data
    public function delete($data)
    {
      $this->db->where('id_pendaftaran',$data['id_pendaftaran']);
      $this->db->delete('pendaftaran',$data);
    }




}

/* end of file Pendaftaran_model.php */
/* Location /application/controller/admin/Pendaftaran_model.php */
