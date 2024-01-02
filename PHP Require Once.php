<?php


require_once 'MyClass.php';
require_once 'MyFunctions.php';

use MyNamespace\MyClass;
use MyNamespace\MyFunction;

$obj = new MyClass();
$obj->sayHello();

$object = new MyFunction();
$object->Hello();
?>