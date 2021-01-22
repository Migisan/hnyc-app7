@extends('layouts.temp')

@section('content')
<section class="section destination">
  <div class="section__inner">
    <h2>宛先人管理画面</h2>
    <!-- 宛先人一覧 -->
    <div class="destination-lists">
      <h3 class="destination-lists__ttl">宛先人一覧</h3>
      @if(!$destinations->isEmpty())
      <table class="destination-lists__table">
        <tr class="destination-lists__table-header">
          <th>氏名</th><th>郵便番号</th><th>住所</th>
        </tr>
        @foreach($destinations as $destination)
          <tr class="destination-lists__table-row">
            <td>{{ $destination->l_name}} {{$destination->f_name }}</td>
            <td>{{ $destination->postal_code }}</td>
            <td>{{ $destination->prefecture->name }}{{ $destination->city->name }}{{ $destination->address_etc }}</td>
          </tr>
        @endforeach
      </table><!-- destination-lists__table -->
      @else
        <p>宛先人が登録されていません。</p>
      @endif
    </div><!-- destination-lists -->
    <!-- 宛先人登録フォーム -->
    <div id="app">
      <destination-component :csrf="{{ json_encode(csrf_token()) }}"></destination-component>
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
</section><!-- destination -->
@endsection