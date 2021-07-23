<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Server\camera_web;
use Illuminate\Http\Request;

class PhotosPage extends Controller
{

function photoPage(){
    $photos  = camera_web::orderBy('id','DESC')->get();

    return view('master.photos',['photos'=>$photos]);
}
}
