<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    /*
     * 新規会員登録画面の表示
     */
    public function register(){
        return view('user.register');
    }

    /*
     * 会員登録処理
     */
    public function signup(Request $request){
        // バリデーション
        $validateRule = [
            'l_name'   => ['required', 'max:50'],
            'f_name'   => ['required', 'max:50'],
            'email'    => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:8', 'max:255', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]+$/'],
        ];
        $validateMsg = [
            'l_name.required' => '姓は必須項目です。',
            'l_name.max'      => '姓は50文字以内です。',
            'f_name.required' => '名は必須項目です。',
            'l_name.max'      => '名は50文字以内です。',
            'email.required' => 'メールアドレスは必須項目です。',
            'email.email' => 'メールアドレス形式で入力してください。',
            'email.max' => 'メールアドレスは255文字以内です。',
            'email.unique' => '入力されたメールアドレスは既に登録されています。',
            'password.required' => 'パスワードは必須項目です。',
            'password.min' => 'パスワードは8文字以上です。',
            'password.max' => 'パスワードは255文字以内です。',
            'password.regex' => 'パスワードは英小文字、英大文字、数字をそれぞれ1文字以上含んで入力してください。',
        ];
        $this->validate($request, $validateRule, $validateMsg);

        // DB
        $user = new User;
        $input = $request->all();
        $input['password'] = Hash::make($input['password']); // パスワードハッシュ化
        unset($input['_token']); // トークン削除
        
        // 保存
        $user->fill($input)->save();

        // リダイレクト
        return view('user.login');
    }

    /*
     * ログイン画面の表示
     */
    public function login(){
        return view('user.login');
    }

    /*
     * ログイン処理
     */
    public function signin(Request $request){
        // バリデーション
        $validateRule = [
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ];
        $validateMsg = [
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => 'メールアドレス形式で入力してください。',
            'password.required' => 'パスワードを入力してください。',
        ];

        // 認証
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect('/');
        }else{
            return redirect()->back();
        }
    }

    /*
     * ログインアウト処理
     */
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
