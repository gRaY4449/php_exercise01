<?php

// ここに配列を記述
$favorites=[
    'sport' => ["soccer","basketball","baseball"],
    'cooking' => ["french","swirts","chinese"],
    'exercise' => ["runnnig","chin-up","sit-up"],
];

echo <<<EOM
私の好きなスポーツは、{$favorites['sport'][0]}、{$favorites['sport'][2]}、{$favorites['sport'][1]}です｡
また、{$favorites['cooking'][1]}を作ることにもハマってまして、その他にも{$favorites['cooking'][2]}、{$favorites['cooking'][0]}も作ります。
最近は、運動にも取り組んでいて、{$favorites['exercise'][2]}、{$favorites['exercise'][1]}、{$favorites['exercise'][0]}をよくします。
EOM;
