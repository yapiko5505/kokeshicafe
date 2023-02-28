<?php
    session_start();
    session_regenerate_id(true);
    if(isset($_SESSION['login'])==false)
    {
        echo 'ログインされていません。';
        echo '<a href="../phplogin/staff_login.html">ログイン画面へ</a>';
        exit();
    }
    else
    {
        echo $_SESSION['name'];
        echo 'さんログイン中<br>';
        echo '<br>';
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>kokeshicafe</title>
    </head>
    <body>
        <?php
            $code=$_POST['code'];

            $dsn='mysql:dbname=LAA1503403-kokeshicafe;host=mysql211.phy.lolipop.lan';
            $user='LAA1503403';
            $password='donuts25';
            $dbh=new PDO($dsn, $user, $password);

            $sql='SELECT * FROM forms WHERE code=?';
            $stmt=$dbh->prepare($sql);
            $data[]=$code;
            $stmt->execute($data);

            while(1)
            {
                $rec=$stmt->fetch(PDO::FETCH_ASSOC);
                if($rec==false)
                {
                    break;
                }

                echo $rec['code'];
                echo $rec['name'];
                echo $rec['title'];
                echo $rec['content'];
                echo'<br>';
            }

            $dbh = null;

        ?>
        <br><a href="../phplogin/staff_top.php">スタッフ管理に戻る</a>
    </body>
</html>