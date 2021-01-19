@extends('layouts.temp')

@section('content')
<section class="section from">
  <div class="section__inner">
    <h2>差出人管理画面</h2>
    <!-- 差出人一覧 -->
    <div class="from-lists">
      <h3 class="from-lists__ttl">差出人一覧</h3>
      @if(!$froms->isEmpty())
      <table class="from-lists__table">
        <tr class="from-lists__table-header">
          <th>氏名</th><th>郵便番号</th><th>住所</th>
        </tr>
        @foreach($froms as $from)
          <tr class="from-lists__table-row">
            <td>{{ $from->l_name}} {{$from->f_name }}</td>
            <td>{{ $from->postal_code }}</td>
            <td>{{ $from->prefecture->name }}{{ $from->city->name }}{{ $from->address_etc }}</td>
          </tr>
        @endforeach
      </table><!-- from-lists__table -->
      @else
        <p>差出人が登録されていません。</p>
      @endif
    </div><!-- from-lists -->
    <!-- 差出人登録フォーム -->
    <div id="app">
      <from-component :csrf="{{ json_encode(csrf_token()) }}"></from-component>
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
</section><!-- from -->
@endsection