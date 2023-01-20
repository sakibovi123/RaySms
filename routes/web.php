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
    Route::get("/logout", [\App\Http\Controllers\Auth\AuthController::class, "logout"])->name("logout");

    Route::get("/", [\App\Http\Controllers\DashBoardController::class, 'index']);
    Route::get("/ringba", [\App\Http\Controllers\TestController::class, "get_ringba_numbers"]);

// templates url
    Route::get("/templates", [\App\Http\Controllers\MessageContentController::class, 'index']);
    Route::get("/create-template", [\App\Http\Controllers\MessageContentController::class, 'create']);
    Route::post("/save-template", [\App\Http\Controllers\MessageContentController::class, 'store']);
    Route::get("/edit-template/{id}/", [\App\Http\Controllers\MessageContentController::class, 'editTemplate']);
    Route::put("/update-template/{id}/", [\App\Http\Controllers\MessageContentController::class, 'update']);
    Route::delete("/delete-template/{id}/", [\App\Http\Controllers\MessageContentController::class, 'destroy']);
    Route::get("/remove-all", [\App\Http\Controllers\MessageContentController::class, 'remove_all'])->name("remove_all");


// Sender numbers url

    Route::get("/sender-numbers", [\App\Http\Controllers\SenderNumberController::class, 'index']);
    Route::get("/create-number", [\App\Http\Controllers\SenderNumberController::class, 'create']);
    Route::post("/save-number", [\App\Http\Controllers\SenderNumberController::class, 'saveNumber']);
    Route::get("/edit-number/{id}/", [\App\Http\Controllers\SenderNumberController::class, 'edit']);
    Route::put("/update-number/{id}/", [\App\Http\Controllers\SenderNumberController::class, 'update']);
    Route::delete("/delete-number/{id}/", [\App\Http\Controllers\SenderNumberController::class, 'destroy']);
    Route::get("/remove-sender-numbers", [\App\Http\Controllers\SenderNumberController::class, 'remove_all'])->name("remove_all");

// Customers url

    Route::get("/customers", [\App\Http\Controllers\CustomerController::class, 'index']);
    Route::get("/add-customer", [\App\Http\Controllers\CustomerController::class, "create"]);
    Route::post("/save-customer", [\App\Http\Controllers\CustomerController::class, "create_customer_manually"]);
    Route::post("/import-customers", [\App\Http\Controllers\CustomerController::class, 'importCustomers']);
    Route::delete("/delete-customer/{id}/", [\App\Http\Controllers\CustomerController::class, 'destroy']);
    Route::get("/create-customer", [\App\Http\Controllers\CustomerController::class, "create"])->name("create-customer");
    Route::post("/save-customer", [\App\Http\Controllers\CustomerController::class, 'create_customer_manually'])->name("save-customer");
    Route::get("/destroy_all", [\App\Http\Controllers\CustomerController::class, "destroy_all"])->name("destroy_all");


// sendsms url
    Route::get("/messages", [\App\Http\Controllers\SendMessageController::class, 'template']);
    Route::get("/send-message", [\App\Http\Controllers\SendMessageController::class, 'create']);
    Route::post("/send-message-to-customers", [\App\Http\Controllers\SendMessageController::class, 'send']);
    Route::get("/view-details/{id}", [\App\Http\Controllers\SendMessageController::class, 'showDetails']);
    Route::delete("/remove/{id}", [\App\Http\Controllers\SendMessageController::class, "remove"]);
    Route::get("/remove-all", [\App\Http\Controllers\SendMessageController::class, "remove_all"])->name("remove_all");

    // campaigns route
    Route::get("/campaigns", [\App\Http\Controllers\CampaignController::class, "fetch_all_campaigns"])->name("all_campaigns");
    Route::get("/create-campaign", [\App\Http\Controllers\CampaignController::class, 'create'])->name("create-campaign");
    Route::post("/save-campaign", [\App\Http\Controllers\CampaignController::class, "store"])->name("save-content");
    Route::get("/campaign-details/{camp_id}", [\App\Http\Controllers\CampaignController::class, "fetch_campaign_wise_customers"]);
    Route::put("/change-status/{id}", [\App\Http\Controllers\CampaignController::class, "start_or_stop"])->name("change-status");

    // numbers route
    Route::get("/numbers", [\App\Http\Controllers\NumberController::class, 'get_numbers_from_ringba'])->name("numbers");

    // contents routes
    Route::get("/contents", [\App\Http\Controllers\ContentController::class, "index"])->name("contents");
    Route::get("/create-content", [\App\Http\Controllers\ContentController::class, 'create'])->name("create-content");
    Route::post("/save-content", [\App\Http\Controllers\ContentController::class, "store"])->name("save-content");
    Route::get("/edit-content/{id}", [\App\Http\Controllers\ContentController::class, 'edit'])->name("edit-content");
    Route::put("/update-content/{id}", [\App\Http\Controllers\ContentController::class, 'update'])->name("update-content");
    Route::delete("delete-content/{id}/", [\App\Http\Controllers\ContentController::class, "remove"])->name("remove-content");

    // jobs routes
    Route::get("/jobs", [\App\Http\Controllers\JobController::class, "fetching_all_jobs"])->name("job");
    // logs routes
    Route::get("/logs", [\App\Http\Controllers\JobController::class, "index"])->name("jobs");


    // data lists routes
    Route::get("/lists", [\App\Http\Controllers\DataListController::class, "index"])->name("lists");
    Route::get("/create-list", [\App\Http\Controllers\DataListController::class, "create"])->name("create-list");
    Route::post("/save-lists", [\App\Http\Controllers\DataListController::class, "store"])->name("store-lists");
    Route::get("/view/{list_id}", [\App\Http\Controllers\DataListController::class, "show"])->name("show");
    Route::get("/edit-list/{list_id}", [\App\Http\Controllers\DataListController::class, "edit"])->name("edit-list");
    Route::put("/update-list/{list_id}", [\App\Http\Controllers\DataListController::class, "update"])->name("update-list");
    Route::delete("/remove-list/{list_id}", [\App\Http\Controllers\DataListController::class, "remove"])->name("remove-list");
    Route::get("/remove-all-list", [\App\Http\Controllers\DataListController::class, "delete_all"])->name("delete-all-list");


    // testing sms automation
    Route::post("/auto-message", [\App\Http\Controllers\SendMessageController::class, "send_sms_automatically"]);
});






