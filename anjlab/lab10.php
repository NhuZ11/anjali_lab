<?php

// Define a simple class
class Car {
    // Properties (attributes)
    public $brand;
    public $model;
    public $color;

    // Constructor
    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    // Method to display car information
    public function displayInfo() {
        echo "Brand: $this->brand, Model: $this->model, Color: $this->color<br>";
    }
}

// Create objects (instances) of the Car class
$car1 = new Car("Toyota", "Camry", "Blue");
$car2 = new Car("Honda", "Civic", "Red");

// Call methods on the objects
echo "Car 1 Information:<br>";
$car1->displayInfo();

echo "Car 2 Information:<br>";
$car2->displayInfo();
?>
