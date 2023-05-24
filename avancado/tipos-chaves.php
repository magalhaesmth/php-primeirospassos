<?php

$array = [
    1 => 'A',
    '1' => 'B',
    1.5 => 'C',
    true => 'D'
];

foreach ($array as $item) {
    echo $item .PHP_EOL;
}