<?php

declare(strict_types = 1);
//covariance metodo no especificoa metodo mas especifico
use App\VarianceEjemplo\CatShelter;
use App\VarianceEjemplo\DogShelter;
use App\VarianceEjemplo\AnimalFood;
use App\VarianceEjemplo\Food;

/*$kitty = (new CatShelter)->adopt("Ricky");
$kitty->speak();
echo PHP_EOL;
$doggy = (new DogShelter)->adopt("Poncho");
$doggy->speak();
echo PHP_EOL;*/
//cotravariance mas especifico a menos especifico
$kitty = (new CatShelter)->adopt("Ricky");
$kitty->speak();
echo PHP_EOL;

$catFood = new AnimalFood();
$kitty->eat($catFood);
echo PHP_EOL;
$doggy = (new DogShelter)->adopt("Poncho");
$doggy->speak();
echo PHP_EOL;
$banana = new Food();
$doggy->eat($banana);