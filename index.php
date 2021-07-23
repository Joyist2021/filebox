<?php

function endl($n)
{
    for ($i = 0; $i < $n; $i++) {
        echo "<br/>";
    }
}

echo ("hello" . "world");
endl(1);
$a1 = preg_replace("/ f\t/", "", "fu f\tck");
echo $a1;

endl(2);
$a2 = array(1, 2, 3);

foreach ($a2 as $key => &$value) {
    echo ($key . ": " . $value . "<br/>");
}

endl(1);
echo array_pop($a2);
echo ("<pre>");
print_r($a2);
echo ("<pre/>");
