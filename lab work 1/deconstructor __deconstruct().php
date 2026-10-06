<?php

class Test
{
    public function __construct()
    {
        echo "Constructor called<br>";
    }

    public function __destruct()
    {
        echo "Destructor called<br>";
    }
}

$test = new Test();

?>
