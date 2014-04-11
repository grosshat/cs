<?php

// A `new` call allocates a new object with its own copies of properties, and 
// then the constructor of the object is called in case one was defined. Here 
// there is one defined just as a basic example with parameters.

class Person {
    private $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }
}

$mike = new Person("Mike");
var_dump($mike->getName());

?>
