<?php

class Vehicle {
    protected $type;

    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }

    public function move() {
        echo "The vehicle is moving\n";
    }
}

class Car extends Vehicle {
    public function move() {
        echo "The car is driving on the road\n";
    }
}

class Bike extends Vehicle {
    public function move() {
        echo "The bike is pedaling on the path\n";
    }
}

$car = new Car();
$car->setType("Car");

$bike = new Bike();
$bike->setType("Bike");

echo $car->getType() . ": ";
$car->move();

echo $bike->getType() . ": ";
$bike->move();

?>
