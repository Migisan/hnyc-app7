<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInfoController extends Controller
{
    /**
     * ユーザー情報管理画面の表示
     *
     * @return view
     */
    public function index(){
        $user = Auth::user();
        $data = [
            'user' => $user
        ];
        return view('user_info.index', $data);
    }
}
