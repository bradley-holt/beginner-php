<?php

$isFoo = false;
$isBar = true;

// if-then-else
if ($isFoo) {
    echo 'Is Foo.';
} elseif ($isBar) {
    echo 'Is Bar.';
} else {
    echo 'Something else.';
}

//switch
$a = 15;
switch ($a) {
    case 5:
        echo 'Five';
        break;
    case 10:
        echo 'Ten';
        break;
    case 15:
        echo 'Fifteen';
        break;
    case 20:
        echo 'Twenty';
        break;
    default:
        echo 'Something else';
        break;
}

?>