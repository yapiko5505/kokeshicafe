<?php
    require_once('vendor/autoload.php');
    Valitron\Validator::lang('ja');
    session_start();
    // Valitronクラスを実行
    $v = new Valitron\Validator($_POST);
    // 入力必須の項目が記入されているか確認
    // 入力項目のうち備考のみ任意項目にしてみる
    $v->rule('required', 'name')->message('{field}を入力してください。');
    $v->rule('required', 'email')->message('{field}を入力してください。');
    $v->rule('required', 'title')->message('{field}を入力してください。');
    $v->rule('required', 'content')->message('{field}を入力してください。');
    // 入力された文字がメール形式かを確認
    $v->rule('email', 'email')->message('{field}が正しい形式ではありません。');
    // 項目名を指定
    $v->labels([
        'name' => '名前',
        'email' => 'メールアドレス',
        'title' => '件名',
        'content' => '内容'
    ]);
    $_SESSION['name'] = htmlspecialchars($_POST['name']);
    $_SESSION['email'] = htmlspecialchars($_POST['email']);
    $_SESSION['title'] = htmlspecialchars($_POST['title']);
    $_SESSION['content'] = htmlspecialchars($_POST['content']);
    // バリデーションを実行
    if($v->validate()) {
        // 値の受け取り
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $title = $_SESSION['title'];
        $content = $_SESSION['content'];
    } else {
        $errors = [];
        foreach ($v->errors() as $error) {
            foreach ($error as $value) {
                $errors[] = $value;
            }
        }
        $_SESSION['errors'] = $errors;
        header("location.index.html");
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>kokeshicafe 確認画面</title>
    </head>
    <body>
            <div class="form">
                <h1>お問い合わせ内容</h1>
                <p>以下の内容でよろしければ「送信する」をクリックしてください。<br>
                内容を変更する場合は「戻る」をクリックして入力画面にお戻りください。</p>
                <form method="post" action="submit.php">
                    <div class="forms">
                        <label for="name">お名前</label>
                        <p><?php echo $name; ?></p>
                    </div>
                    <div class="forms">
                        <label for="email">メールアドレス</label>
                        <p><?php echo $email; ?></p>
                    </div>
                    <div class="forms">
                        <label for="title">件名</label>
                        <p><?php echo $title; ?></p>
                    </div>
                    <div class="forms">
                        <label for="content">お問い合わせ内容</label>
                        <p><?php echo $content; ?></p>
                    </div>
                </form>
                <form action="index.html" method="get">
                    <button>戻る</button>
                </form>
                <form action="submit.html" method="post">
                    <button type="submit" class="btn btn-success">送信する</button>
                </form>
            </div>
    </body>  
</html>  