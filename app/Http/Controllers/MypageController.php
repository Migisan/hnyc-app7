<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    /*
     * マイページ画面の表示
     */
    public function index(){
        return view('mypage');
    }
    
}
