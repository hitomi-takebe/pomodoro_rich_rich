<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <?php
    // 入力データの取得
    $name = $_POST['name'];
    $lid = $_POST['lid'];
    $lpw = $_POST['lpw'];

    ?>
    <div class="card">
        <span class="card__title">ユーザー登録</span>
        <p class="card__content">こちらで登録いたします。</p>
        <div class="card__form">
            <p>ユーザー名:<?= $name ?></P>
            <p>メールアドレス:<?= $lid ?></P>
            <p>パスワード:<?= $lpw ?></P>
        </div>
        <!-- hiddenで隠してformを作成し、formの内容はvalueで入力する -->
        <form action="insert.php" method="post">
            <input type="hidden" name="name" value="<?= $name ?>">
            <input type="hidden" name="lid" value="<?= $lid ?>">
            <input type="hidden" name="lpw" value="<?= $lpw ?>">
            <input type="submit" class="submit" value="送信">
        </form>
        <p class="submit"><a href="../../index.php">修正する</a></p>
    </div>

</body>

</html>