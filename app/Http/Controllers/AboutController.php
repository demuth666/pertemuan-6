<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $nama = "Chandra";
        $kelas = "IF-IC";
        return view('about', ['nama'=> $nama,'kelas'=> $kelas]);
    }
}
