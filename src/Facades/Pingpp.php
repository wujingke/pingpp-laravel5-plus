<?php
namespace JingKe\Pingpp\Facades;

use Illuminate\Support\Facades\Facade;

class Pingpp extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'pingpp';
    }
}
