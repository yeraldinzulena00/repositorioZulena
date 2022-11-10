<?php

namespace App\VarianceEjemplo;

class Dog extends Animal
{
public function speak()
{
    echo $this->name. "Barks";
}
public function eat(Food $food)
{
    echo $this->name . "eats" . get_class($food);
}
}