<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $score = $_GET['score'];

    if($score>100){
        $result="Are you crazy? The max score is 100";
    } elseif ($score >= 60) {
        $result = 'passed!';
    } else {
        $result = 'failed!';
    }
    
    ?>

    <h1><?= $result; ?></h1>

    <div>
        <a href="03_form2.php">back</a>
    </div>

    
</body>
</html>
