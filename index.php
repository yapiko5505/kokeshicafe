<?php
session_start();
if(isset($_SESSION["errors"])) {
    $errors = $_SESSION["errors"];
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>kokeshicafe</title>
        <link rel="stylesheet" href="css/bootstrap-reboot.css">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="images/ico" href="images/favicon .ico"
        <!-- css -->
    </head>
    <body>
        <header>
            <!-- ナビゲーション -->
            <nav class="header-nav">
                <ul>
                    <li><a href="#cafe">カフェ紹介&ensp;</a></li>
                    <li><a href="#contact">お問い合わせ&ensp;</a></li>
                    <li><a href="#location">場所案内&ensp;</a></li>
                </ul>
            </nav>
            <h1>kokeshicafe</h1>
        </header>
        <main>
            <!-- カフェ紹介 -->
            <p id="cafe"></p>
            <section id="cafes" class="container">
                <h2>カフェ紹介</h2>
                <div class="cafes-grid">
                    <div class="cafe-contents">
                        <img src="images/kokeshi23.JPG" alt="こけし">
                        <h3>こけし</h3>
                        <p>様々なこけしが並んでおります。</p>
                    </div>

                    <div class="cafe-contents">
                        <img src="images/rate.jpg" alt="ドリンク">
                        <h3>ドリンク</h3>
                        <p>コーヒーや抹茶ラテが自慢です。</p>
                    </div>

                    <div class="cafe-contents">
                        <img src="images/cake3.jpg" alt="ケーキ">
                        <h3>焼き菓子</h3>
                        <p>タルトやクッキーの焼き菓子とともにお過ごしください。</p>
                    </div>
                </div>

            </section>

            <!-- お問い合わせ -->
            <p id="contact"></p>
            <section id="contact-contents" class="container">
                <h2>お問い合わせ</h2>
                <!-- お問い合わせフォーム -->
                <?php if(isset($errors)) : ?>
                    <?php foreach($errors as $value): ?>
                        <?php echo $value; ?><br />
                    <?php endforeach; ?>
                <?php endif; ?>
                <form method="post" action="confirm.php">
                    <div class="forms">
                        <label for="name">お名前</label>
                        <input type="text" id="your-name" name="name" value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?>">
                    </div>
                    <div class="forms">
                        <label for="email">メールアドレス</label>
                        <input type="email" id="your-email" name="email" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];} ?>">
                    </div>
                    <div class="forms">
                        <label for="title">件名</label>
                        <input type="text" id="your-title" name="title" value="<?php if(isset($_SESSION['title'])){echo $_SESSION['title'];} ?>">
                    </div>
                    <div class="forms">
                        <label for="content">お問い合わせ内容</label>
                        <textarea id="your-content" name="content"><?php if(isset($_SESSION['content'])){echo($_SESSION['content']);} ?></textarea>
                    </div>
                    <input type="submit" class="button" value="送信">
                </form>
                <?php session_destroy(); ?>
            </section>

            <!-- 場所案内 -->
            <p id="location"></p>
            <section id="location-contents" class="container">
                <div class="location-info">
                    <h2>場所案内</h2>
                    <h3>住所:</h3>
                    <p>〒981-3134<br>仙台市泉区桂２－１－１　桂パークハウス西街区弐番館</p>
                    <h3>電話番号:</h3>
                    <p>022-221-2121</p>
                    <h3>メールアドレス:</h3>
                    <p>kokeshicafe@yahoo.co.jp</p>
                </div>
                <div class="location-map">
                    <h3>地図:</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3129.609608226624!2d140.85636911526805!3d38.33487027966132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f89810ff02c2b7b%3A0xa1efe71cba7d2d1!2z44CSOTgxLTMxMzQg5a6u5Z-O55yM5LuZ5Y-w5biC5rOJ5Yy65qGC77yS5LiB55uu77yR4oiS77yR!5e0!3m2!1sja!2sjp!4v1667813362354!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
        </main>
        <!-- フッター -->
        <footer>
            2022kokeshicafe
        </footer>
    </body>
</html>