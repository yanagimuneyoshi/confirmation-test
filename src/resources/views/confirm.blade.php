<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <h1>FashionablyLate</h1>
    <h2>Confirm</h2>
    <form action="/thanks" method="post">
      @csrf
      <div class="form-group">
        <label for="name">お名前</label>
        <input type="text" id="name" name="name" value="{{ $contact['first-name'] ?? '' }} {{ $contact['last-name'] ?? '' }}" readonly>
      </div>
      <div class="form-group">
        <label for="gender">性別</label>
        <input type="text" id="gender" name="gender" value="{{ $contact['gender'] ?? '' }}" readonly>
      </div>
      <div class="form-group">
        <label for="email">メールアドレス</label>
        <input type="email" id="email" name="email" value="{{ $contact['email'] ?? '' }}" readonly>
      </div>
      <div class="form-group">
        <label for="phone">電話番号</label>
        <input type="tel" id="phone" name="phone" value="{{ $contact['phone'] ?? '' }}" readonly>
      </div>
      <div class="form-group">
        <label for="address">住所</label>
        <input type="text" id="address" name="address" value="{{ $contact['address'] ?? '' }}" readonly>
      </div>
      <div class="form-group">
        <label for="building">建物名</label>
        <input type="text" id="building" name="building" value="{{ $contact['building'] ?? '' }}" >
      </div>
      <div class="form-group">
        <label for="inquiry-type">お問い合わせ種類</label>
        <input type="text" id="inquiry-type" name="inquiry-type" value="{{ $contact['inquiry-type'] === 'delivery' ? '商品のお届けについて' : ($contact['inquiry-type'] === 'exchange' ? '商品の交換について' : ($contact['inquiry-type'] === 'trouble' ? '商品トラブル' : ($contact['inquiry-type'] === 'shop-inquiry' ? 'ショップへのお問い合わせ' : ($contact['inquiry-type'] === 'other' ? 'その他' : '')))) }}" readonly>
      </div>
      <div class="form-group">
        <label for="message">お問い合わせ内容</label>
        <textarea id="message" name="message" readonly>{{ $contact['message'] ?? '' }}</textarea>
      </div>
      <div class="form-group">
        <button type="submit">送信</button>
      </div>
    </form>
    <form class="reset" action="/">
      <button type="button" onclick="window.history.back();">リセット</button>
    </form>


</body>


</html>