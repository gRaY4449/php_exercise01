<?php

$name = '';
$tel = '';
$email = '';
$err_msgs= [];
$product = '';
$infos=["Name",'PhoneNumber','E-mailAdless',];
$names=['name','tel','email',];
$products=['bag','shoes','clock','neckless','pias',];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $product = $_POST['product'];

    if (empty($name)) {
        $err_msgs[]= 'Please enter your name.';
    }
    if (empty($tel)) {
        $err_msgs[]= 'Please enter your phonenumber.';
    }
    if (empty($email)) {
        $err_msgs[]= 'Please enter your emailadress.';
    }
    if (empty($err_msgs)) {
        header("Location:05_confirm.php?purchase_item=$product");
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
    <title>Document</title>
</head>

<body>
    <h2>Please enter your private information</h2>
    <form action="" method="post">
        <?php if($err_msgs): ?>
            <ul>
                <?php foreach($err_msgs as $err_msg): ?>
                    <li><?= $err_msg ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <?php for($i=0; $i<=2; $i++): ?>
            <label for=""><?= $infos[$i]; ?></label><br>
            <input type="text" name=<?=$names[$i];?>><br>
        <?php endfor; ?>

        <h2>Please enter what you will purchase</h2>
        <select name="product" id="">
            <?php foreach($products as $product): ?>
                <option value=<?=$product?>><?=$product?></option>
            <?php endforeach; ?>
        </select>

        <br><br>
        <input type="submit" value="send">
    </form>
</body>

</html>
