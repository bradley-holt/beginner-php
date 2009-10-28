<?php

$x = 'A';

function foo()
{
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