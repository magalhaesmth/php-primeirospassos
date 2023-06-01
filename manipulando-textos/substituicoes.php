<?php

    $texto = "Texto com palavrão porra e caralho.";

    echo str_replace(
        ["porra", "caralho"],
        ["*****", "*******"],
        $texto)
        .PHP_EOL;
