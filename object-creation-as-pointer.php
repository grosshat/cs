<?php

// Example of a class + object creation, passing object as pointer and hence 
// only creating one instance. On PHP 4 such exercice would return two 
// instances, since the object was passed by-value and then copied.

class Person {

    var $name;

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

}

function changeName($person, $name)
{
    $person->setName($name);
}

$person = new Person("Mike");
changeName($person, "Shullivan");
var_dump($person);

?>
