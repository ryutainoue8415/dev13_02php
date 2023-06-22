<!DOCTYPE html>
<html lang="ja">
<style>
  body {
    background-color: gainsboro;
    width: 500px;
    height: 350px;
    margin: auto;
  }

  form {
    background-color: white;
  }

  .input_form {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  
    background-color: #9ffff5;
  }

  .input {
    background-color: #9ffff5;
  }
</style>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>予約システム（入力画面）</title>
</head>

<body>
  <form action="todo_create.php" method="post">
    <fieldset>
      <legend>予約システム（入力画面）</legend>
      <a href="todo_read.php">一覧画面</a>
      <div class="input_form">
        <div>顧客名</div>
        <div><input type="text" name="name"></div>
      </div>
      <div class="input_form">
        <div>利用内容</div>
        <div><input type="text" name="content"></div>
      </div>
      <div class="input_form">
        チェックイン<input type="date" name="checkin">
      </div>
      <div class="input_form">
        チェックアウト<input type="date" name="checkout">
      </div>
      <div class="input_form">
        利用料金<input type="text" name="price">
      </div>
      <div class="input_form">
        電話<input type="tell" name="tell">
      </div>
      <div class="input_form">
        email<input type="email" name="email">
      </div>
      <div>
        <button>送信</button>
      </div>
    </fieldset>
  </form>

</body>

</html>