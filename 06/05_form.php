<?php

$num1 = '';
$num2 = '';
$num3 = '';
$total='';
$answer='';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if (empty(is_numeric($num1)) || empty(is_numeric($num2)) || empty(is_numeric($num3))) {
        $err_msg = 'please enter all numbers';
    }else {
        $total = $num1+$num2+$num3;
        $answer="total value is $total";
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
    <h1>please enter numbers</h1>
    <form action="" method="POST">
        <?php if ($err_msg) : ?>
            <ul>
                <li><?php echo $err_msg; ?></li>
            </ul>
        <?php endif; ?>
        <div>
            <label for="">first number</label><br>
            <input type="text" name="num1" id=""><br>
            <label for="">second number</label><br>
            <input type="number" name="num2" id=""><br>
            <label for="">third number</label><br>
            <input type="number" name="num3" id="">
        </div>
        <div>
            <input type="submit" value="send">
        </div>
    </form>
    <div>
        <?php echo $answer; ?>
    </div>
</body>

</html>
