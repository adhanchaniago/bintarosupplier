<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung_model extends CI_Model{
  //load database
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  //listing Pengunjung
  public function listing()
  {
    $this->db->select('id,ip_address, COUNT(*) as total');

    $this->db->from('ci_sessions');
    $this->db->group_by('ip_address');
    $this->db->order_by('id','DESC');
    $query = $this->db->get();
    return $query->result();
  }

  public function pageview()
  {
    $this->db->select('*');
    $this->db->from('ci_sessions');
    $query = $this->db->get();
    return $query->result();
  }

  function statistik_pengunjung()
  {
    $this->db->select('id,ip_address, COUNT(*) as statistik');
    $this->db->from('ci_sessions');
    $query = $this->db->get();
    return $query->result();
  }

  function statistik_perbulan()
  {
    $this->db->select('id,ip_address,MONTH(date), COUNT(*) as stats_bulan');
    $this->db->from('ci_sessions');
    $this->db->group_by('date');
    $query = $this->db->get();
    return $query->result();
  }
}

/* end of file Pengunjung_model.php */
/* Location /application/controller/admin/Pengunjung_model.php */
