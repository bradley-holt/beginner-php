<?php

$x = 'A';

function foo()
{
    // VERY BAD: DO NOT EVER DO THIS!!!
    global $x, $y;
    $x = 'B';
    $y = 'C';
}

foo();

echo '<p>x: ';
// escape output
echo htmlspecialchars($x);
echo '</p>';

echo '<p>y: ';
// escape output
echo htmlspecialchars($y);
echo '</p>';

?>