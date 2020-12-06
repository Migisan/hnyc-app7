<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="">
    <title>@yield('userTitle')</title>
    <meta name="desctiption" content="はがきアプリです。はがき作成ができるだけでなく、差出人、宛先人、送付履歴などを管理することができます。">

    <!-- OGP -->
    <!-- <meta property="og:url" content=" ページの URL" />
    <meta property="og:type" content=" ページの種類" /> -->
    <!--website /blog 下層→article-->
    <!-- <meta property="og:title" content=" ページの タイトル" />
    <meta property="og:description" content=" ページのディスクリプション" />
    <meta property="og:site_name" content="サイト名" />
    <meta property="og:image" content=" サムネイル画像の URL" /> -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/sp.css">
    <link rel="stylesheet" href="css/tb.css">
    <link rel="stylesheet" href="css/pc.css"> -->
  </head>
  <body class="preload">
    <!-- ヘッダー -->
    @component('components.user')
    @endcomponent

    <!-- メイン -->
    <main class="main">
      @yield('content')
    </main>
    <!-- ここまでメイン -->

    <!-- フッター -->
    <footer class="footer"></footer>
    <!-- ここまでフッター -->

    <!-- JavaScript -->
    <script src="https://kit.fontawesome.com/13512ea588.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="js/script.js"></script>
  </body>
</html>