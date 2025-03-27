<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/test',function(Request $request){
    $data = [
        "tokens" => ["dxE-39tuiF-mSruWA-8Cdv:APA91bErzBU1JEOBciQs-h2tSOxBpZztgzJLTPadqALwBoh8JsRAela7fJRtP0jVwq-rctSPX9tLoH0L7On5voq5a6DUlP7Z-ikylBNsSMb7LAuiT4cEXvQ"],
        "android" => [
            "notification" => [
                "sound" => 'default',
                "icon" => 'stock_ticker_update',
                "click_action" => 'OPEN_ACTIVITY_1',
                "channel_id" => 'default-channel-id',
            ],
        ],
        "notification" => [
            'title' => "Greger",
            'body'  => "ergerger",
            // 'sound' => "default",
            // "icon" => '',
            // 'click_action' => "",
            // "android_channel_id" => "default-channel-id"
        ],
        "data" => [
            'title' => "Greger",
            'body'  => "ergerger",
            'type' => "order_status_change"
        ],
        "priority" => "high"
    ];
    sendFcmCurlRequest($data);
    dd("fege");
    return redirect()->back();
});

Route::group(['middleware' => 'languageSwitch'], function () {

    Auth::routes();

 
    include_once "images.php";
    include_once "godpanel.php";

    Route::domain('{domain}')->middleware(['subdomain'])->group(function() {
        include_once "commonRoute.php";
        include_once "frontend.php";
        include_once "backend.php";
    });

    Route::get('showImg/{folder}/{img}',function($folder, $img){
        $image  = \Storage::disk('s3')->url($folder . '/' . $img);
        return \Image::make($image)->fit(460, 120)->response('jpg');
    });

    Route::get('/prods/{img}',function($img){
        $image  = \Storage::disk('s3')->url('prods/' . $img);
        return \Image::make($image)->fit(460, 320)->response('jpg');
    });


});

// languageSwitch 
Route::get('/switch/language',function(Request $request){
    if($request->lang){
        session()->put("applocale",$request->lang);
    }
    return redirect()->back();
});

// ADMIN languageSwitch 
Route::get('/switch/admin/language',function(Request $request){
    if($request->lang){
        session()->put("applocale_admin",$request->lang);
        session()->put("adminLanguage",$request->langid);
    }
    return redirect()->back();
});

Route::get('/share','HomeController@share')->name('share_link');
