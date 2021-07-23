<?php

namespace App\utils;


use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonInterval;

class Functions{

    public static function getOnline(){
        return User::where('online','=','1')->count();
    }

    public static function randomUsersOnline(){
        return User::where('online','1')->inRandomOrder()->take(14)->get();
    }

    public static function convertToDate($timestamp){
        $date = Carbon::createFromTimestamp($timestamp)->format('d/m/Y');
        return $date;
    }
}
