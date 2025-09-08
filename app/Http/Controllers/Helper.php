<?php
namespace App\Http\Controllers;


use Session;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class Helper extends Controller
{

    public static function app_name()
    {
        return $appname = 'mediCare';
    }

    public static function app_info($key = null)
    {
        $info = [
            'location' => 'Kampala Kololo, 16 Acacia Avenue',
            'phone' => '+256 414 123456',
            'email' => 'info@medicare.ug',
        ];

        if ($key && array_key_exists($key, $info)) {
            return $info[$key];
        }

        return $info;
    }



    public static function logged_username()
    {
        return $username = DB::table('users')->where('id', Session('LoggedAdmin'))->value('username');
    }

}
