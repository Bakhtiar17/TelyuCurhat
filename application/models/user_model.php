<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{

    // insert
    public function insertStatus()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'judul_status' => $this->input->post('judul_status'),
            'status' => $this->input->post('status'),
            'date' => time()
        ];
        $this->db->insert('status', $data);
        redirect(base_url('user'));
    }

    public function insertComment($id)
    {
        $data = [
            'id_status' => $id,
            'nim' => $this->input->post('nim'),
            'komentar' => $this->input->post('comment'),
            'date' => time()
        ];
        $this->db->insert('komentar', $data);
        redirect(base_url('user/viewComment/') . $id);
    }
    //  get database
    // get status table
    public function getStatus()
    {
        $this->db->select('user.nama,status.id_status,status.status,status.judul_status,status.date');
        $this->db->from('status');
        $this->db->join(
            'user',
            'user.nim = status.nim'
        );
        $this->db->order_by('status.date', 'desc');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getStatusWhere($id)
    {
        $this->db->select('user.nama,status.id_status,status.status,status.judul_status,status.date,status.id_status');
        $this->db->join(
            'user',
            'user.nim = status.nim'
        );
        $query = $this->db->get_where('status', ['id_status' => $id])->result_array();
        return $query;
    }

    public function getMyStatus($nim)
    {
        $this->db->select('user.nama,status.id_status,status.status,status.judul_status,status.nim,status.date');
        $this->db->join(
            'user',
            'user.nim = status.nim'
        );
        $this->db->order_by('status.date', 'desc');
        $query = $this->db->get_where('status', ['status.nim' => $nim])->result_array();
        return $query;
    }


    // get user table
    public function getUserWhere()
    {
        $session = $this->session->userdata('nim');
        $query = $this->db->get_where('user', ['nim' => $session])->result_array();
        return $query;
    }

    public function getCommentWhere($id)
    {
        $this->db->select('user.nama,komentar.komentar,komentar.date,komentar.id_komentar');
        $this->db->join(
            'user',
            'user.nim = komentar.nim'
        );
        $this->db->order_by('komentar.date', 'desc');
        $query = $this->db->get_where('komentar', ['id_status' => $id])->result_array();
        return $query;
    }

    public function deletePos($id)
    {
        $this->db->select('user.nama,status.id_status,status.status,status.judul_status,status.date,status.id_status');
        $this->db->join(
            'user',
            'user.nim = status.nim'
        );
        $query = $this->db->delete('status', ['id_status' => $id]);
        return $query;
    }

    public function deleteComment($id)
    {
        $query = $this->db->delete('komentar', ['id_komentar' => $id]);
        return $query;
    }
}



/* End of file ModelName.php */
