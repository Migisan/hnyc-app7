@extends('layouts.temp')

@section('subTitle', '差出人管理画面')

@section('content')
<div id="app">
  <from-component :csrf="{{ json_encode(csrf_token()) }}"></from-component>
</div>
@endsection