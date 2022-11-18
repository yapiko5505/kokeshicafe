<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>kokeshicafe</title>
    </head>
    <body>
        <?php

            $staff_code=$_GET['code'];

            $dsn='mysql:dbname=kokeshicafe;host=localhost;charset=utf8';
            $user='root';
            $password='';

            try
            {
                $dbh=new PDO($dsn, $user, $password);
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql='SELECT code, name FROM staffs WHERE code=?';
                $stmt=$dbh->prepare($sql);
                $data[]=$staff_code;
                $stmt->execute($data);

                $rec=$stmt->fetch(PDO::FETCH_ASSOC);
                $staff_name=$rec['name'];

                $dbh=null;
            }
            catch(Exception $e)
            {
                echo 'ただいま障害により大変ご迷惑をおかけしております。';
                echo $e;
                exit();
            }

            ?>

            <p>スタッフ削除<br></p>
            スタッフ名<br>
            <?php echo $staff_name; ?><br>
            このスタッフは削除してもよろしいですか。<br><br>
            <form method="post" action="staff_delete_done.php">
                <input type="hidden" name="code" value="<?php echo $staff_code; ?>">
                <input type="button" onclick="history.back()" value="戻る">
                <input type="submit" value="OK">
        </form>
    <body>
</html>