<?php

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

Route::get("/", [\App\Http\Controllers\DashBoardController::class, 'index']);

// templates url
Route::get("/templates", [\App\Http\Controllers\MessageContentController::class, 'index']);
Route::get("/create-template", [\App\Http\Controllers\MessageContentController::class, 'create']);
Route::post("/save-template", [\App\Http\Controllers\MessageContentController::class, 'store']);
Route::get("/edit-template/{id}/", [\App\Http\Controllers\MessageContentController::class, 'editTemplate']);
Route::put("/update-template/{id}/", [\App\Http\Controllers\MessageContentController::class, 'update']);
Route::delete("/delete-template/{id}/", [\App\Http\Controllers\MessageContentController::class, 'destroy']);


// Sender numbers url

Route::get("/sender-numbers", [\App\Http\Controllers\SenderNumberController::class, 'index']);
Route::get("/create-number", [\App\Http\Controllers\SenderNumberController::class, 'create']);
Route::post("/save-number", [\App\Http\Controllers\SenderNumberController::class, 'saveNumber']);
Route::get("/edit-number/{id}/", [\App\Http\Controllers\SenderNumberController::class, 'edit']);
Route::put("/update-number/{id}/", [\App\Http\Controllers\SenderNumberController::class, 'update']);
Route::delete("/delete-number/{id}/", [\App\Http\Controllers\SenderNumberController::class, 'destroy']);

// Customers url

Route::get("/customers", [\App\Http\Controllers\CustomerController::class, 'index']);
Route::post("/import-customers", [\App\Http\Controllers\CustomerController::class, 'importCustomers']);
Route::delete("/delete-customer/{id}/", [\App\Http\Controllers\CustomerController::class, 'destroy']);


// sendsms url
Route::get("/messages", [\App\Http\Controllers\SendMessageController::class, 'template']);
Route::get("/send-message", [\App\Http\Controllers\SendMessageController::class, 'create']);
Route::post("/send-message-to-customers", [\App\Http\Controllers\SendMessageController::class, 'send']);
Route::get("/view-details/{id}/", [\App\Http\Controllers\SendMessageController::class, 'showDetails']);
