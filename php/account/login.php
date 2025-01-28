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

<header>
    <!-- <p class="link_title"><a href="../form.php">入力</a></p> -->
    <!-- <p class="link_title"><a href="../select.php">一覧表示</a></p> -->
    <p class="link_title"><a href="../../index.php">使い方</a></p>
    <!-- <p class="link_title"><a href="logout.php">ログアウト</a></p> -->
    <!-- <p class="link_title"><a href="login.php">ログイン</a></p> -->
    <p class="link_title"><a href="../register/register_page.php">ユーザー登録</a></p>
</header>

<body>
    <div class="card">
        <span class="card__title">ログインページ</span>
        <p class="card__content">サービスを使うためにログインをお願いします。</p>
        <div class="card__form">
            <form action="login_act.php" method="post">
                <label for="lid">メールアドレス:</label>
                <input type="lid" class="email" name="lid" placeholder="Your Email" required>
                <label for="lpw">パスワード:</label>
                <input type="lpw" class="password" name="lpw" placeholder="Your Password"><br>
                <input type="submit" class="submit" value="ログイン">
            </form>
            <p class="submit"><a href="../index.php">会員登録をする</a></p>
        </div>
    </div>
</body>