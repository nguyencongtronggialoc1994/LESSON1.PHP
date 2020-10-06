<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<body>
<form method="post">
    <input type="number" name="number" placeholder="nhap so can doc"><br>
    <button type="submit">read</button>
</form>
<?php
$number = array(
    0 => "zero",
    1 => "one",
    2 => "two",
    3 => "three",
    4 => "four",
    5 => "five",
    6 => "six",
    7 => "seven",
    8 => "eight",
    9 => "nine"
);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $x = $_POST["number"];
//    foreach ($number as $key => $value) {
//        if ($x == $key) {
//            echo $value;
//        } else {
//            echo "so nay ko the doc";
//            break;
//        }
//    }
    for ($i = 0; $i < count($number); $i++){
        if ($x == $i){
            echo($number[$i]);
    }
}
?>
</body>
</html>