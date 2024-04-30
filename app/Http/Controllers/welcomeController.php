<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Ask;
use Illuminate\Http\Request;

use function Termwind\ask;

class welcomeController extends Controller
{
    public function hi(){
        return view('welcome');
    }
    public function login(){
        return view('login');
    }

    public function aboutus(){
        return view('aboutus');
    }

   
}




