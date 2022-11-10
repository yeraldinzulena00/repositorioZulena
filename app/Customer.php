<?php

namespace App\NewInInitializers;

use App\Address;

class Customer
{
    public $address;

    public function __construct() //(public Address $address = new Address())
{
    var_dump('Hello');
}
}