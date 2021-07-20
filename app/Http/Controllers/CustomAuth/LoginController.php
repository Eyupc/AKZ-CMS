<?php

namespace App\Http\Controllers\CustomAuth;

use App\Http\Controllers\Controller;
use App\Models\Server\camera_web;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    function login(){
        $photos = camera_web::orderBy('id','DESC')->take(10)->get();

        return view('master.index',['photos'=>$photos]);
    }


    function UserLogin(Request $request)
    {
        $request->validate([
                'username' => 'required',
                'password' => 'required'
            ]
        );

        $userdata = User::where('username', '=', $request->username)->first();

        $user_data = array(
            'username'=>$request->username,
            'password'=>$request->password
        );


        if(Auth::attempt($user_data)){
           return redirect('/me');
        }

        if (!$userdata) {
            return back()->withErrors(['wrongusername'=> 'Böyle bir kullanici ismi bulunmadi!']);
        } else {
                return back()->withErrors(['wrongpass'=> "Yanlis bir sifre!"]);
        }
    }



}
