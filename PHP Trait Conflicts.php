<?php
trait Trait1
{
    public function someMethod()
    {
        echo "Trait1 Method";
    }
} 

trait Trait2
{
    public function someMethod()
    {
        echo "Trait2 Method";
    }
}

class MyClass
{
    use Trait1, Trait2 {
        Trait1::someMethod insteadof Trait2; // Resolve Conflict By Using Trait1's Method 
        Trait2::someMethod as aliasMethod; // // Alias Trait2's Method As Alias Method

    }
}

$obj = new MyClass();
$obj->someMethod(); // Calls Trait1's Method
$obj->aliasMethod(); // Calls Trait2's Method Via The Alias

?>