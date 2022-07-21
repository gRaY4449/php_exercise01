<?php

echo 'please enter your blood-type: ';
$blood_type = trim(fgets(STDIN));

switch ($blood_type) {
    case 'A':
        echo 'people who have blood type A are said to be thorough but kind.';
        break;
    case 'B':
        echo 'people who have blood type B are said to be curious.';
        break;
    case 'AB':
        echo 'people who have blood type AB are said to be proactive genius.';
        break;
    case 'O':
        echo 'people who have blood type O are said to be easy-going.';
        break;
    default:
        echo 'unknown!';
        break;
}
