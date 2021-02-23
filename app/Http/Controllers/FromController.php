<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\From;
use Illuminate\Support\Facades\Auth;

class FromController extends Controller
{
    /**
     * 差出人管理画面の表示
     *
     * @return view
     */
    public function index(){
        return view('from.index');
    }

    /**
     * 差出人一覧
     *
     * @return json
     */
    public function json(){
        return From::where('user_id', Auth::id())->with('prefecture', 'city')->get()->toJson();
    }

    /**
     * 差出人登録
     *
     * @param Request $request
     * @return json
     */
    public function create(Request $request){
        // DB
        $from = new From;
        $input = $request->all();
        $user = Auth::id();
        $input['user_id'] = $user;
        
        // 保存
        $from->fill($input)->save();

        // json
        return response()->json([
            'result' => "success",
            'request' => $request
        ]);
    }

    /**
     * 更新フォームセット
     *
     * @param $id
     * @return json
     */
    public function set_update($id){
        return From::where('id', $id)->where('user_id', Auth::id())->first()->toJson();
    }

    /**
     * 差出人更新
     *
     * @param Request $request
     * @param $id
     * @return json
     */
    public function update(Request $request, $id){
        // DB
        $from = From::find($id);
        $input = $request->all();
        $user = Auth::id();
        $input['user_id'] = $user;
        
        // 保存
        $from->fill($input)->save();

        // json
        return response()->json([
            'result' => "success",
            'request' => $request
        ]);
    }

    /**
     * 差出人削除
     *
     * @param $id
     * @return json
     */
    public function delete($id){
        // 論理削除
        From::find($id)->delete();

        // json
        return response()->json([
            'result' => "success"
        ]);
    }

}
