<?php

namespace App;

class InvoiceStatus
{
public const PENDING = 0;
public const PAID = 1;
public const VOID = 2;
public const FAILED = 3;
public static function all(): array
{
    return [
        self::PAID,
        self::FAILED,
        self::PENDING,
        self::VOID,
    ] ;
}

}