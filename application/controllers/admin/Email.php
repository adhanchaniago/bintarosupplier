<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{

  //Load Model
  public function __construct()
  {
    parent::__construct();
    //$this->load->model('page_model');
  }
  //Main Page Page
  public function index()
  {
    //$page = $this->page_model->listing();

    $data = array( 'title'    => 'Email',
                   'isi'      => 'admin/email/list'
                 );
                 $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

}

/* end of file Page.php */
/* Location /application/controller/admin/Page.php */
