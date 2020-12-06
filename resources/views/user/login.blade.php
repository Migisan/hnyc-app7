@extends('layouts.auth')

@section('userTitle', 'ログイン')

@section('content')
<section class="section">
  <div class="section__inner">
    <!-- ログインフォーム -->
    <div class="login">
      <h2 class="login__ttl">ログインフォーム</h2>
      <form action="/login" method="POST" class="login__form">
        @csrf
        <table>
          <tr>
            <th><label for="email">メールアドレス</label></th>
            <td><input type="email" name="email" id="email" placeholder="メールアドレス" value="{{ old('email') }}"></td>
          </tr>
          <tr>
            <th><label for="password">パスワード</label></th>
            <td><input type="password" name="password" id="password" placeholder="パスワード"></td>
          </tr>
        </table>
        <button type="submit">ログイン</button>
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