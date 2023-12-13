<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index()
    {
        $data['title'] = 'About Us'; // Set judul halaman
        $data['nama'] = 'Nama Anda'; // Data nama

        $this->load->view('templates/header', $data);
        $this->load->view('about', $data);
        $this->load->view('templates/footer');
    }
}
