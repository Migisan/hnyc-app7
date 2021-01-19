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
    <div class="from-info">
      <h3>差出人情報</h3>
      <table class="from-info__table">
      </table>
      <a href="/from" class="from-info__btn">差出人管理画面</a>
    </div><!-- from-info -->
    <div class="destination-info">
      <h3>宛先人情報</h3>
      <table class="destination-info__table">
      </table>
      <a href="/destination" class="destination-info__btn">宛先人管理画面</a>
    </div><!-- destination-info -->
  </div><!-- section__inner -->
</section><!-- mypage -->
@endsection