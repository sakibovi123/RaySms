<?php

use Illuminate\Support\Facades\Route;

// Auth Urls
Route::group(["middleware" => "guest"], function(){
    Route::get("/register", [\App\Http\Controllers\Auth\AuthController::class, 'register']);
    Route::post("/register", [\App\Http\Controllers\Auth\AuthController::class, 'createUser']);

    Route::get("/login", [\App\Http\Controllers\Auth\AuthController::class, 'loginIndex'])->name("login");
    Route::post("/login", [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name("login");

    Route::get("/logout", [\App\Http\Controllers\Auth\AuthController::class, "logout"])->name("logout");
    Route::get("/ringba", [\App\Http\Controllers\TestController::class, "get_ringba_numbers"]);
});


Route::group(["middleware" => "auth"], function () {
    Route::get("/", [\App\Http\Controllers\DashBoardController::class, 'index']);
    Route::get("/ringba", [\App\Http\Controllers\TestController::class, "get_ringba_numbers"]);

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
    Route::get("/create-customer", [\App\Http\Controllers\CustomerController::class, "create"])->name("create-customer");
    Route::post("/save-customer", [\App\Http\Controllers\CustomerController::class, 'create_customer_manually'])->name("save-customer");


// sendsms url
    Route::get("/messages", [\App\Http\Controllers\SendMessageController::class, 'template']);
    Route::get("/send-message", [\App\Http\Controllers\SendMessageController::class, 'create']);
    Route::post("/send-message-to-customers", [\App\Http\Controllers\SendMessageController::class, 'send']);
    Route::get("/view-details/{id}/", [\App\Http\Controllers\SendMessageController::class, 'showDetails']);

    // campaigns route
    Route::get("/campaigns", [\App\Http\Controllers\CampaignController::class, "fetch_all_campaigns"])->name("all_campaigns");
    Route::get("/campaign-details/{camp_id}", [\App\Http\Controllers\CampaignController::class, "fetch_campaign_wise_customers"]);

    // testing sms automation
    Route::post("/auto-message", [\App\Http\Controllers\SendMessageController::class, "send_sms_automatically"]);
});






