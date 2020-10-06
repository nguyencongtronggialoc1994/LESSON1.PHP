<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<body>
<form method="post">
    <h1>SIMPLE CALCULATOR</h1>
    <fieldset>
        First operand:<input type="text" name="firstnumber"><br>
        Operator:<select name="pheptinh">
            <option>cong</option>
            <option>tru</option>
            <option>nhan</option>
            <option>chia</option>
        </select>
        <br>
        Second operand:<input type="text" name="secondnumber"><br>
        <button type="submit" name="resulf">calculate</button>
    </fieldset>
</form>
<?php
if ($_SERVER['REQUEST_METHOD']== "POST"){
    $x = $_POST["firstnumber"];
    $y = $_POST["secondnumber"];
    $a = $_POST["pheptinh"];
    function addition($m,$n){
            return $m+$n;
    }
    function subtraction($c,$d){

            return $c-$d;
    }
    function multiplication($e,$f){
            return $e*$f;
    }
    function division($g,$h){
            return $g/$h;
    }
if ($a=="cong"){
    echo addition($x,$y);
}
if ($a == "tru"){
    echo subtraction($x,$y);
}
if ($a == "nhan"){
    echo multiplication($x,$y);
}
if ($a == "chia"){
    echo division($x,$y);
}
}
?>
</body>
</html>