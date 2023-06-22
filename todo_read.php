<?php
//##############################################################
//DB接続前の各種項目設定
//データベース名、port等を書き換え
//##############################################################
$dbn = 'mysql:dbname=gs_php_kadai;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

//##############################################################
//DB接続
//db接続でエラーが発生していることがわかるようにする
//##############################################################
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

//##############################################################
//SQL作成&実行
//全てのカラムを参照
//##############################################################
$sql = 'SELECT * FROM reserve_table ORDER BY checkin ASC';
$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

//##############################################################
//SQL実行の処理
//
//##############################################################
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["checkin"]}</td>
      <td>{$record["checkout"]}</td>
      <td>{$record["name"]}</td>
      <td>{$record["content"]}</td>
      <td>{$record["price"]}</td>
      <td>{$record["tell"]}</td>
      <td>{$record["email"]}</td>
    </tr>
  ";
}
?>

<!DOCTYPE html>
<html lang="ja">
<style>
  
</style>



<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>予約システム（予約確認画面）</title>
</head>

<body>
  <fieldset>
    <legend>予約システム（予約確認画面）</legend>
    <a href="todo_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>チェックイン</th>
          <th>チェックアウト</th>
          <th>氏名</th>
          <th>内容</th>
          <th>料金</th>
          <th>電話</th>
          <th>email</th>
        </tr>
      </thead>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>