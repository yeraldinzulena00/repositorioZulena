<?php

namespace App;

class Invoice
{

public function __destruct()
{
    echo 'Invoice destructor' . PHP_EOL;
}
}