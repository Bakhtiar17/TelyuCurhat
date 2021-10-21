<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('nim', 'NIM', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/headerAuth');
            $this->load->view('auth/login');
            $this->load->view('template/footerAuth');
        } else {
            //validasi success
            $this->_login();
        }
    }

    private function _login()
    {
        $nim = $this->input->post('nim');
        $password1 = $this->input->post('password');

        $user = $this->db->get_where('user', ['nim' => $nim])->row_array();


        if ($user) {
            if (password_verify($password1, $user["password"])) {
                $data = [
                    'nim' => $user['nim'],
                    'nama' => $user['nama']
                ];
                $this->session->set_userdata($data);
                redirect('user');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong Password!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your Acount is not Activate</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nim');
        $this->session->unset_userdata('nama');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logged out!</div>');
        redirect('auth');
    }

    public function register()
    {
        $this->form_validation->set_rules('nim', 'NIM', 'required|trim|is_unique[user.nim]', [
            'is_unique' => 'This nim has already registered!'
        ]);

        $this->form_validation->set_rules('email', 'Name', 'required|trim');

        $this->form_validation->set_rules('email1', 'Email', 'required|trim|valid_email');

        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[repeatpassword]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password to short!'
        ]);
        $this->form_validation->set_rules('repeatpassword', 'Repeatpassword', 'required|trim|matches[password]');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/headerAuth');
            $this->load->view('auth/register');
            $this->load->view('template/footerAuth');
        } else {
            $data = [
                'nim' => htmlspecialchars($this->input->post('nim', true)),
                'nama' => htmlspecialchars($this->input->post('email', true)),
                'email' => htmlspecialchars($this->input->post('email1', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Congratulation! Your Acount has been Activate</div>');
            redirect('auth');
        }
    }
}
