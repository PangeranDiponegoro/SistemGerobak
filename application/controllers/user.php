<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class user extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('user_model');
            $this->load->library('form_validation');

            if($this->session->userdata('level')!="user"){
                redirect('login','refresh');
            }
        }

        public function index() {

            $this->load->model('user_model');

            $data['title']='User';
            $data['barang']=$this->user_model->getAllbarang();

            if($this->input->post('keyword')){
                $data['barang'] = $this->user_model->cariDatabarang();
            }

            $this->load->view('template/header2',$data);
            $this->load->view('user/index',$data);
            $this->load->view('template/footer');
        }


        public function detail($id){
            $data['title'] = 'Detail barang';
            $data['barang'] = $this->user_model->getbarangByID($id);

            $this->load->view('template/header2', $data);
            $this->load->view('user/detail', $data);
            $this->load->view('template/footer');
        }
        public function hapus($id){
            $this->user_model->hapusdatabarang($id);

            $this->session->set_flashdata('flash-data', 'Dibeli');
            redirect('user','refresh');
        }
        public function kembali($id){
            $this->user_model->kembalidatabarang($id);

            $this->session->set_flashdata('flash-data', 'Kembali');
            redirect('user','refresh');
        }


    }
?>
 


