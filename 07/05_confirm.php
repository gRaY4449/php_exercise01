<?php 

$prices = [
    'bag' => 1500,
    'shoes' => 3000,
    'clock' => 6000,
    'neckless' => 9000,
    'pias' => 10000
];

$result='';
$product=$_GET['purchase_item'];

foreach ($prices as $item => $price) {
    if ($product === $item) {
        $result="That'll be $price yen.";
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
    <h2>Thank you for shopping</h2>
        <h2><?= $result; ?><br></h2>
    <a href="05_form2.php">back</a>
</body>

</html>
