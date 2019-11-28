<?php
echo "Van welk getal wil je de faculteit weten?" . PHP_EOL;
$a = readline();
$i = 1;
$b = 1;
while ($i != $a) {
    $b = $b * ($i + 1);
    $i++;
    }
    echo $b;

