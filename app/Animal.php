<?php

namespace App\VarianceEjemplo;

abstract class Animal
{
protected string $name;
public function __construct(string $name)
{
    $this->name= $name;
}
abstract public function speak();
public function eat(AnimalFood $food)
{
    echo $this->name. "Comida" . get_class($food);
}
}