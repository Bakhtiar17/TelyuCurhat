<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    // function load Views
    // function tampilan home
    public function index()
    {
        cek_login();
        $data['status'] = $this->user_model->getStatus();
        $this->load->view('template/header');
        $this->load->view('page/home', $data);
        $this->load->view('template/footer');
    }

    // function tampilan buat postingan
    public function viewCreatePost()
    {
        cek_login();
        $this->load->view('template/header');
        $this->load->view('page/buatpostingan');
        $this->load->view('template/footer');
    }

    // function tampilan edit postingan
    public function viewEditPost($id)
    {
        cek_login();
        $data['statuse'] = $this->user_model->getStatusWhere($id);
        $this->load->view('template/header');
        $this->load->view('page/editpostingan', $data);
        $this->load->view('template/footer');
    }

    // function tampilan komen
    public function viewComment($id)
    {
        cek_login();
        $data['status'] = $this->user_model->getStatusWhere($id);
        $data['koment'] = $this->user_model->getCommentWhere($id);
        $this->load->view('template/header');
        $this->load->view('page/komentar', $data);
        $this->load->view('template/footer');
    }

    // function tampilan profile
    public function viewProfile($session)
    {
        cek_login();
        $data['profile'] = $this->user_model->getUserWhere();
        $data['myStatus'] = $this->user_model->getMyStatus($session);
        $this->load->view('template/header');
        $this->load->view('page/profile', $data);
        $this->load->view('template/footer');
    }

    public function viewEditProfile()
    {
        cek_login();
        $data['profile'] = $this->user_model->getUserWhere();
        $this->load->view('template/header');
        $this->load->view('page/editprofile', $data);
        $this->load->view('template/footer');
    }

    // function data
    // fun insert

    // fun input status
    public function insertStatus()
    {
        cek_login();
        $this->form_validation->set_rules('judul_status', 'judul_status', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        if ($this->form_validation->run() == FALSE) {
            redirect(base_url('index.php/user/viewCreatePost'));
        } else {
            $this->user_model->insertStatus();
        }
    }

    public function insertComment($id)
    {
        cek_login();
        $this->form_validation->set_rules('comment', 'comment', 'required');
        if ($this->form_validation->run() == FALSE) {
            redirect(base_url('index.php/user/viewCreatePost'));
        } else {
            $this->user_model->insertComment($id);
        }
    }

    public function editPos()
    {
        cek_login();
        $this->form_validation->set_rules('id_status', 'id_status', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">failed to edit</div>');
            redirect(base_url('index.php/user/index'));
        } else {
            $id = $this->input->post('id_status');
            $judul = $this->input->post('judul_status');
            $isi = $this->input->post('status');

            $data = [
                'judul_status' => htmlspecialchars($this->input->post('judul_status', true)),
                'status' => htmlspecialchars($this->input->post('status', true))
            ];

            $this->db->where('id_status', $id);
            $this->db->update('status', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success to edit</div>');
            redirect(base_url('index.php/user/index'));
        }
    }

    public function editProfile()
    {
        cek_login();
        $this->form_validation->set_rules('nim', 'nim', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">failed to edit</div>');
            redirect(base_url('index.php/user/index'));
        } else {
            $nim = $this->input->post('nim');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');

            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true))
            ];

            $this->db->where('nim', $nim);
            $this->db->update('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success to edit</div>');
            redirect(base_url('index.php/user/index'));
        }
    }

    public function hapusPos($id)
    {
        $this->user_model->deletePos($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success to delete</div>');
        redirect(base_url('user/index'));
        
    }

    public function hapusComment($id)
    {
        $this->user_model->deleteComment($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success to delete</div>');
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
