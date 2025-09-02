<?php
namespace App\Http\Controllers;


use Session;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class Helper extends Controller
{

    public static function app_name()
    {
        return $appname = 'wakulima';
    }


    public static function logged_username()
    {
        return $username =  DB::table('users')->where('id',Session('LoggedAdmin'))->value('username');
    }

}
