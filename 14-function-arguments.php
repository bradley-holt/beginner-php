<?php

/**
 * Add Values
 *
 * @param integer $x
 * @param integer $y
 * @param integer $z
 * @return integer
 */
function addValues($x, $y, $z = 0)
{
    return $x + $y + $z;
}

echo '<p>Add Values 10 and 5: ';
// escape output
echo htmlspecialchars(addValues(10, 5));
echo '</p>';

echo '<p>Add Values 10, 5 and 3: ';
// escape output
echo htmlspecialchars(addValues(10, 5, 3));
echo '</p>';

?>