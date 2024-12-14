<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function hello()
    // {
    //     return 'hello world';
    // }

    public function index(){
        $appName = 'hello world';
        return view('home', [
            'appName' => $appName
        ]);
    }
}
    