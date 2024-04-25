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
    </nav>
  </header>
  <h2 class="login">Login</h2>
  <form class="login-form">
    <input type="text" name="email" placeholder="メールアドレス">
    <input type="password" name="password" placeholder="パスワード">
    <input type="submit" value="ログイン">
  </form>
</body>

</html>