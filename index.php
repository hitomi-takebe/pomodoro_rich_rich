<?php
session_start();
// セッションチェック
$_SESSION['chk_ssid'] != session_id();

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>使い方</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .submit {
            max-width: 300px;
            margin-bottom: 20px;
        }
    </style>
</head>

<header>
    <p class="link_title"><a href="php/form.php">入力</a></p>
    <p class="link_title"><a href="php/select.php">一覧表示</a></p>
    <p class="link_title"><a href="index.php">使い方</a></p>
    <?php if ($_SESSION['chk_ssid'] == session_id()): ?>
        <p class="link_title"><a href="php/account/logout.php">ログアウト</a></p>
    <?php else: ?>
        <p class="link_title"><a href="php/account/login.php">ログイン</a></p>
        <p class="link_title"><a href="php/register/register_page.php">ユーザー登録</a></p>
    <?php endif; ?>
</header>

<body>
    <div class="contents">
        <p>①「入力」タブからtodoを入力して登録。</p>
        <p>②「一覧」から使いたいタスクのNo.をクリック。</p>
        <p>③タイマー機能を使って、25分間計測、todoをやろう。</p>
        <p>④終わったら、振り返りと次からはこうしたいを書いて「記録する」をクリックして保存しよう。</p>
        <p>④管理者の方は「一覧」から内容を削除できます。</p>
    </div>
</body>

</html>