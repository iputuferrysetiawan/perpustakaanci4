<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Home';
        return view('dashboard/home', $data);
    }
    public function profile()
    {
        $data['pageTitle'] = 'Profile';
        return view('dashboard/profile', $data);
    }
    public function mahasiswa()
    {
        $data['pageTitle'] = 'Mahasiswa';
        return view('dashboard/mahasiswa', $data);
    }
    public function koleksi()
    {
        $data['pageTitle'] = 'Koleksi';
        return view('dashboard/koleksi', $data);
    }
}
