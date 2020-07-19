<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model{
  //load database
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  //listing Upload
  public function listing()
  {
    $this->db->select('*');
    $this->db->from('upload');
    $this->db->order_by('id_upload','DESC');
    $query = $this->db->get();
    return $query->result();
  }



  //tambah / Insert Data
  public function tambah($data)
  {
    $this->db->insert('upload', $data);
  }


  public function detail($id_upload)
  {

     //$statusread = 1;

    // $this->db->select('*');
    // $this->db->from('upload');
    $statusread = 1;

    $this->db->set('status_read',$statusread,);

    $this->db->where('id_upload',$id_upload);
    $this->db->update('upload');
    $this->db->where('id_upload',$id_upload);

    $query = $this->db->get('upload');
    return $query->row();
  }


  // public function total_upload()
  // {
  //   $this->db->select('*');
  //   $this->db->from('upload');
  //   $this->db->where('status_read',0);
  //   $query = $this->db->get();
  //   return $query->result();
  // }






    //Edit Data
    public function edit($data)
    {
      $this->db->where('id_upload',$data['id_upload']);
      $this->db->update('upload',$data);
    }

    //Delete Data
    public function delete($data)
    {
      $this->db->where('id_upload',$data['id_upload']);
      $this->db->delete('upload',$data);
    }




}

/* end of file Upload_model.php */
/* Location /application/controller/admin/Upload_model.php */
