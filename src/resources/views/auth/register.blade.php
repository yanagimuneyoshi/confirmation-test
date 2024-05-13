<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
  <title>Register</title>
</head>

<body>
  <div class="container">
    <div class="title">
      <h1>FashionablyLate</h1>
      <button>Login</button>
    </div>
    <form class="form" action="/login" method="post">
      @csrf
        <h2>Register</h2>
        <label for="name">お名前</label>
        <input type="text" name="name" value="{{ old('name') }}" />
        <label for="mail">メールアドレス</label>
        <input type="email" name="email" value="{{ old('email') }}" />
        <label for="password">パスワード</label>
        <input type="password" name="password" />
        <button type="submit">登録</button>
    </form>
  </div>
</body>

</html>