<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>kokeshicafe 完了画面</title>
    </head>
    <body>
        <h1>お問い合わせ内容</h1>
        <?php if( $page_flag === 1): ?>
            <!-- ここに確認画面 -->
        <?php elseif( $page_flag === 2): ?>
        <p>送信が完了しました。</p>
        <?php else: ?>
            <!-- ここに入力画面 -->