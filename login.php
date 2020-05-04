
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

if(!empty($_POST['acc'])){
    echo "有送出資料" ;
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    // $sql="select * from student where `acc`='$acc' && `pw`='$pw'";
    // $user=$pdo->query($sql)->fetch();
    $sql="select count(*) from student where `acc`='$acc' && `pw`='$pw'";
    $user=$pdo->query($sql)->fetchColumn();
// 已在12行語法檢查帳號密回傳給$user 
//    echo $sql;
//     if($acc==$user['acc'] && $pw==$user[['pw']]){
//             echo "登入成功";
//     }else{
//             echo "登入失敗";
//     }

    if($user>0){
        echo "登入成功";
    }else{
        echo "登入失敗";
    }

    // if(!empty($user)){
    //     echo "登入成功";
    // }else{
    //     echo "登入失敗";
    // }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <style>

    table{
        widht:300px;
        margin:20px auto;
        border:1px solid #999;
        box-shadow:1px 1px 5px #ccc;
        border-collapse:collapse;
    }
    td{
        padding:10px 5px ;
        border:1px solid #ccc;
        font-size:18px;
    }
    td input{
        font-size:18px;
        padding:5px;
    }


    </style>
</head>
<body>

<form action="login.php" method="post">
<table> 
    <tr>
        <td>帳號</td>
        <td><input type="text" name="acc" id=""></td>
    </tr>
    <tr>
        <td>密碼</td>
        <td><input type="text" name="pw" id=""></td>
    </tr>
    <tr>
    <td>
    <input type="submit" value="登入">
    <input type="reset" value="忘記密碼">
    </td>
    </tr>

</table>   
</form>
</body>
</html>