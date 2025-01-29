<?php
session_start();
require_once('funcs.php');
loginCheck();

$id = $_GET['id']; //?id~**を受け取る<div class="$pdo = db_conn();にはid情報を使うため上に持ってくる
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM pomodoro where id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$result = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    $result = $stmt->fetch();
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>タイマー開始</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .submit {
            max-width: 300px;
            margin-bottom: 20px;
        }
    </style>
</head>

<header>
    <p class="link_title"><a href="form.php">入力</a></p>
    <p class="link_title"><a href="select.php">一覧表示</a></p>
    <p class="link_title"><a href="../index.php">使い方</a></p>
    <p class="link_title"><a href="account/logout.php">ログアウト</a></p>
    <!-- <p class="link_title"><a href="account/login.php">ログイン</a></p> -->
</header>

<body>
    <div class="contents"><!-- タイマー -->
        <h1>タイマー</h1>
        <div id="timer">
            <span id="minutes">25</span>:<span id="seconds">00</span>
        </div>
        <div id="progressContainer">
            <div id="progressBar"></div>
        </div>
        <button id="startButton" class="timer-button start">開始</button>
        <button id="stopButton" class="timer-button  stop">停止</button>
        <button id="resetButton" class="timer-button  reset">リセット</button>
        <!-- method, action, 各inputのnameを確認してください。  -->
        <form method="POST" action="update.php">
            <div class="jumbotron">
                <h1>記録</h1>
                <fieldset>
                    <label>todo<br><input type="text" name="todo" class="form_detail" value="<?= $result['todo'] ?>"></label><br>
                    <label>振り返り<br><input type="text" name="ref" class="form_detail" value="<?= $result['ref'] ?>"></label><br>
                    <label>次回<br><input type="text" name="next" class="form_detail" value="<?= $result['next'] ?>"></label><br>
                    <input type="hidden" name="id" value="<?= $result['id'] ?>">
                    <input type="submit" class="submit" value="記録する">
                </fieldset>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/timer.js"></script>
</body>

</html>