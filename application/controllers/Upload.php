<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller{
  //load data
  public function __construct()
  {
    parent::__construct();
    $this->load->model('upload_model');

  }

  //Tambah Upload
  public function index()
   {
               $data = array(
                               'title'         => 'Upload Mitra',
                               'deskripsi'     => 'Upload Mitra Gama Indonesia',
                               'keywords'      => 'keywords',
                              'isi'           => 'upload/list'
                               );
                 $this->load->view('layout/wrapper', $data, FALSE);

     }

  public function simpan_pendaftaran()
  {


    //Validasi
    $valid = $this->form_validation;

    $valid->set_rules('nama_layanan','Layanan','required',
                       array( 'required'      => 'Anda Harus Memilih %s '));

    $valid->set_rules('nama_lengkap','nama Lengkap','required',
                       array( 'required'      => '%s harus di isi'));

    $valid->set_rules('alamat','Alamat','required',
                         array( 'required'      => '%s harus di isi'));

    $valid->set_rules('email','Email','required|valid_email|trim|is_unique[pendaftaran.email]',
                       array( 'required'      => '%s harus diisi',
                       'is_unique'     => '%s <strong>'.$this->input->post('email').
                                           '</strong> sudah Pernah didaftarkan. Gunakan Email yang lain atau Hubungi Customer Service!',
                       'valid_email'   => 'Format %s Tidak Valid'));

    $valid->set_rules('nomorhp','Nomor Handphone','required|trim|is_unique[pendaftaran.nomorhp]',
                       array( 'required'      => '%s harus diisi',
                       'is_unique'     => '%s <strong>'.$this->input->post('nomorhp').
                                           '</strong> sudah Pernah didaftarkan. Gunakan Nomor yang lain atau Hubungi Customer Service!'));

    $valid->set_rules('kota','Kota','required',
                        array( 'required'      => 'Anda Harus Memilih %s '));

    $valid->set_rules('tipe_kendaraan','Tipe Kendaraan','required',
                         array( 'required'      => 'Anda Harus Memilih %s '));

    $valid->set_rules('merek_kendaraan','Merek Kendaraan','required',
                        array( 'required'      => '%s harus di isi'));

    $valid->set_rules('tahun_kendaraan','Tahun Kendaraan','required',
                         array( 'required'      => '%s harus di isi'));

    $valid->set_rules('no_ktp','Nomor KTP','required',
                        array( 'required'      => '%s harus di isi'));


    if($valid->run()){

      //End Validasi
     $data = array( 'title'        => 'Pendaftaran',

                    //'error_upload' => $this->upload->display_errors(),
                    'isi'          => 'upload/list'
                  );
                  $this->load->view('layout/wrapper', $data, FALSE);

                  //Masuk Database

                }else{



                  // load success template...
                              echo "It's all Good!";







                                                                                      $this->load->library('upload');

                                                                                      $config['upload_path']          = './assets/upload/pendaftaran/';
                                                                                      $config['allowed_types']        = 'gif|jpg|png|jpeg';
                                                                                      $config['overwrite']            = FALSE;
                                                                                      $config['max_size']             = 5000; //Dalam Kilobyte\
                                                                                      $this->load->library('upload', $config);

                                                                                      $this->upload->initialize($config);
                                                                                      if ( ! $this->upload->do_upload('foto1')){
                                                                                            $this->session->set_flashdata('Gagal');
                                                                                            redirect('upload');
                                                                                      }else{
                                                                                            $config['upload_path']          = './assets/upload/pendaftaran/';
                                                                                            $config['allowed_types']        = 'gif|jpg|png|jpeg';
                                                                                            $config['overwrite']            = FALSE;
                                                                                            $config['max_size']             = 5000; //Dalam Kilobyte
                                                                                            $this->load->library('upload', $config);
                                                                                            $foto2 = $this->upload->data();
                                                                                            $inputFileName = './assets/upload/pendaftaran/'.$foto2['file_name'];
                                                                                            $this->upload->initialize($config);
                                                                                            if ( ! $this->upload->do_upload('foto2')){
                                                                                                  $this->session->set_flashdata('Gagal');
                                                                                                  redirect('upload');
                                                                                            }else{
                                                                                                  $config['upload_path']          = './assets/upload/pendaftaran/';
                                                                                                  $config['allowed_types']        = 'gif|jpg|png|jpeg';
                                                                                                  $config['overwrite']            = FALSE;
                                                                                                  $config['max_size']             = 5000; //Dalam Kilobyte
                                                                                                  $foto3 = $this->upload->data();
                                                                                                  $inputFileName = './assets/upload/pendaftaran/'.$foto3['file_name'];
                                                                                                  $this->load->library('upload', $config);
                                                                                                  $this->upload->initialize($config);
                                                                                                  if ( ! $this->upload->do_upload('foto3')){
                                                                                                        $this->session->set_flashdata('Gagal');
                                                                                                        redirect('upload');
                                                                                            }else{


                                                                                              $foto1 = $this->upload->data();
                                                                                              $inputFileName = './assets/upload/pendaftaran/'.$foto1['file_name'];

                                                                                                                                        $i     = $this->input;
                                                                                                                                        $data  = array(
                                                                                                                                                            'slug_upload'       => url_title($this->input->post('id_upload'), 'dash', TRUE),
                                                                                                                                                            'nama_layanan'           => $i->post('nama_layanan'),
                                                                                                                                                            'nama_lengkap'           => $i->post('nama_lengkap'),
                                                                                                                                                            'alamat'                 => $i->post('alamat'),
                                                                                                                                                            'email'                  => $i->post('email'),
                                                                                                                                                            'nomorhp'                => $i->post('nomorhp'),
                                                                                                                                                            'kota'                   => $i->post('kota'),
                                                                                                                                                            'tipe_kendaraan'         => $i->post('tipe_kendaraan'),
                                                                                                                                                            'merek_kendaraan'        => $i->post('merek_kendaraan'),
                                                                                                                                                            'tahun_kendaraan'        => $i->post('tahun_kendaraan'),
                                                                                                                                                            'no_ktp'                 => $i->post('no_ktp'),
                                                                                                                                                            'foto1'                   => $foto1['file_name'],
                                                                                                                                                            'foto2'                   => $foto2['file_name'],
                                                                                                                                                            'foto3'                   => $foto3['file_name'],

                                                                                                                                                            //'foto2'                 => $upload_data['uploads']['file_name'],
                                                                                                                                                            'tanggal_post'           => date('Y-m-d')
                                                                                                                                                      );
                                                                                                                                                      $this->upload_model->tambah($data);
                                                                                                                                                      $this->session->set_flashdata('sukses','Data telah ditambahkan');
                                                                                                                                                      redirect(base_url('pendaftaran/sukses'), 'refresh');

                                                                                                            $data = array(
                                                                                                                            'title'         => 'Upload Mitra',
                                                                                                                            'deskripsi'     => 'Upload Mitra Gama Indonesia',
                                                                                                                            'keywords'      => 'keywords',
                                                                                                                           'isi'           => 'upload/list'
                                                                                                                            );
                                                                                                              $this->load->view('layout/wrapper', $data, FALSE);
                                                                                            }

                                                                                          }
                                                                                        }




        }
    }

}
