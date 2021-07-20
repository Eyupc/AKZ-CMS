<?php

namespace App\Http\Controllers\CustomAuth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{

    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('auth');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
