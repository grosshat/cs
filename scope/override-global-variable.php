<?php

// Example of overriding global variable inside a function setting it as global 
// and assigning to it a new value that updates the one from outside.

$counter = 1;

function test_global() {
    global $counter;
    $counter = 10;
    var_dump($counter);
}

test_global();
var_dump($counter);


?>
