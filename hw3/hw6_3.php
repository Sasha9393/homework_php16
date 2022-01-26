<?php
$lines = file('number.txt');
foreach($lines as $v) {
    $numbers = explode(';', $v);
    $summ = array_sum(explode(' ', $numbers[0]));
    $numbers = explode(';', $numbers[1]);
    $rest = $summ % $numbers[0];
    $v=explode(PHP_EOL,$v);
    echo ($rest==0) ? "$v[0] TRUE \n" : "$rest FALSE \n";
}