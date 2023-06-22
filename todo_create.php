<?php
// POSTデータ確認
// var_dump($_POST);
// exit();

//##############################################################
//格納するデータが送信されていない、または空である場合に警告を出す
//どこで上手くいっていないのか把握できるようにするために重要！
//##############################################################
if(
!isset($_POST["name"])     || $_POST["name"]     === "" ||
!isset($_POST["content"])  || $_POST["content"]  === "" ||
!isset($_POST["checkin"])  || $_POST["checkin"]  === "" ||
!isset($_POST["checkout"]) || $_POST["checkout"] === "" ||
!isset($_POST["price"])    || $_POST["price"]    === "" ||
!isset($_POST["tell"])     || $_POST["tell"]     === "" ||
!isset($_POST["email"])    || $_POST["email"]    === ""
) {
 exit("paramError");
}

//##############################################################
//データの受け取り
//変数宣言
//##############################################################
$name     = $_POST["name"];
$content  = $_POST["content"];
$checkin  = $_POST["checkin"];
$checkout = $_POST["checkout"];
$price    = $_POST["price"];
$tell     = $_POST["tell"];
$email    = $_POST["email"];


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
//$sql変数のテーブル、カラム名、値を書き換え
//##############################################################
$sql = 'INSERT INTO reserve_table (id, created_at, updated_at, name, content, checkin, checkout, price, tell, email) VALUES (NULL, now(), now(), :name, :content, :checkin, :checkout, :price, :tell, :email)';
$stmt = $pdo->prepare($sql);

//##############################################################
//バインド変数を設定
//ハッキング防止のためユーザが入力した値を SQL 文内で使用する場合には必ずバインド変数を使用する
//##############################################################
$stmt->bindValue(':name'    , $name, PDO::PARAM_STR);
$stmt->bindValue(':content' , $content, PDO::PARAM_STR);
$stmt->bindValue(':checkin' , $checkin, PDO::PARAM_STR);
$stmt->bindValue(':checkout', $checkout, PDO::PARAM_STR);
$stmt->bindValue(':price'   , $price, PDO::PARAM_STR);
$stmt->bindValue(':tell'    , $tell, PDO::PARAM_STR);
$stmt->bindValue(':email'   , $email, PDO::PARAM_STR);

//##############################################################
//SQL実行
//実行に失敗するとエラー表示される
//##############################################################
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
header('Location:todo_input.php');
exit();


?>