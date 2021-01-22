<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\From;
use App\Destination;

class MypageController extends Controller
{
    /**
     * マイページ画面の表示
     *
     * @return view
     */
    public function index(){
        $user = Auth::user();
        $user_id = Auth::id();
        $froms = From::where('user_id', $user_id)->limit(5)->get();
        $destinations = Destination::where('user_id', $user_id)->limit(5)->get();

        $data = [
            'user' => $user,
            'froms' => $froms,
            'destinations' => $destinations
        ];

        return view('mypage', $data);
    }
    
}
