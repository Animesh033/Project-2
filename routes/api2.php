<?php
use Illuminate\Http\Request;

use App\Api\V2\Controllers;

Route::middleware('auth:api')->get('/user2', function (Request $request) {
    return $request->user();
});