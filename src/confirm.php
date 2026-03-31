<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>入力内容確認</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>入力内容確認</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   $name = $_POST['name'] ?? '';
   $age = $_POST['age'] ?? '';
   $tel = $_POST['tel'] ?? '';
   $email = $_POST['email'] ?? '';
   $address = $_POST['address'] ?? '';
   $question = $_POST['question'] ?? '';
   $gender = $_POST['gender'] ?? '';

   $errors = [];

    // 名前チェック
   if (!preg_match('/^[ぁ-んァ-ン一-龥a-zA-Z]+$/u', $name)) {
      $errors[] = "名前の形式が正しくありません";
   }

    // 年齢チェック
   if ($age == "") {
      $errors[] = "年齢を入力してください";
   } else{
      if ($age < 0 || $age > 150) {
         $errors[] = "年齢は0~150で入力してください";   
      }
   }

    // 電話番号チェック
   if (!preg_match('/^[0-9\-]+$/', $tel)) {
      $errors[] = "電話番号は数字とハイフンのみ";
   }

    // メールチェック
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "メールアドレスが不正です";
   }

    // 住所チェック
   if (!preg_match('/^[ぁ-んァ-ン一-龥a-zA-Z0-9]+$/u', $address)) {
      $errors[] = "住所の形式が正しくありません";
   }

    // ▼ エラーがあるかどうかで分岐
   if (!empty($errors)) {
      echo "<h2>エラーがあります</h2>";
      echo "<ul>";
      foreach ($errors as $e) {
            echo "<li>$e</li>";
      }
      echo "</ul>";
   } else {
?>

      <!-- ここからHTML -->
      <p>名前: <?= htmlspecialchars($name) ?></p>
      <p>年齢: <?= htmlspecialchars($age) ?></p>
      <p>電話番号: <?= htmlspecialchars($tel) ?></p>
      <p>メールアドレス: <?= htmlspecialchars($email) ?></p>
      <p>住所: <?= htmlspecialchars($address) ?></p>
      <p>質問: <?= nl2br(htmlspecialchars($question)) ?></p>
      <p>性別: <?= htmlspecialchars($gender) ?></p>

<?php
   }

} else {
   echo "<p>データが送信されていません</p>";
}
?>

</body>
</html>