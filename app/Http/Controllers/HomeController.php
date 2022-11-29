<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //トップページ表示
    public function home () {
        return view('home');
    }
    
    public function outline () {
        return view('outline');
    }
    
    public function governance() {
        return view('governance');
    }
    
    public function access() {
        return view('map');
    }
}
