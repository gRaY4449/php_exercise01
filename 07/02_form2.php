<?php

$score = '';
$err_msg = '';
$result = '';

$result = 'Please enter your score';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = $_POST['score'];
    $result = 'please enter your score';

    if (empty($score)) {
        $err_msg = '※scores are not entered※';
    } elseif ($score >= 60) {
        $result = 'passed!';
    } else {
        $result = 'failed!';
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
    <h1><?= $result; ?></h1>
    <?php if ($err_msg) : ?>
        <ul>
            <li><?php echo $err_msg; ?></li>
        </ul>
    <?php endif; ?>
    <form action="" method="post">
        <input type="number" name="score">
        <input type="submit" value="送信">
    </form>
</body>

</html>
