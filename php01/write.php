<?php

$name = $_POST['name'];
$address = $_POST['address'];
$category = $_POST['category'];

$data = $name . $address . $category . "¥";

file_put_contents('data/data.txt',$data, FILE_APPEND)


?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
