<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// post request for getting caller Id from ringba
Route::post("/post-number", [\App\Http\Controllers\NumberController::class, 'send_callerId_to_crm']);

// generating automatic message
Route::post("/auto-message", [\App\Http\Controllers\SendMessageController::class, "send_sms_automatically"]);


