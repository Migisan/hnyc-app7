<header class="header">
  <div class="header__inner">
    <h1 class="header__ttl">@yield('subTitle')</h1>
    <!-- ナビゲーション -->
    <!-- グローバルナビ -->
    <nav class="nav">
      <ul class="nav__lists">
        <li class="nav__list">
          <a class="nav__link" href="/">はがき作成画面</a>
        </li>
        <li class="nav__list">
          <a class="nav__link" href="/mypage">マイページ</a>
        </li>
        <li class="nav__list">
          <a class="nav__link" href="/logout">ログアウト</a>
        </li>
      </ul>
    </nav>
    <!-- ハンバーガーボタン -->
    <div class="hamburger-btn">
      <span class="hamburger-btn__parts -top"></span>
      <span class="hamburger-btn__parts -middle"></span>
      <span class="hamburger-btn__parts -bottom"></span>
    </div>
    <!-- ハンバーガーメニュー -->
    <nav class="hamburger">
      <ul class="hamburger__lists">
        <li class="hamburger__list">
          <a class="hamburger__link" href="/">はがき作成画面</a>
        </li>
        <li class="hamburger__list">
          <a class="hamburger__link" href="/mypage">マイページ</a>
        </li>
        <li class="hamburger__list">
          <a class="hamburger__link" href="/logout">ログアウト</a>
        </li>
      </ul>
    </nav>
    <!-- ここまでナビゲーション -->
  </div>
</header>