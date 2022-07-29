<?php

$stylists = [
    'stylist' => 'Takashi',
    'highstylist' => 'Ken',
    'topstylist' => 'Kyoutaro'
];

$select_stylist = '';
$result='';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $select_stylist = $_POST['stylist'];
}
foreach ($stylists as $rank => $name) {
    if ($select_stylist == $rank) {
        $result="your hairdresser is $name.";
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embed</title>
</head>

<body>
    <h1>Choose the rank of hairdresser you request!</h1>
    <form action="" method="post">
        <select name="stylist">
            <option value="stylist">stylist</option>
            <option value="highstylist">highstylist</option>
            <option value="topstylist">topstylist</option>
        </select>
        <br>
        <input type="submit" value="send">
    </form>
    <p><?=$result ?></p>
</body>

</html>
