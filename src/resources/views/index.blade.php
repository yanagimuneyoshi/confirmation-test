<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header>
    <h1>FashionablyLate</h1>
  </header>
  <div class="contact-form">
    <h2>Contact</h2>
    <form action="/confirm" method="post">
      @csrf
      <div class="form-group">
        <label for="first-name">お名前（姓）</label>
        <input type="text" id="first-name" name="first-name" placeholder="例　山田">
        <span>{{$errors->first('first-name')}}</span>
      </div>
      <div class="form-group">
        <label for="last-name">お名前（名）</label>
        <input type="text" id="last-name" name="last-name" placeholder="例　太郎">
        <span>{{$errors->first('last-name')}}</span>
      </div>
      <div class="form-group">
        <label for="gender">性別</label>
        <input type="radio" id="gender" name="gender" value="男" checked> 男
        <input type="radio" id="gender" name="gender" value="女"> 女
        <input type="radio" id="gender" name="gender" value="その他"> その他
        <span>{{$errors->first('gender')}}</span>
      </div>
      <div class="form-group">
        <label for="email">メールアドレス</label>
        <input type="email" id="email" name="email" placeholder="メールアドレス">
        <span>{{$errors->first('email')}}</span>
      </div>
      <div class="form-group">
        <label for="phone">電話番号</label>
        <input type="text" id="phone" name="phone" maxlength="11" pattern="\d{10,11}" required placeholder="例：08012345678">
        <span>{{$errors->first('phone')}}</span>
      </div>
      <div class="form-group">
        <label for="address">住所</label>
        <input type="text" id="address" name="address" required placeholder="例：東京都渋谷区千駄ヶ谷1-2-3">
        <span>{{$errors->first('address')}}</span>
      </div>
      <div class="form-group">
        <label for="building">建物名</label>
        <input type="text" id="building" name="building" required placeholder="例：千駄ヶ谷マンション101">
        <span>{{$errors->first('building')}}</span>
      </div>
      <div class="form-group">
        <label for="inquiry-type">お問い合わせ種類</label>
        <select id="inquiry-type" name="inquiry-type" required>
          <option value="" selected disabled>選択してください</option>
          <option value="delivery">商品のお届けについて</option>
          <option value="exchange">商品の交換について</option>
          <option value="trouble">商品トラブル</option>
          <option value="shop-inquiry">ショップへのお問い合わせ</option>
          <option value="other">その他</option>
        </select>
        <span>{{$errors->first('inquiry-type')}}</span>
      </div>
      <div class="form-group">
        <label for="message">お問い合わせ内容</label>
        <textarea id="message" name="message" placeholder="メッセージ"></textarea>
        <span>{{$errors->first('message')}}</span>
      </div>
      <div class="form-group">
        <button type="submit">確認画面</button>
      </div>
    </form>
  </div>
</body>




</form>
</body>

</html>