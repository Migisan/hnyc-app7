@extends('layouts.temp')

@section('subTitle', '宛先人管理画面')

@section('content')
<div id="app">
  <destination-component :csrf="{{ json_encode(csrf_token()) }}"></destination-component>
</div>
@endsection