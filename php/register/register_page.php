<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<header>
    <!-- <p class="link_title"><a href="form.php">入力</a></p> -->
    <!-- <p class="link_title"><a href="select.php">一覧表示</a></p> -->
    <p class="link_title"><a href="../../index.php">使い方</a></p>
    <!-- <p class="link_title"><a href="logout.php">ログアウト</a></p> -->
    <!-- <p class="link_title"><a href="login.php">ログイン</a></p> -->
    <!-- <p class="link_title"><a href="../register/index.php">新規登録</a></p> -->
</header>


<body>
    <div class="card">
        <span class="card__title">ユーザー登録</span>
        <p class="card__content">サービスを使うために会員登録をお願いします。</p>
        <div class="card__form">
            <form action="index_confirm.php" method="post">
                <label for="name">ユーザー名:</label>
                <input type="text" class="name" name="name" placeholder="Your Name"><br>
                <label for="lid">メールアドレス:</label>
                <input type="lid" class="email" name="lid" placeholder="Your Email"><br>
                <label for="lpw">パスワード:</label>
                <input type="lpw" class="password" name="lpw" placeholder="Your Password"><br>
                <input type="submit" class="submit" value="確認する">
            </form>
            <!-- <p class="submit"><a href="login_form.php">既に登録している方はこちら</a></p> -->
        </div>
    </div>
</body>

</html>