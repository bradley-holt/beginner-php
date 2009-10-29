<?php

$foo = array (
    0   => 'X',
    1   => 'Y',
    2   => 'Z',
);

foreach ($foo as $key => $value) {
    echo '<p>Key: ';
    // escape output
    echo htmlspecialchars($key);
    echo '</p>';
    echo '<p>Value: ';
    // escape output
    echo htmlspecialchars($value);
    echo '</p>';
    echo '<p>---</p>';
}

?>