<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="contact-form">
    <h2>Contact</h2>
    <form class="name" required>
      <label for="name">お名前</label>
      <input type="text" name="first-name" placeholder="例　山田">
      <input type="text" name="last-name" placeholder="例　太郎">
    </form>
    <form class="sex" required>
      <label for="sex-1">性別：</label>
      <input type="radio" name="gender" value="男"> 男
      <input type="radio" name="gender" value="女" checked> 女
      <input type="radio" name="gender" value="その他"> その他
    </form>
    <form class="mail" required>
      <label for="mail-1">メールアドレス</label>
      <input type="email" name="email" placeholder="メールアドレス">
    </form>
    <form class="tell" required>
      <label for="phone1">電話番号：</label>
      <input type="text" id="phone1" name="phone1" maxlength="3" pattern="[0-9]{3}" required> -
      <input type="text" id="phone2" name="phone2" maxlength="4" pattern="[0-9]{4}" required> -
      <input type="text" id="phone3" name="phone3" maxlength="4" pattern="[0-9]{4}" required>
    </form>
    <form class="address" required>
      <label for="address">住所：</label>
      <input type="text" id="address" name="address" required placeholder="例：東京都渋谷区千駄ヶ谷1-2-3">
    </form>
    <form class="billing">
      <label for="building">建物名：</label>
      <input type="text" id="building" name="building" placeholder="例：アパートメント101">
    </form>
    <form action="submit.php" required>
      <label for="inquiry-type">お問い合わせ種類：</label>
      <select id="inquiry-type" name="inquiry-type" required>
        <option value="" selected disabled>選択してください</option>
        <option value="delivery">商品のお届けについて</option>
        <option value="exchange">商品の交換について</option>
        <option value="trouble">商品トラブル</option>
        <option value="shop-inquiry">ショップへのお問い合わせ</option>
        <option value="other">その他</option>
      </select>
    </form>

    <form action="message" required>
      <label for="inquiry-details">お問い合わせ内容：</label>
      <textarea name="message-1" placeholder="メッセージ"></textarea>
    </form>

    <form action="submit">
      <input button="submit-1" value="送信">
    </form>
</body>

</html>