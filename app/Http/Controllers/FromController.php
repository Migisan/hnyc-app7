<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\From;
use Illuminate\Support\Facades\Auth;

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
        // バリデーション
        $validateRule = [
            'l_name'        => ['required', 'string', 'max:50'],
            'f_name'        => ['required', 'string', 'max:50'],
            'prefecture_id' => ['required', 'integer'],
            'city_id'       => ['required', 'integer'],
            'address_etc'   => ['required', 'string', 'max:100'],
            'postal_code'   => ['required', 'regex:/^\d{3}-\d{4}$/'],
        ];
        $validateMsg = [
            'l_name.required'        => '姓は必須項目です。',
            'l_name.string'          => '姓は文字列で入力してください。',
            'l_name.max'             => '姓は50文字以内です。',
            'f_name.required'        => '名は必須項目です。',
            'f_name.string'          => '名は文字列で入力してください。',
            'f_name.max'             => '名は50文字以内です。',
            'prefecture_id.required' => '都道府県は必須項目です。',
            'city_id.required'       => '市町村は必須項目です。',
            'address_etc.required'   => '番地等は必須項目です。',
            'address_etc.string'     => '番地等は文字列で入力してください。',
            'address_etc.max'        => '番地等は100文字以内です。',
            'postal_code.required'   => '郵便番号は必須項目です。',
            'postal_code.regex'      => '郵便番号は000-0000の形式で入力してください。',
        ];
        $this->validate($request, $validateRule, $validateMsg);

        // DB
        $from = new From;
        $input = $request->all();
        $user = Auth::id();
        $input['user_id'] = $user;
        
        // 保存
        $from->fill($input)->save();

        // リダイレクト
        return redirect('from');
    }

}
