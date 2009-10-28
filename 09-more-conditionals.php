<?php

$isFoo = false;
$isBar = true;

// if-then-else
if ($isFoo) {
    echo '<p>Is Foo</p>';
} elseif ($isBar) {
    echo '<p>Is Bar</p>';
} else {
    echo '<p>Something else</p>';
}

//switch
$a = 15;
switch ($a) {
    case 5:
        echo '<p>Five</p>';
        break;
    case 10:
        echo '<p>Ten</p>';
        break;
    case 15:
        echo '<p>Fifteen</p>';
        break;
    case 20:
        echo '<p>Twenty</p>';
        break;
    default:
        echo '<p>Something else</p>';
        break;
}

?>