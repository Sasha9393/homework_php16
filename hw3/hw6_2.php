<?php
$handle = fopen ("php://stdin","r");
$number = fgets($handle);

if ($number % 2 && $number > 0) {
    $i = 1;
    $star = 1;
    $spaces = ($number-1)/2;
    while ($i<=($number*2-1)) {
        if ($i % 2) {
            if ($i<$number && $i!=1) {
                $spaces = $spaces - 1;
                $star = $star + 2;
            } else if ($i==$number) {
                $spaces = 0;
                $star = $number;
            } else if ($i>$number){ 
                $spaces = $spaces + 1;
                $star = $star - 2;
            }
            echo str_repeat(" ", $spaces);
            echo str_repeat("*", $star)."\n";
        };
        $i++;
    }
};