<?php
use App\Invoice;
require_once 'vendor/autoload.php';
$invoice1 = new Invoice();
$map = new WeakMap();
$map[$invoice1] = ['a' => 1, 'b' =>  2];

var_dump(count($map));
echo '<br>';
unset($invoice1) ;
echo '<br>';
var_dump(count($map));