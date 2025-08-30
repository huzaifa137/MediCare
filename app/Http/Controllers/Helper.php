<?php
namespace App\Http\Controllers;

use DB;
use Session;

class Helper extends Controller
{

    public static function app_name()
    {
        return $appname = 'wakulima';
    }

}
