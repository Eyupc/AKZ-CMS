<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\CMS\cms_news;
use App\Models\Server\camera_web;
use App\Models\User;
use App\Models\User\users_badges;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MePage extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function mePage(){
        $news =  cms_news::orderBy('date','DESC')->take(3)->get();
        $badges = users_badges::where('user_id','=',auth()->user()->id)->where('slot_id','>','0')->take(10)->get();
        $photos = camera_web::orderBy('id','DESC')->take(10)->get();

        return view('master.me',
            ['news'=>$news,
            'badges'=>$badges,
            'photos'=>$photos]);
    }
}
