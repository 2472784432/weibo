<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //主页
    public function home() {
        return view('static_pages/home');
    }

    //关于页
    public function about() {
        return view('static_pages/about');
    }

    //帮助页
    public function help() {
        return view('static_pages/help');
    }


}
