<?php
/**
 * Created by PhpStorm.
 * User: n0m4dz
 * Date: 11/10/15
 * Time: 4:48 PM
 */

namespace Solarcms\Dashboard\Facade;

use Illuminate\Support\Facades\Facade as Facade;

class Dashboard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Dashboard';
    }
}