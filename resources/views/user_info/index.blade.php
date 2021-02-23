@extends('layouts.temp')

@section('subTitle', 'ユーザー情報管理画面')

@section('content')
<section class="section user-info">
  <div class="section__inner">
    <!-- ユーザー情報一覧 -->
    <div class="user-info-lists">
      <h3 class="user-info-lists__ttl">ユーザー情報</h3>
      <table class="user-info-lists__table--user">
        <tr>
          <th>氏名</th>
          <td>{{ $user->l_name }} {{ $user->f_name }}</td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td>{{ $user->email }}</td>
        </tr>
      </table><!-- user-info-lists__table -->
    </div><!-- user-info-lists -->
    <!-- 差出人登録フォーム -->
    <div id="app">
      <user-info-component :csrf="{{ json_encode(csrf_token()) }}"></user-info-component>
    </div>
    @if (count($errors) > 0)
      <!-- エラー一覧 -->
      <ul class="errors">
        @foreach($errors->all() as $error)
          <li class="error">{{ $error }}</li>
        @endforeach
      </ul><!-- errors -->
    @endif
  </div><!-- section__inner -->
</section><!-- user-info -->
@endsection