<?php

use App\Events\UserCreatedEvent;
use App\Http\Controllers\NotificationController;
use App\Mail\SendMailToUser;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('notify', [NotificationController::class, 'mail']);
Route::get('sms', [NotificationController::class, 'index']);
