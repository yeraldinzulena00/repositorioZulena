<?php
//desempaquetado de la matriz con claves de cadena

declare(strict_types = 1);

$array1 = ['a' => 1, 'b'=> 2,'c' => 3];
$array2 = [4, 'b' => 5, 6];
$array3 = [...$array1, ...$array2];
print_r($array3);

//3v4l.org

//Enumeraciones

use App\PaymentStatus;
use App\Payment;

$payment = new Payment();
$payment->updateStatus(PaymentStatus::PAID);
echo $payment->status()->value . PHP_EOL;

//funcion de propiedades

use App\Address;

$address = new Address(
    '123 ',
    'Ciudad',
    'PHP',
    'CSS',
    'HTML'
);
echo $address->street . PHP_EOL;
//Never return Type
function foo():never
{
    echo 1;
    exit;
}
foo();
echo 'Ejemplo video';
//Array_is_list
//Son matrices ordenada de 0 en adelante
$list = ['a', 'b', 'c'];
$nolist = [1 => 'a', 'b','c'];

var_dump(array_is_list($list));




var_dump(arry_is_list($nolist));
$list = array_filter($list, fn(string $value)=> $value !== 'b');

var_dump($list);
var_dump(array_is_list($list));
$list = array_values($list);
var_dump($list);
var_dump(array_is_list($list));
//first-class

function sum(float ...$num): float
{
    return array_sum($num);
}
$closure = sum(...);
//$closure = Closure::fromCallable('sum');
var_dump($closure);
echo $closure(2, 5) . PHP_EOL;
//new en inicializadores
use App\NewInInitializers\Customer;

$customer = new Customer(new Address());
var_dump($customer->address);
//final constants
use App\TableQuery;
echo \App\InvoiceQuery::DEFAULT_LIMIT;
