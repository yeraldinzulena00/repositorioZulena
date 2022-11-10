<?php

namespace App\VarianceEjemplo;

interface AnimalShelter
{
public function adopt(string $name): Animal;
}