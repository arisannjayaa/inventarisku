<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Barang extends Controller
{
    public function index()
    {
        echo view('template/header');
        echo view('barang/detail');
        echo view('template/footer');
    }
}
