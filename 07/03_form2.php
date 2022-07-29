<?php

$score = '';
$err_msg = '';
$result = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = $_POST['score'];

    if (empty($score)) {
        $err_msg = '※scores are not entered※';
    } else{
        header("Location:03_judge_ment.php?score=$score");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embedding</title>
</head>

<body>
    <h1>Please enter your score.</h1>
    <form action="" method="post">
        <?php if ($err_msg):?>
            <ul>
                <li><?php echo $err_msg ?></li>
            </ul>
        <?php endif; ?>
        <input type="number" name="score">
        <input type="submit" value="送信">
    </form>
</body>

</html>
