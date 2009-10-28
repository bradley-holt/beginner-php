<?php

/**
 * Say Hello
 *
 * @return string
 */
function sayHello()
{
    // avoid sending output from a function, instead return a value
    return 'Hello';
}

echo '<p>';
// escape output to prevent cross-site scripting (XSS) 
echo htmlspecialchars(sayHello());
echo '</p>';

/**
 * Say Hello To
 *
 * @param string $person
 * @return string
 */
function sayHelloTo($person)
{
    return 'Hello, ' . $person;
}

echo '<p>';
// escape output
echo htmlspecialchars(sayHelloTo('Bradley'));
echo '</p>';

echo '<p>';
// escape output
echo htmlspecialchars(sayHelloTo('Jason'));
echo '</p>';

?>