<?php

namespace App\Http\Controllers\Pages\api;


use App\Http\Controllers\Controller;
use App\Models\Server\camera_web;
use Illuminate\Http\Request;
use Intervention\Image\ImageServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\File;

class PhotosAPI extends Controller
{

    function getPhoto($id){
       $image = camera_web::select('url')->where('id',$id)->first();
       $context = stream_context_create(
        array(
            "http" => array(
                "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
            )
        )
    );
        if(!$image){
            return 'Not found!';
        }

    
       $img =  @file_get_contents($image->url,false, $context);
       if (!strpos($http_response_header[0], "200")) { 
            return 'Not found! (Error type 2!)';
     }
       return response($img)->header('Content-type','image/png');
    
    }

    function getDetails($id){
        $image = camera_web::where('id',$id)->first();
        if(!$image){
            return "Not found!";
        }
        $details = array('taker'=>$image->Habbo->username,
                         'look'=>$image->Habbo->look);
        return json_encode($details);
     
     }

}
    ?>