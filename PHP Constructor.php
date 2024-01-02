<?php
class Demo
{
    public $name;
    public $age;
    // PHP Constructor Is A Special Method That Is Called Automatically When An Object Is Created. 
    // Do Use Constructor Promotion As Much As Possible To Make The Code Shorter.  
    function __construct()
    {
        echo "Hello World" . "\n";
    }
    function set_name_age($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }

    function getname()
    {
        echo "YOUR Name - " . $this->name . "\n";
        echo "Your Age - " . $this->age . "\n";
    }

}
$Prasanjit = new Demo();
$Prasanjit->name = "PRASANJIT ROY";
$Prasanjit->age = 20;
$Prasanjit->getname();
?>
