<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // メイン画面
    public function index(){

        return view('index');
    }
}
