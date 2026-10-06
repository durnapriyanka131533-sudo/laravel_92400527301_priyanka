<?php

class Fruit
{
    public $name;
    public $color;

    public function display()
    {
        echo "Fruit Name: " . $this->name . "<br>";
        echo "Fruit Color: " . $this->color . "<br>";
    }
}

// Creating an object
$fruit1 = new Fruit();

// Assigning values
$fruit1->name = "Apple";
$fruit1->color = "Red";

// Calling the method
$fruit1->display();

?>

