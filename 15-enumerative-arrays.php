<?php

$foo = array (
    0   => 'X',
    1   => 'Y',
    2   => 'Z',
);

echo '<p>';
// escape output
echo htmlspecialchars($foo[0]);
echo '</p>';

$bar[0] = 'X';
$bar[1] = 'Y';
$bar[2] = 'Z';

echo '<p>';
// escape output
echo htmlspecialchars($bar[1]);
echo '</p>';

$baz[] = 'X';
$baz[] = 'Y';
$baz[] = 'Z';

echo '<p>';
// escape output
echo htmlspecialchars($baz[2]);
echo '</p>';

?>