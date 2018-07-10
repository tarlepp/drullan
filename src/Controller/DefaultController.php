<?php

namespace App\Controller;

use App\Repository\FooBarRepository;

class DefaultController
{
    public function YourAction(FooBarRepository $repository)
    {
        // now you have your entity repository here as in $repository
    }
}
