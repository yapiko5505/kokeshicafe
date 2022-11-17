<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>kokeshicafe</title>
    </head>
    <body>
        <?php

            $staff_code=$_GET['staffcode'];

            $dsn='mysql:dbname=kokeshicafe;host=localhost;charset=utf8';
            $user='root';
            $password='';

            try
            {
                $dsh=new PDO($dsn, $user, $password);
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql='SELECT code, name FROM staffs WHERE code=?';
                $stmt=$dbh->prepare($sql);
                $data[]=$staff_code;
                $Stmt->execute($data);

                $rec=$stmt->fetch(PDO::FETCH_ASSOC);
                $staff_name=$rec['staff_name'];

                $dbh=null;
            }
            catch(Exception $e)
            {
                echo 'ただいま障害により大変ご迷惑をおかけしております。';
                echo $e;
                exit();
            }

            ?>

            <p>スタッフ修正<br></p>
            スタッフID<br>
            <?php echo $staff_code; ?><br><br>
            <form method="post" action="staff_edit_check.php">
                <input type="hidden" name="code" value="<?php echo $staff_code; ?>">
                <p>スタッフ名<br></p>
                <input type="text" name="name" style="width:200px" value="<?php echo $staff_name; ?>"><br>
                <p>パスワードを入力してください。</p>
                <input type="password" name="password" style="width:100px"><br>
                <p>パスワードをもう一度入力してください。</p>
                <input type="password" name="password2" style="width:100px"><br>
                <input type="button" onclick="history.back()" value="戻る">
                <input type="submit" value="OK">
        </form>
    <body>
</html>