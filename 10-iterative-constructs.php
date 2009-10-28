<?php

// while loop
$x = 0;
while ($x < 5) {
    echo '<pre>';
    print_r($x);
    echo '</pre>';
    $x++;
}

// for loop
for ($x = 0; $x < 5; $x++) {
    echo '<pre>';
    print_r($x);
    echo '</pre>';
}

// foreach
$y = array (0, 1, 2, 3, 4);
foreach ($y as $z) {
    echo '<pre>';
    print_r($z);
    echo '</pre>';
}

?>