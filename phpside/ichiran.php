<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>kokeshicafe</title>
    </head>
    <body>
        <?php
            $dsn='mysql:dbname=kokeshicafe;host=localhost';
            $user='root';
            $password='';
            $dbh=new PDO($dsn, $user, $password);

            $sql='SELECT * FROM forms WHERE 1';
            $stmt=$dbh->prepare($sql);
            $stmt->execute();

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
    </body>
</html>

        