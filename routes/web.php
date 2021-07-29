<?php


use App\Http\Controllers\CustomAuth\LoginController;
use App\Http\Controllers\CustomAuth\LogoutController;
use App\Http\Controllers\CustomAuth\RegisterController;
use App\Http\Controllers\Pages\Client\BetaPage;
use App\Http\Controllers\Pages\Client\ClientPages;
use App\Http\Controllers\Pages\LeaderboardsPage;
use App\Http\Controllers\Pages\Maintenance\MaintenancePage;
use App\Http\Controllers\Pages\MePage;
use App\Http\Controllers\Pages\NewsPage;
use App\Http\Controllers\Pages\PhotosPage;
use App\Http\Controllers\Pages\SettingsPage;
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

Route::get('/maintenance',[MaintenancePage::class,'maintenance'])->name('maintenance'); //Maintenance
Route::post('/maintenance',[MaintenancePage::class,'login'])->name('maintenanceLogin');
Route::middleware(['maintenance'])->group(function() {
    Route::redirect('/index', '/');

    Route::get('/', [LoginController::class, 'login'])->name('index');  // Login
    Route::post('auth/login', [LoginController::class, 'UserLogin'])->name('auth.login'); //Login data

    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('auth/register', [RegisterController::class, 'UserRegister'])->name('auth.register'); //register data

    Route::get('/news', [NewsPage::class, 'newsPage'])->name('news');
    Route::get('/news/{id}', [NewsPage::class, 'newsArticle'])->name('news');

    Route::get('/leaderboards', [LeaderboardsPage::class, 'leaderboard'])->name('leaderboards');

    Route::get('/staff', [StaffPage::class, 'staffPage'])->name('staffs');

    Route::get('/photos', [PhotosPage::class, 'photoPage'])->name('photos');

    Route::get('/apps', function () {
        return view('master.app');
    })->name('apps');

    Route::middleware(['auth'])->group(function () { //Authenticated users
        Route::get('/me', [MePage::class, 'mePage'])->name('me');
        Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

        route::get('/hotel', function () {
            return view('master.hotel');
        })->name("hotel"); // Choose BETA or FLASH
        route::get('/beta', [ClientPages::class, 'beta'])->name('beta');
        route::get('/client', [ClientPages::class, 'flash'])->name('client');
        route::get('/settings', function () {
            return redirect(route('change.password'));
        });
        route::get('/settings/password', [SettingsPage::class, 'settingsPage'])->name('change.password');
        Route::post('settings/post/changepass', [SettingsPage::class, 'changePassword'])->name('post.password');
    }

    );
});

