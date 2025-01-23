<?php
$db_host = 'localhost';
$db_id = 'root';
$db_pw = '';
$db_name = 'gs_db'; // 正しいデータベース名を設定

// POSTデータの取得
$name = $_POST['name'];
$lid = $_POST['lid'];
$lpw = password_hash($_POST['lpw'], PASSWORD_DEFAULT); // パスワードをハッシュ化
$kanri_flg = 0; // 管理者フラグの初期値
$life_flg = 0; // ライフフラグの初期値

//try catch構文でデータベースの情報取得を実施
try {
  $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
} catch (PDOException $e) {
  exit('DBConnectError:' . $e->getMessage());
}

$stmt = $pdo->prepare("INSERT INTO user (id, name, lid, lpw, date, kanri_flg, life_flg)
                       VALUES (NULL, :name, :lid, :lpw, now(), :kanri_flg, :life_flg)");

$stmt->bindValue(':name', $name, PDO::PARAM_STR); // PARAM_STRは文字列を指定
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);
$stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_INT);

//  3. 実行
$status = $stmt->execute();

// 4. データ登録処理後
if ($status === false) {
  // SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:' . $error[2]);
} else {
  // 5. index.phpへリダイレクト
  header('Location: ../../index.php');
}
