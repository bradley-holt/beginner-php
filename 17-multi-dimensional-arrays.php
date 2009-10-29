<?php

$foo = array (
    0   => array(
        'A'   => 'X',
        'B'   => 'Y',
        'C'   => 'Z',
    ),
    1   => array(
        'D'   => 'U',
        'E'   => 'V',
        'F'   => 'W',
    ),
    2   => array(
        'G'   => 'R',
        'H'   => 'S',
        'I'   => 'T',
    ),
);

echo '<p>';
// escape output
echo htmlspecialchars($foo[0]['A']);
echo '</p>';

?>