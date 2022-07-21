<?php

echo '$aの値を入力して下さい: ';
$a = trim(fgets(STDIN));

echo '$bの値を入力して下さい: ';
$b = trim(fgets(STDIN));

if ($a>$b) {echo $a;};
if ($a<$b) {echo $b;};
if ($a==$b) {echo 'entered values are equil.';};
