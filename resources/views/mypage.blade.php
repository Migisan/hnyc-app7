@extends('layouts.temp')

@section('content')
<section class="section mypage">
  <div class="section__inner">
    <h2>マイページ</h2>
    <div class="user-info">
      <h3>ユーザー情報</h3>
      <table class="user-info__table">
        <tr>
          <th>名前</th>
          <td>{{ $user->l_name }} {{ $user->f_name }}</td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td>{{ $user->email }}</td>
        </tr>
      </table>
    </div><!-- user-info -->
  </div><!-- section__inner -->
</section><!-- mypage -->
@endsection