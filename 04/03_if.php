<?php

echo 'enter $score: ';
$score = trim(fgets(STDIN));

if ($score>=60) {
    echo 'passed';
}elseif (30<=$score && $score<60) {
    echo 'one more exam';
}else {
    echo 'failed';
}
