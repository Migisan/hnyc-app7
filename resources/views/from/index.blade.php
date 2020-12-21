@extends('layouts.temp')

@section('content')
<section class="section from">
  <div class="section__inner">
    <h2>差出人管理画面</h2>
    <!-- 差出人一覧 -->
    <div class="from-lists">
      <h3 class="from-lists__ttl">差出人一覧</h3>
      @if($froms)
      <table class="from-lists__table">
        <tr class="from-lists__table-header">
          <th>氏名</th><th>郵便番号</th><th>住所</th>
        </tr>
        <tr class="from-lists__table-row">
          <td></td><td></td><td></td>
        </tr>
      </table><!-- from-lists__table -->
      @else
        <p>差出人が登録されていません。</p>
      @endif
    </div><!-- from-lists -->
    <!-- 差出人登録フォーム -->
    <div class="from-create">
      <h3 class="from-create__ttl">差出人登録フォーム</h3>
      <form action="/from/create" method="POST" class="from-create__form">
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
            <th><label for="prefecture">都道府県</label></th>
            <td>
              <select name="prefecture" id="prefecture">
                <option value="">選択してください</option>
                <option value="1">都道府県</option>
              </select>
            </td>
          </tr>
          <tr>
            <th><label for="city">市町村</label></th>
            <td>
              <select name="city" id="city">
                <option value="">選択してください</option>
                <option value="1">市町村</option>
              </select>
            </td>
          </tr>
          <tr>
            <th><label for="address_etc">番地等</label></th>
            <td><input type="text" name="address_etc" id="address_etc" placeholder="番地等"></td>
          </tr>
          <tr>
            <th><label for="postal_code">郵便番号</label></th>
            <td><input type="text" name="postal_code" id="postal_code" placeholder="郵便番号"></td>
          </tr>
          <tr>
            <th><label for="favorite">お気に入り</label></th>
            <td><input type="checkbox" name="favorite" id="favorite"></td>
          </tr>
        </table>
        <button type="submit">差出人登録</button>
      </form>
    </div><!-- from-create -->
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