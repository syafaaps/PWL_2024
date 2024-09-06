<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama    : Syava Aprilia Puspitasari <br> NIM    : 2241760129';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id'.$id;
    }
}
