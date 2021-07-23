<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\CMS\cms_news;
use App\Models\User;
use Illuminate\Http\Request;

class NewsPage extends Controller
{
    function newsPage(){
        $news = cms_news::orderBy('date','DESC')->take(6)->get();
        $onlineUsers = User::where('online','1')->inRandomOrder()->take(14)->get();
        return view('master.news',['news'=>$news,
            'onlineUsers'=>$onlineUsers]);
    }

    function newsArticle($id){
     $news = cms_news::where('id',$id)->first();
     $articles = cms_news::orderBy('date','DESC')->take(6)->get();
     return view('master.news',['newsId'=>$news,
                                     'news'=>$articles]);
    }
}
