<?php

namespace App\Controller;

use App\Some\Service;

class DefaultController
{
    public function YourAction(Service $service)
    {
        $service->doStuff();
    }
}
