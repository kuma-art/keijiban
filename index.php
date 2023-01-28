<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="4eachblog_logo.jpg">
        </diV> 
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>

    <main>
        <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                <div class="graybox">   
                    <div class="form">
                    <h2>入力フォーム</h2>
                    <form method="post" action="insert.php">
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="35" name="handlename">
                    </div>

                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="35" name="title">
                    </div>

                    <div> 
                        <label>コメント</label>
                        <br>
                        <input type="text" class="text_come" name="comments" >
                    </div>
                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                    </form>
                    </div>
                </div>    
            <?php
                mb_internal_encoding("utf8");
                $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
                $stmt = $pdo->query("select * from 4each_keijiban");

                 while ($row = $stmt->fetch()) {
                echo "<div class='kiji'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div class='contents'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";  
                }
            ?>
        </div>
        <div class="right">
                <h3>人気の記事</h3>
            <ul>
                <li>phpおススメの本</li>
                <li>phpmyadminの使い方</li>
                <li>人気のエディタ　top5</li>
                <li>HTMLに基礎</li>
            </ul>
                <h3>オススメリンク</h3>
            <ul>
                <li>インターノウス株式</li>
                <li>xamppのダウンロード</li>
                <li>eclipsのダウンロード</li>
                <li>braketsのダウンロード</li>
            </ul>
                <h3>カテゴリ</h3>
            <ul>
                <li>HTML</li>
                <li>php</li>
                <li>mysql</li>
                <li>javascript</li>
            </ul>
        </div>
    </main>
    <footer>
        copyright @ internous | 4each blog is the one whic provides A to Z about programing.
    </footer>
</body>
</html>