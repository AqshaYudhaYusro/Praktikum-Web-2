<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $username = 'Aqsha Yudha Yusro';
        $status = 'mahasiswa';

        return view('home', [
            'username' => $username,
            'status' => $status,
        ]);
    }
}