<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>kokeshicafe</title>
    </head>
    <body>
        <?php

            $staff_name=$_POST['name'];
            $staff_pass=$_POST['password'];

            $dsn='mysql:dbname=kokeshicafe;host=localhost;charset=utf8';
            $user='root';
            $password='';

            try
            {
                $dbh=new PDO($dsn, $user, $password);
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql='INSERT INTO staffs(name, password) VALUES(?, ?)';
                $stmt=$dbh->prepare($sql);
                $data[]=$staff_name;
                $data[]=$staff_pass;
                $stmt->execute($data);

                $dbh=null;

                echo htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');
                echo 'さんを追加しました。<br>';
            }
            catch(Exception $e)
            {
                echo 'ただいま障害により大変ご迷惑をおかけしております。';
                echo $e;
                exit();
            }

        ?>

        <a href="staff_list.php">戻る</a>
    </body>
</html>