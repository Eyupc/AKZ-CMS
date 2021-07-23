<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\user_currency;
use App\Models\User\users_achievements;
use App\Models\User\users_settings;
use Illuminate\Http\Request;

class LeaderboardsPage extends Controller
{
    function leaderboard(){ // Rank 2 = VIP
        $credits      = User::where('rank', '<', 3)->orderBy('credits', 'desc')->take(6)->get();

        $points   = user_currency::whereHas('Habbo', function ($habbo) {
            $habbo->where('rank', '<', '3');})->where('type', 5)->orderBy('amount', 'desc')->take(6)->get();

        $GOTW     = user_currency::whereHas('Habbo', function ($habbo) {
            $habbo->where('rank', '<', '3');})->where('type', 103)->orderBy('amount', 'desc')->take(6)->get();

        $respects    = users_settings::whereHas('Habbo', function ($habbo) {
      $habbo->where('rank', '<', '3');})->orderBy('respects_received', 'DESC')->take(6)->get();

       $achievements = users_settings::whereHas('Habbo', function ($habbo) {
         $habbo->where('rank', '<', '3');})->orderBy('achievement_score', 'DESC')->take(6)->get();

        $online = users_achievements::whereHas('Habbo', function ($habbo) {
            $habbo->where('rank', '<', '3');})->where('achievement_name', 'AllTimeHotelPresence')->orderBy('progress','DESC')->take(6)->get();

        return view('master.leaderboards',['credits'=>$credits,
            'GOTW'=>$GOTW,'points'=>$points,'respects'=>$respects,'achievements'=>$achievements,'online'=>$online]);
    }
}
