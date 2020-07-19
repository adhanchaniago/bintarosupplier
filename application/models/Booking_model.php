<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model{
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
    $this->db->from('booking');
    $this->db->order_by('id_booking','DESC');
    $query = $this->db->get();
    return $query->result();
  }



  //tambah / Insert Data
  public function tambah($data)
  {
    $this->db->insert('booking', $data);
  }


  public function detail($id_booking)
  {

     $statusread = 1;

    $this->db->select('*');
    $this->db->from('booking');
    $this->db->set('status_read',$statusread);
    $this->db->where('id_booking',$id_booking);
    $this->db->update('booking');
    $this->db->where('id_booking',$id_booking);

    $query = $this->db->get('booking');
    return $query->row();
  }


  public function total_booking()
  {
    $this->db->select('*');
    $this->db->from('booking');
    $this->db->where('status_read',0);
    $query = $this->db->get();
    return $query->result();
  }

    //Edit Data
    public function edit($data)
    {
      $this->db->where('id_booking',$data['id_booking']);
      $this->db->update('booking',$data);
    }

    //Delete Data
    public function delete($data)
    {
      $this->db->where('id_booking',$data['id_booking']);
      $this->db->delete('booking',$data);
    }



}

/* end of file Pendaftaran_model.php */
/* Location /application/controller/admin/Pendaftaran_model.php */
