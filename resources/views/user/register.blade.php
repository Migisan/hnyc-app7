@extends('layouts.auth')

@section('userTitle', '新規会員登録')

@section('content')
<section class="section
">
  <div class="section__inner">
    <!-- 登録フォーム -->
    <div class="register">
      <h2 class="register__ttl">登録フォーム</h2>
      <form action="/register" method="POST" class="register__form">
        @csrf
        <table>
          <tr>
            <th><label for="l_name">姓</label></th>
            <td><input type="text" name="l_name" id="l_name" placeholder="姓" value="{{ old('l_name') }}"></td>
          </tr>
          <tr>
            <th><label for="f_name">名</label></th>
            <td><input type="text" name="f_name" id="f_name" placeholder="名" value="{{ old('f_name') }}"></td>
          </tr>
          <tr>
            <th><label for="email">メールアドレス</label></th>
            <td><input type="email" name="email" id="email" placeholder="メールアドレス" value="{{ old('email') }}"></td>
          </tr>
          <tr>
            <th><label for="password">パスワード</label></th>
            <td><input type="password" name="password" id="password" placeholder="パスワード"></td>
          </tr>
        </table>
        <button type="submit">登録</button>
      </form>
    </div><!-- register -->
    @if (count($errors) > 0)
      <!-- エラー一覧 -->
      <ul class="errors">
        @foreach($errors->all() as $error)
          <li class="error">{{ $error }}</li>
        @endforeach
      </ul><!-- errors -->
    @endif
  </div><!-- section__inner -->
</section>
@endsection