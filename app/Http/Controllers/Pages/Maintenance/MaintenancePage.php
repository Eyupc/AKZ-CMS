<?php

namespace App\Http\Controllers\Pages\Maintenance;

use App\Http\Controllers\Controller;
use App\utils\Configuration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\BSON\Javascript;

class MaintenancePage extends Controller
{
    function maintenance(){
        if(Configuration::maintenance) {
            return view('master.maintenance.maintenance');
        }else {
            return redirect('/');
        }
    }

    function login(Request $request)
    {
        $user_data = array(
            'username' => $request->username,
            'password' => $request->password
        );

        if (Auth::attempt($user_data)) {
            if (auth()->user()->rank < Configuration::maintenanceMinRank) {
                auth()->logout();
                return back();
            } else {
                return redirect('/me');
            }
        }else {
            return back();
        }
    }
}
