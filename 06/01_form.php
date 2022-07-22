<?php
// 変数を用意
$age = '';
$err_msg='';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['age'];
    if (empty($age)) {
        $err_msg='not entered!!';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>POSTmethod</h1>
    <form action="" method="POST">
        <div>
            <label for="">age</label><br>
            <input type="text" name="age">
            <?php if ($err_msg):?>
                <ul>
                    <li><?php echo $err_msg; ?></li>
                </ul>
            <?php endif; ?>
        </div>
        <div>
            <input type="submit" value="send">
        </div>
    </form>
    <div>
        <?php echo 'I am '. htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>
    </div>
</body>
</html>
