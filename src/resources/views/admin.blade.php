<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>FashionablyLate</h1>
  <p>Admin</p>

  <form id="searchForm">
    <label for="name">名前:</label>
    <input type="text" id="name" name="name">

    <label for="email">メールアドレス:</label>
    <input type="text" id="email" name="email">

    <label for="gender">性別:</label>
    <select id="gender" name="gender">
      <option value="">性別</option>
      <option value="male">男性</option>
      <option value="female">女性</option>
      <option value="other">その他</option>
    </select>

    <label for="inquiryType">お問い合わせ種類:</label>
    <input type="text" id="inquiryType" name="inquiryType">

    <label for="date">日付:</label>
    <input type="date" id="date" name="date">

    <button type="button" onclick="search()">検索</button>
    <button type="button" onclick="resetForm()">リセット</button>
  </form>

  <table id="searchResults" class="admin-panel">
    <thead>
      <tr>
        <th>名前</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>お問い合わせ種類</th>
        <th>操作</th>
      </tr>
    </thead>
    
  </table>
</body>

</html>