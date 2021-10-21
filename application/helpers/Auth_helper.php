<?php
defined('BASEPATH') or exit('No direct script access allowed');

function cek_login()
{
    $CI = &get_instance();
    $nim = $CI->session->nim;

    if ($nim == NULL) {
        $CI->session->set_flashdata('message', '<div class="alert alert-danger"> Please log in again.!</div>');
        redirect('auth');
    }
}
