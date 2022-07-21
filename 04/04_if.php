<?php

echo 'please enter $score_math: ';
$score_math = trim(fgets(STDIN));

echo 'please $enter score_english: ';
$score_english = trim(fgets(STDIN));

if ($score_math>=60 && $score_english>=60) {
    echo 'passed';
}elseif ($score_math<60 or $score_english<60) {
    echo 'Retest';
}else {
    echo 'failed';
}
