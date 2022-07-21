<?php

$subjects = ['Math', 'English', 'Science', 'Social studies', 'Japanese'];

foreach ($subjects as $subject) {
    switch ($subject) {
        case $subjects[0]:
            $day = 'tomorrow';
            break;
        case $subjects[1]:
            $day = 'the day after tomorrow';
            break;
        case $subjects[2]:
            $day = '3 days from today';
            break;
        case $subjects[3]:
            $day = 'yesterday';
            break;
        default:
            $day = 'canceled';
            break;
    }

    echo "$subject exam is $day". PHP_EOL;
}

