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
echo '<p>';
echo $fooBar;
echo '</p>';

// equivalence comparison
if ($a == $b) {
    echo '<p>This will not echo.</p>';
}

// identity comparison
if ($a === '10') {
    echo '<p>This will not echo.</p>';
}

// not-equivalent
if ($a != $b) {
    echo '<p>This will echo.</p>';
}

// not-identical
if ($a !== '10') {
    echo '<p>This will echo.</p>';
}

?>