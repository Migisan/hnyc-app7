<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;
use Illuminate\Support\Facades\Auth;


class DestinationController extends Controller
{
    /**
     * 宛先人管理画面の表示
     *
     * @return view
     */
    public function index(){
        $destinations = Destination::all();
        $data = [
            'destinations' => $destinations
        ];
        return view('destination.index', $data);
    }

    /**
     * 宛先人登録処理
     *
     * @param Request $request
     * @return redirect
     */
    public function create(Request $request){
        // dd($request->all());

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
        $destination = new Destination;
        $input = $request->all();
        $user = Auth::id();
        $input['user_id'] = $user;
        // お気に入り追加
        if(array_key_exists('favorite', $input)){
            $input['favorite'] = 1;
        }
        
        // 保存
        $destination->fill($input)->save();

        // リダイレクト
        return redirect('destination');
    }

}
