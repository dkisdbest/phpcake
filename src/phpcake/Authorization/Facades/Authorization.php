<?php
namespace phpcake\Authorization\Facades;

use Illuminate\Support\Facades\Facade;

class Authorization extends Facade
{
    protected static function getFacadeAccessor() { return 'Authorization'; }
}