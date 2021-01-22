<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * はがき作成画面の表示
     *
     * @return view
     */
    public function index(){
        return view('index');
    }
    
}
