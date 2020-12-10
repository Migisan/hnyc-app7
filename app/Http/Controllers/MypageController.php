<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class MypageController extends Controller
{
    /*
     * マイページ画面の表示
     */
    public function index(){
        $user = Auth::user(); // ログイン中のユーザー情報

        $data = [
            'user' => $user
        ];

        return view('mypage', $data);
    }
    
}
