<?php

namespace App\VarianceEjemplo;

class CatShelter implements AnimalShelter
{
public function adopt(string $name): Cat
{
   return new cat($name);
}
}