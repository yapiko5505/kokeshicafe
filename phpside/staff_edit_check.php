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
            $staff_code=$post['code'];
            $staff_name=$post['name'];
            $staff_pass=$post['password'];
            $staff_pass2=$post['password2'];

            if($staff_name==''){
                echo 'スタッフ名が入力されていません。';
            } else {
                echo 'スタッフ名';
                echo $staff_name;
                echo '<br>';
            }

            if($staff_pass=='') {
                echo 'パスワードが入力されていません。<br>';
            }

            if($staff_pass!=$staff_pass2) {
                echo 'パスワードが一致しません。<br>';
            }

            if($staff_name=='' || $staff_pass=='' || $staff_pass!=$staff_pass2) {
                echo '<form>';
                echo '<input type="button" onClick="history.back()" value="戻る">';
                echo '</form>';
            } else {
                $staff_pass=md5($staff_pass);
                echo '<form method="post" action="staff_edit_done.php">';
                echo '<input type="hidden" name="code" value="'.$staff_code.'">';
                echo '<input type="hidden" name="name" value="'.$staff_name.'">';
                echo '<input type="hidden" name="password" value="'.$staff_pass.'">';
                echo '<br>';
                echo '<input type="button" onClick="history.back()" value="戻る">';
                echo '<input type="submit" value="OK">';
                echo '</form>';

            }

        ?>



        
        
        
        
        
        
        
        
        
        
    </body>
</html>