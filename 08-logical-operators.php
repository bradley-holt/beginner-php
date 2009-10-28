<?php

$isAwesome = true;
$isFoo = false;

// NOT
if (!$isAwesome) {
    echo 'This will not echo.';
}

// AND
if ($isAwesome && $isFoo) {
    echo 'This will not echo.';
}

// OR
if ($isAwesome || $isFoo) {
    echo 'This will echo.';
}

?>