<?php
$customerlist = [
    "1" => ["ten" => "Mai Van Hoan",
        "ngay sinh" => "1990 -04-17",
        "dia chi" => "ha noi",
        "anh" => ""
    ],
    "2" => ["ten" => "Nguyen Van Nam",
        "ngay sinh" => "1990 -06-27",
        "dia chi" => "ha nam",
        "anh" => ""
    ],
    "3" => ["ten" => "Giang Thi Phao",
        "ngay sinh" => "1990 -01-7",
        "dia chi" => "son la",
        "anh" => ""
    ],
    "4" => ["ten" => "Lo A Sam",
        "ngay sinh" => "1990 -11-21",
        "dia chi" => "DIEN BIEN",
        "anh" => ""
    ],
    "2" => ["ten" => "Vo Thi Sau",
        "ngay sinh" => "1990 -05-14",
        "dia chi" => "Nam Dinh",
        "anh" => ""
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TITLE</title>
</head>
<style>
    table tr th {
        width: 200px;
        border: 1px solid black;
    }

    td {
        border: 1px solid black;
    }
</style>
<body>
<h1>DANH SACH KHACH HANG</h1>
<table>
    <tr>
        <th>STT</th>
        <th>ten</th>
        <th>ngay sinh</th>
        <th>dia chi</th>
        <th>anh</th>
    </tr>
    <?php
    foreach ($customerlist as $key=>$value) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>".$value["ten"]."</td>";
        echo "<td>".$value["ngay sinh"]."</td>";
        echo "<td>".$value["dia chi"]."</td>";
        echo "<td><img src='".$value['anh']."'</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
