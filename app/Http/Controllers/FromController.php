<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\From;

class FromController extends Controller
{
    /*
     * 差出人管理画面の表示
     */
    public function index(){
        $froms = From::all();
        $data = [
            'froms' => $froms
        ];
        return view('from.index', $data);
    }

    /*
     * 差出人登録処理
     */
    public function create(Request $request){
        dd($request->all());
        return view('from.index');
    }
}
