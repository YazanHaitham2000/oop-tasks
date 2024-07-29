<?php

class Car {
    private $make;
    private $model;
    private $year;

    public function setMake($make) {
        $this->make = $make;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getMake() {
        return $this->make;
    }

    public function getModel() {
        return $this->model;
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

$car1 = new Car();
$car1->setMake("Toyota");
$car1->setModel("Corolla");
$car1->setYear(2020);

$car2 = new Car();
$car2->setMake("Honda");
$car2->setModel("Civic");
$car2->setYear(2019);


$car1->printDetails();
echo "\n";
$car2->printDetails();

?>
