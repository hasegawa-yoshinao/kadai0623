<?php
$name = $_POST['name'];
$address = $_POST['address'];
$category = $_POST['category'];
?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    <p>氏名：<?= $name ?> </p> 
    <p>住所：<?= $address ?> </p> 
    <p>カテゴリー：<?= $category ?> </p> 

    <!-- パスワード： -->
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>