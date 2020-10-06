<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<body>
<form method="post">
    <input type="text" name="tienbandau"><br>
    <input type="text" name="laisuat"><br>
    <input type="text" name="sonamgui"><br>
    <button type="submit">TINH</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $x = $_POST["tienbandau"];
    $y = $_POST["laisuat"];
    $z = $_POST["sonamgui"];

    for ($i = 0; $i < $z; $i++) {
        $x+=$x*$y;
    }
    echo 'so tien hien tai la: '.$x;
}
?>
</body>

</html>
