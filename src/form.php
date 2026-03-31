<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div id="header">
            <h1>フォーム入力</h1>
        </div>

        <div id="main">
            <form action="confirm.php" method="post">

            <!-- 名前 -->
            <div class="font-group">
                <label>名前:</label>
                <input type="text" name="name">
            </div>

            <!-- 年齢 -->
            <div class="font-group">
                <label>年齢:</label>
                <input type="number" name="age">
            </div>

            <!-- 電話番号　-->
            <div class="font-group">
                <label>電話番号:</label>
                <input type="text" name="tel">
            </div>

            <!-- メールアドレス　-->
            <div class="font-group">
                <label>メールアドレス:</label>
                <input type="email" name="email">
            </div>

            <!-- 住所　-->
            <div class="font-group">
                <label>住所:</label>
                <input type="text" name="address">
            </div>

            <!-- 質問 -->
            <div class="font-group">
                <label>質問:</label>
                <textarea name="question"></textarea>
            </div>

            <!-- 性別 -->
            <div class="font-group">
                <label>性別:</label>
                <select name="gender" required>
                    <option value=""></option>
                    <option value="男性">男性</option>
                    <option value="女性">女性</option>
                </select>
            </div>

            <div class="submit-button">    
                <button type="submit" class="send-button">送信</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html> 
