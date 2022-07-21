<?php

echo 'please enter $num: ';
$num = trim(fgets(STDIN));

if ($num==1) {
    echo 'not pn';
}

for ($i=2; $i <= $num ; $i++) { 
    if ($i<$num and $num%$i == 0) {
       echo 'not pn';
       break;
    }elseif($i==$num){
       echo 'pn';
    }
}
