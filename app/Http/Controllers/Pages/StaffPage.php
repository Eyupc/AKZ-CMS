<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StaffPage extends Controller
{
     function staffPage()
    {
       $staffs = User::where('rank', '>', '2')->get();
       $onlineStaffs = User::where('rank','>','2')->inRandomOrder()->get();

        return view('master.staff',['staffs'=>$staffs,'onlineStaffs'=>$onlineStaffs]);
        }

}
