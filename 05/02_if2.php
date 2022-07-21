<?php

$poket_money = 1000;
$fund_raising = 101;

echo 'you have 1000yen.' . PHP_EOL;

do {
    $poket_money = $poket_money - $fund_raising;
    echo "you donated 101 yen." . PHP_EOL;
    echo "you have $poket_money." . PHP_EOL;
} while ($poket_money>= $fund_raising);
