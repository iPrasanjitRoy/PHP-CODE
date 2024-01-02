<?php
class Car
{
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getCarInfo()
    {
        return "This is a {$this->year} {$this->make} {$this->model}.";
    }
}

$myCar = new Car("Toyota", "Camry", 2022);
$carInfo = $myCar->getCarInfo();
echo $carInfo;
?>