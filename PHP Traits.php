<?php
// Defining A Trait 
trait MyTrait
{
    public function traitMethod()
    {
        echo "Trait Method Called";
    }
}
// Using A Trait In A Class     
class MyClass
{
    use MyTrait;

    public function myMethod()
    {
        $this->traitMethod(); // Access The Trait Method
    }
}

$obj = new MyClass();

$obj->myMethod();

?>