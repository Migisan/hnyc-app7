@extends('layouts.temp')

@section('subTitle', 'ユーザー情報管理画面')

@section('content')
<div id="app">
  <user-info-component :csrf="{{ json_encode(csrf_token()) }}"></user-info-component>
</div>
@endsection