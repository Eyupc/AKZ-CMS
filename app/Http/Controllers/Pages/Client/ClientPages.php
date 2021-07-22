<?php

namespace App\Http\Controllers\Pages\Client;

use App\Http\Controllers\Controller;
use App\utils\Configuration;
use Illuminate\Http\Request;

class ClientPages extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     function beta(){
        $user = auth()->user();
        $user->auth_ticket = "AKZ-" . $this->randomString();
        $user->save();
        return view('master.client.beta',['nitroPath'=> Configuration::nitroPath]);
    }
    function flash(){
        $user = auth()->user();
        $user->auth_ticket = "AKZ-" . $this->randomString();
        $user->save();
        return view('master.client.client',['flashConfig'=>Configuration::flashConfig]);
    }

    private function randomString(){
        $bytes = 14;
        $result = bin2hex(random_bytes($bytes));
        return $result;
    }

}
