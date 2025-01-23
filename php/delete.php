
<?php
$id    = $_GET['id'];

//2. DB接続します
session_start();
require_once('funcs.php');
loginCheck();
$id = $_GET['id'];
$pdo = db_conn();

//３．データ登録SQL作成
//ガチで削除されるので、フラグを１つ作り、ソフトデリートをするのが良い
$stmt = $pdo->prepare('
                        DELETE FROM pomodoro WHERE id =:id
                        ');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    header('Location: select.php');
    exit();
}
?>