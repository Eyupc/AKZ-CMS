<?php


use App\Http\Controllers\CustomAuth\LoginController;
use App\Http\Controllers\CustomAuth\LogoutController;
use App\Http\Controllers\CustomAuth\RegisterController;
use App\Http\Controllers\Pages\Client\BetaPage;
use App\Http\Controllers\Pages\Client\ClientPages;
use App\Http\Controllers\Pages\LeaderboardsPage;
use App\Http\Controllers\Pages\MePage;
use App\Http\Controllers\Pages\NewsPage;
use App\Http\Controllers\Pages\StaffPage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::redirect('/index','/');
Route::get('/',[LoginController::class,'login'])->name('index');  // Login
Route::post('auth/login',[LoginController::class,'UserLogin'])->name('auth.login'); //Login data
Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::post('auth/register',[RegisterController::class,'UserRegister'])->name('auth.register'); //register data

Route::get('/news',[NewsPage::class,'newsPage'])->name('news');
Route::get('/news/{id}',[NewsPage::class,'newsArticle'])->name('news');
Route::get('/leaderboards',[LeaderboardsPage::class,'leaderboard'])->name('leaderboards');
Route::get('/staff',[StaffPage::class,'staffPage'])->name('staffs');
Route::get('/captcha/refreshcaptcha',[RegisterController::class,'refreshCaptcha'])->name('refreshCaptcha');

Route::middleware(['auth'])->group(function(){
    Route::get('/me',[MePage::class,'mePage'])->name('me');
    Route::get('/logout',[LogoutController::class,'logout'])->name('logout');
    route::get('/beta',[ClientPages::class,'beta'])->name('beta');
    route::get('/client',[ClientPages::class,'flash'])->name('client');
}

);

