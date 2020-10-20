<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品アップロード画面</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css”>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<form action="" method="post">
  <div class="form-group">
    <label for="jan">Jan</label>
    <input type="text" class="form-control" id="jan" placeholder="">
  </div>
  <div class="form-group">
    <label for="name">商品名</label>
    <input type="text" class="form-control" id="jan" placeholder="">
  </div>
  <div class="form-group">
    <label for="maker">ブランド名</label>
    <input type="text" class="form-control" id="maker" placeholder="">
  </div>
  <div class="form-group">
    <label for="purice">値段</label>
    <input type="number" class="form-control" id="price" placeholder="">
  </div>
  <div class="form-group">
    <label for="price">値段</label>
    <input type="number" class="form-control" id="price" placeholder="">
  </div>
  <div class="form-group">
    <label for="category">カテゴリー</label>
    <select id="category" class="form-control" name="category">
      <option value="shoes">靴</option>
      <option value="bag">カバン</option>
      <option value="wear">衣類</option>
      <option value="goods">その他</option>
    </select>
  </div>
  <div class="form-group">
    <label for="tile">見出し</label>
    <input type="text" class="form-control" id="text" placeholder="">
  </div>
  <div class="form-group">
    <label for="detail">詳細</label>
    <textarea id="detail" name="detail" rows="8" cols="80" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">登録する</button>
</form>
</body>
</html>