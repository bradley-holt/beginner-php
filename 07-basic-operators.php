<?php

// assignment
$a = 10;

// arithmetic
$b = $a + 1;
$c = $a - 1;
$d = $a * 5;
$e = $a / 2;
$f = $a % 3;

// string concatenation
$fooBar = 'foo' . 'bar';

// equivalence comparison
if ($a == $b) {
    echo 'This will not echo.';
}

// identity comparison
if ($a === '10') {
    echo 'This will not echo.';
}

// not-equivalent
if ($a != $b) {
    echo 'This will echo.';
}

// not-identical
if ($a !== '10') {
    echo 'This will echo.';
}

?>