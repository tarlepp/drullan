<?php

namespace App\Some;

class Service
{
    private $repository;

    public function __construct(FooBarRepository $repository)
    {
        $this->repository = $repository;
    }

    public function doStuff()
    {
        $this->repository->callSomeMethod();
    }
}
