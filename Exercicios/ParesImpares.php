<?php

$numero = 20;

for ($i = 0; $i <= $numero; $i++) {
    $calculo = $i % 2;
    if ($calculo == 0) {
        echo "O número $i é par" . PHP_EOL;
    } else if ($calculo != 0) {
        echo "O número $i é impar" . PHP_EOL;
    }
}