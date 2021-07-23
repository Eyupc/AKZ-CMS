<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsPage extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function settingsPage(){
        return view('master.settings');
    }

    function changePassword(Request $request){

        $messages = array(
            'currentpass.required'=>'Suan ki sifrenizi girmeniz gerekiyor!',
            'newpass.required'=>'Yeni sifrenizi girmeniz gerekiyor!',
            'newpass_2.required'=>'Yeni sifrenizi tekrardan girmeniz gerekiyor!(2 kez)',

            'newpass.required_with'=>'Yeni sifrenizi girmeniz gerekiyor',
            'newpass.same'=>'Yeni sifreleriniz uyusmuyor!',
            'newpass.min'=>'Yeni sifreniz en az 6 karakter olmasi gerekiyor!',
        );

        $request->validate([
                'currentpass' => 'required',
                'newpass' => 'required|min:6|required_with:newpass_2|same:newpass_2',
                'newpass_2'=>'required'
            ],$messages
        );

        $passwordCorrect = Hash::check($request->currentpass,auth()->user()->password);

        if($passwordCorrect){
            if(Hash::check($request->newpass,auth()->user()->password)){
                return back()->withErrors('Eski sifre ve girdiginiz yeni sifre ayni!');
            }else {
                $user = auth()->user();
                $user->password = Hash::make($request->newpass);
                $user->save();
                return back()->with('changed','Sifreniz basariyla degistirildi!');
            }
        }else{
            return back()->withErrors('Suan ki sifrenizi dogru girmediniz!');
        }
    }


}
