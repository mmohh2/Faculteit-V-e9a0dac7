<?php
echo "Van welk getal wil je de faculteit weten?";
$a = readline("getal");
function faculteit($number) {
    $faculteit = 1;

    for ($x = $number ; $x >= 1 ; $x--) {
        $faculteit = $faculteit * $x;
    }

    return $faculteit;
}

echo faculteit(4);
echo faculteit(5);
?>