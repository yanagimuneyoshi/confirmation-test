<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
  <header>
    <h1>FashionablyLate</h1>
    <nav>
      <a href="/register">登録</a>
      <!-- <form class="reset" action="/register">
        <button type="button" onclick="window.history.back();">登録</button>
      </form> -->
    </nav>
  </header>
  <h2 class="login">Login</h2>
  <form class="login-form" action="/admin" method="post">
    @csrf
      <input type="text" name="email" placeholder="メールアドレス">
      <input type="password" name="password" placeholder="パスワード">
      <input type="submit" value="ログイン">
  </form>
</body>

</html>