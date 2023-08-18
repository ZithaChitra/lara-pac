<?php

namespace Blessing\BrandsplashPackage\Facades;
// require_once __DIR__.'/../../vendor/autoload.php';

use Illuminate\Support\Facades\Facade;


class Calculator extends Facade 
{
    protected static function getFacadeAccessor()
    {
        return 'calculator';
    }
}


?>