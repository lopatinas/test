<?php

function sum (string $x, string $y): string
{
    $result = '';
    $diffLength = strlen($x) - strlen($y);
    $x = str_split(strrev($x));
    $y = str_split(strrev($y));

    if ($diffLength > 0) {
        for ($i = 0; $i < $diffLength; $i++) {
            $y[] = '0';
        }
    } elseif ($diffLength < 0) {
        for ($i = 0; $i < -$diffLength; $i++) {
            $x[] = '0';
        }
    }

    $adder = 0;

    foreach ($x as $position => $value) {
        $sum = $value + $y[$position] + $adder;

        $adder = (int) ($sum > 9);

        if ($sum > 9) {
            $sum -= 10;
        }

        $result = $sum . $result;
    }

    return $result;
}
