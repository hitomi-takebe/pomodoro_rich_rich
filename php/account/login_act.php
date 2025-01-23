<?php

//最初にSESSIONを開始！！ココ大事！！
session_start();

//POST値を受け取る
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];

//1.  DB接続します
require_once('../funcs.php');
$pdo = db_conn();

// SQL文の準備
$stmt = $pdo->prepare('SELECT * FROM user WHERE lid = :lid');
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$status = $stmt->execute();

// SQL実行時にエラーがある場合
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('ErrorMessage:' . $error[2]);
}

// 抽出データ数を取得
$val = $stmt->fetch();

// パスワードの検証
if ($val && password_verify($lpw, $val['lpw'])) {
    // Login成功時 該当レコードがあればSESSIONに値を代入
    $_SESSION['chk_ssid'] = session_id();
    $_SESSION['kanri_flg'] = $val['kanri_flg'];
    $_SESSION['user_name'] = $val['name'];
    $_SESSION['user_id'] = $val['id'];
    header('Location: ../../index.php');
} else {
    // Login失敗時(Logout経由)
    header('Location: login.php');
}

exit();

?>