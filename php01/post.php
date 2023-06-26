<html>

<head>
    <meta charset="utf-8">
    <style>
        body {
            width : 600px;
        }

        .menu {
            background-color: #008000;;
        }
    </style>
    <title>POST</title>
</head>

<body>
    <div class="menu">
        <h2>購入したいエシカル商品</h2>
        <ul>
            <li>氏名・住所・商品カテゴリーを記入してください。</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>

    <form action="post_confirm.php" method="post">

       
    氏名: <input type="text" name="name"> <br>
    住所: <input type="text" name="address"> <br>
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
        <!-- パスワード欄を追加してみる。 -->
        <input type="submit" value="送信">
    </form>
</body>

</html>