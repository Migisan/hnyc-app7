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
        return view('user_info.index');
    }

    /**
     * ユーザー情報一覧
     *
     * @return json
     */
    public function json(){
        return Auth::user()->toJson();
    }
    
    /**
     * 更新フォームセット
     *
     * @return json
     */
    public function set_update(){
        return Auth::user()->toJson();
        // return From::where('id', $id)->where('user_id', Auth::id())->first()->toJson();
    }

    /**
     * ユーザー情報更新
     *
     * @param Request $request
     * @return json
     */
    public function update(Request $request){
        // DB
        $user = Auth::user();
        $input = $request->all();
        
        // 保存
        $user->fill($input)->save();

        // json
        return response()->json([
            'result' => "success",
            'request' => $request
        ]);
    }

    /**
     * 退会
     *
     * @return json
     */
    public function delete(){
        // 論理削除
        Auth::user()->delete();

        // json
        return response()->json([
            'result' => "success"
        ]);
    }
}
