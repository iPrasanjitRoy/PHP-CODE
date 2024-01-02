<?php

class ParentClass
{
    public function sayHello()
    {
        echo "Hello from ParentClass!";
    }
}

class ChildClass extends ParentClass
{
    public function sayHello()
    {
        echo "Hello from ChildClass!";
    }
}


$childObj = new ChildClass();

// Call The Overridden Method 
$childObj->sayHello(); // Output: Hello from ChildClass! 


$parentObj = new ParentClass();

// Call The Method From The Parent Class 
$parentObj->sayHello(); // Output: Hello from ParentClass!
?>