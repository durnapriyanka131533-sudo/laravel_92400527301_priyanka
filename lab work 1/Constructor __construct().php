<?php

class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function display()
    {
        echo $this->name . " - " . $this->color . "<br>";
    }
}

$fruit1 = new Fruit("Apple", "Red");
$fruit2 = new Fruit("Banana", "Yellow");

$fruit1->display();
$fruit2->display();

?>
