<?php

$name = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
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
    <form action="02_result.php" method="POST">
        <div>
            <label for="">name</label>
            <input type="text" name="name">
        </div>
        <div>
            <input type="button" value='send'>
        </div>

    </form>
</body>

</html>
