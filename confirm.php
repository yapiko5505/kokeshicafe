<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>kokeshicafe 確認画面</title>
    </head>
    <body>
        <?php if($page_flag === 1): ?>
            <div class="form">
                <h1>お問い合わせ内容</h1>
                <p>以下の内容でよろしければ「送信する」をクリックしてください。<br>
                内容を変更する場合は「戻る」をクリックして入力画面にお戻りください。</p>
                <form method="post" action="submit.php">
                    <div class="forms">
                        <label for="name">お名前</label>
                        <p><?php echo $_POST['name']; ?></p>
                    </div>
                    <div class="forms">
                        <label for="email">メールアドレス</label>
                        <p><?php echo $_POST['email']; ?></p>
                    </div>
                    <div class="forms">
                        <label for="title">件名</label>
                        <p><?php echo $_POST['title']; ?></p>
                    </div>
                    <div class="forms">
                        <label for="content">お問い合わせ内容</label>
                        <p><?php echo $_POST['content']; ?></p>
                    </div>
                    <input type="submit" name="btn_back" value="戻る">
                    <input type="submit" name="btn_submit" value="送信する">
                </form>
            </div>