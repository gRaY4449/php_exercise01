<?php

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス'
];

echo '私は' . PHP_EOL;
foreach ($foods as $dish => $food){
    echo "${dish}に${food}". PHP_EOL;
}
echo 'を食べる';

