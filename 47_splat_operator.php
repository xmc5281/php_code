<?php

function sum(...$numbers)
{
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4) . "\n</br>";

echo sum(...[1, 2, 3, 4, 5]) . "\n</br>";