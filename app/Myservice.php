<?php

namespace App\Intersectiontype;

class Myservice
{
    public function __construct(private Syncable|Payable $entity)
    {

    }

    public function handle()
    {
        $this->entity->pay();
        $this->entity->sync();
    }
}