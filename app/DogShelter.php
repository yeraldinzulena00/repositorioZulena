<?php

namespace App\VarianceEjemplo;

class DogShelter implements AnimalShelter
{
public function adopt(string $name):Dog
{
return new Dog($name);
}
}