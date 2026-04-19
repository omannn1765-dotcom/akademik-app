<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'nama' => 'Maulana Rizky Abdullah',
            'matkul' => 'Pemrograman Web Lanjut',
            'kampus' => 'STMIK Antar Bangsa',
            'daftarMateri' => ['Pengenalan Laravel', 'Routing', 'Controller', 'Blade Template']
        ];
        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'aplikasi' => 'Akademik App',
            'versi' => '1.0',
            'pembuat' => 'Maulana Rizky Abdullah'
        ];
        return view('about', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Profile',
            'nama' => 'Maulana Rizky Abdullah',
            'nim' => '2410054',
            'kelas' => 'Informatika'
        ];
        return view('profile', $data);
    }
}