<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        $data['title'] = 'Home'; // Set judul halaman
        $data['nama'] = 'Yuri Saputri'; // Data nama

        return view('templates/header', $data)
            . view('home', $data)
            . view('templates/footer', $data);
    }
}
