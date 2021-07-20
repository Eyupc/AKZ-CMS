<?php

namespace App\Http\Controllers\CustomAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    use RegistersUsers;
    protected $redirectTo = '/me';


    public function __construct()
    {
        $this->middleware('guest');
    }

    function register()
    {
        $staff = User::where('rank','>','2')->inRandomOrder()->first();
        return view('master.register',[
        'staffs'=>$staff]);
    }

    function UserRegister(Request $request)
    {

        $message = array(
            'username.required'=>'Bir kullanici ismi girmeniz gerekiyor!',
            'username.unique'=>'Bu kullanici ismi bir kisi tarafindan kullaniliyor bile!',
            'username.min'=>'Kullanici ismi minimum 1 karakter olmasi gerekiyor!',
            'username.max'=>'Kullanici ismi maximum 17 karakter olabilir!',
            'username.regex'=>'Kullanilmicak karakter kullandin!',

            'mail.required'=>'Bir eposta adresi girmeniz gerekiyor!',
            'mail.unique'=>'Bu e-posta baska birisi tarafindan kullaniliyor bile!',


            'password.required'=>'bir sifre girmeniz gerekiyor!',
            'password.required_with'=>'Iki sifreyi de doldurmaniz gerekiyor!',
            'password.same'=>'Iki sifre de ayni olmasi gerekiyor!',
            'password.min'=>'Sifre en az 6 karakter olmasi gerekiyor!',

            'password_confirmation.required'=>'Sifre en az 6 karakter olmasi gerekiyor!',
            'g-recaptcha-response.required' =>"Captcha error",
            'g-recaptcha-response.recaptchav3' =>"Captcha error",


        );

        $this->validate($request,[
            'username' => 'required|unique:users|min:1|max:17|regex:/[a-zA-Z0-9-=?!@:.]+/u',
            'mail' => 'required|email|unique:users',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:captcha,0.5'
        ],$message);


            $data = array(
                'username' => $request->username,
                'mail' => $request->mail,
                'password' => $request->password
            );

            $this->create($data);
            Auth::attempt($data);
            return redirect('/me');
    }


    protected function create(array $data): User
    {
        return User::create([
            'username' => $data['username'],
            'mail' => $data['mail'],
            'password' => Hash::make($data['password']),
            'ip_register' => request()->ip(),
            'ip_current' => request()->ip(),
            'last_login' => time(),
            'account_created' => time(),
            'motto' => 'test'
        ]);
    }

   public function refreshCaptcha(){
       return response()->json(['captcha'=> captcha_img()]);
    }

}
