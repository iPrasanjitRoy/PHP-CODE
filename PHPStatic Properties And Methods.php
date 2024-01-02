<?php
class MyClass
{
    public static $staticProperty = "I Am A Static Property";
    public function printStaticProperty()
    {
        echo self::$staticProperty; // Access Static Property Using Self
    }
}

// Access The Static Property Without Creating An Instance 
echo MyClass::$staticProperty;

// Access The Static Property Using An Instance 
$instance = new MyClass();
echo $instance::$staticProperty;

// Access The Static Property From A Method  
$instance->printStaticProperty();


class MathUtility
{
    public static function add($a, $b)
    {
        return $a + $b;
    }
}

// Call The Static Method Without Creating An Instance 
$result = MathUtility::add(5, 10);
echo "Result Of Addition: " . $result;

?>