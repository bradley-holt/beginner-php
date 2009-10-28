<?php

$isAwesome = true;
$isFoo = false;

// NOT
if (!$isAwesome) {
    echo '<p>This will not echo.</p>';
}

// AND
if ($isAwesome && $isFoo) {
    echo '<p>This will not echo.</p>';
}

// OR
if ($isAwesome || $isFoo) {
    echo '<p>This will echo.</p>';
}

?>