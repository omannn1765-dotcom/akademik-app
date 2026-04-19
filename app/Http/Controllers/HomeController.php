<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'Title' => 'Home',
            'Nama' => 'Abdur Rohman',
            'MataKuliah' => 'Pemrograman Web Lanjut',
            'Kampus' => 'STMIK Antar Bangsa',
        ];
        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'aplikasi' => 'Akademik App',
            'versi' => '1.0',
            'pembuat' => 'Abdur Rohman'
        ];
        return view('about', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Profile',
            'nama' => 'Abdur Rohman',
            'nim' => '2410047',
            'kelas' => 'Teknik Informatika'
        ];
        return view('profile', $data);
    }
}