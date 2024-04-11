<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/message-sent', function(Request $request){
    App\Events\MessageSent::dispatch('Guest', $request->message);

    return response()->json('done');
});
