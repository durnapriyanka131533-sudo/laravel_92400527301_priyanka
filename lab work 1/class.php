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

?>
