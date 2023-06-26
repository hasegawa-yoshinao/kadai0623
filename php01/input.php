<html>

<head>
    <meta charset="utf-8">
    <title>input</title>
</head>

<body>
    <form action="write.php" method="post">
        氏名: <input type="text" name="name">
        住所: <input type="text" name="address">
        カテゴリー： <select name="category"> <br>
                    <option>選択してください</option>
                    <option>本</option>
                    <option>日用品</option>
                    <option>家具</option>
                    <option>トレーニング</option>
                    <option>服</option>
                    <option>食べ物</option>
                    <option>飲み物</option>
                </select>
        <input type="submit" value="送信">
    </form>
</body>

</html>
