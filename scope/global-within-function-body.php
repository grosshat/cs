<?php

// Example of global variable called within function body. Only the first one 
// will be available within function body, since it is defined as global. The 
// second one will be treated as undefined.

$counter = 0;
$silence = 1;

function test_global() {
    global $counter;
    var_dump($counter);
    var_dump($silence);
}

test_global();


?>
