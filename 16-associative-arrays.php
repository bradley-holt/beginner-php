<?php

$foo = array (
    'A'   => 'X',
    'B'   => 'Y',
    'C'   => 'Z',
);

echo '<p>';
// escape output
echo htmlspecialchars($foo['A']);
echo '</p>';

$bar['A'] = 'X';
$bar['B'] = 'Y';
$bar['C'] = 'Z';

echo '<p>';
// escape output
echo htmlspecialchars($bar['B']);
echo '</p>';

?>