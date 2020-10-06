<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="post">
    username:<input type="text" name="username" placeholder="username" /><br>
    password:<input type="password" name="password" placeholder="password"/><br>
    <button type="submit" value="sign in">submid</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username=='congtrong' && $password =='anhtrong'){
        echo 'wellcome:  '.$username;
    }else{
        echo 'login error';
    }
}
?>

</body>
</html>