@extends('layouts.temp')

@section('content')
<section class="section mypage">
  <div class="section__inner">
    <h2>マイページ</h2>
    <div class="user-info">
      <div class="user-info__ttl">
        <h3>ユーザー情報</h3>
        <a href="/user_info" class="user-info__btn">ユーザー情報管理画面</a>
      </div><!-- .user-info__ttl -->
      <table class="user-info__table--user">
        <tr>
          <th>氏名</th>
          <td>{{ $user->l_name }} {{ $user->f_name }}</td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td>{{ $user->email }}</td>
        </tr>
      </table>
    </div><!-- user-info -->
    <div class="from-info">
      <div class="from-info__ttl">
        <h3>差出人情報</h3>
        <a href="/from" class="from-info__btn">差出人管理画面</a>
      </div><!-- .from-info__ttl -->
      <table class="from-info__table">
        <tr>
          <th>氏名</th><th>郵便番号</th><th>住所</th>
        </tr>
        @foreach($froms as $from)
          <tr class="from-info__table-row">
            <td>{{ $from->l_name}} {{$from->f_name }}</td>
            <td>{{ $from->postal_code }}</td>
            <td>{{ $from->prefecture->name }}{{ $from->city->name }}{{ $from->address_etc }}</td>
          </tr>
        @endforeach
      </table>
    </div><!-- from-info -->
    <div class="destination-info">
      <div class="destination-info__ttl">
        <h3>宛先人情報</h3>
        <a href="/destination" class="destination-info__btn">宛先人管理画面</a>
      </div><!-- .destination-info__ttl -->
      <table class="destination-info__table">
        <tr>
          <th>氏名</th><th>郵便番号</th><th>住所</th>
          @foreach($destinations as $destination)
            <tr class="destination-info__table-row">
              <td>{{ $destination->l_name}} {{$destination->f_name }}</td>
              <td>{{ $destination->postal_code }}</td>
              <td>{{ $destination->prefecture->name }}{{ $destination->city->name }}{{ $destination->address_etc }}</td>
            </tr>
          @endforeach
        </tr>
      </table>
    </div><!-- destination-info -->
  </div><!-- section__inner -->
</section><!-- mypage -->
@endsection