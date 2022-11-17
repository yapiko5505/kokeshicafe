<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>kokeshicafe</title>
    </head>
    <body>
        <?php

            require_once('../kansu/common.php');

            $post=sanitize($_POST);
            $staff_code=$_POST['code'];
            $staff_name=$_POST['name'];
            $staff_pass=$_POST['password'];

            $dsn='mysql:dbname=kokeshicafe;host=localhost;charset=utf8';
            $user='root';
            $password='';

            try
            {
                $dbh=new PDO($dsn, $user, $password);
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql='UPDATE staffs SET name=?, password=? WHERE code=?';
                $stmt=$dbh->prepare($sql);
                $data[]=$staff_name;
                $data[]=$staff_pass;
                $data[]=$staff_code;
                $stmt->execute($data);

                $dbh=null;

            }
            catch(Exception $e)
            {
                echo 'ただいま障害により大変ご迷惑をおかけしております。';
                echo $e;
                exit();
            }

        ?>

        <p>修正しました。<p><br><br>
        <a href="staff_list.php">戻る</a>
    </body>
</html>