<?php

class Car {
    private $make;
    private $model;
    private $year;

    public function setMake($make) {
        $this->make = $make;
    }

    public function getMake() {
        return $this->make;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getYear() {
        return $this->year;
    }

    public function printDetails() {
        echo "Car Make: " . $this->getMake() . "\n";
        echo "Car Model: " . $this->getModel() . "\n";
        echo "Car Year: " . $this->getYear() . "\n";
    }
}

$car = new Car();

$car->setMake("Toyota");
$car->setModel("Corolla");
$car->setYear(2020);


echo $car->getMake() . "\n"; 
echo $car->getModel() . "\n"; 
echo $car->getYear() . "\n"; 


$car->printDetails();

?>
