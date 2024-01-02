<?php
interface MyInterface
{
    public function method1();
    public function method2($param);
}

class MyClass implements MyInterface
{
    public function method1()
    {
        echo "Hello Interface";
    }

    public function method2($param)
    {
        echo $param;
    }
}
$someParam = "Hello, World";
$obj = new MyClass();
$obj->method1();
$obj->method2($someParam);

?>