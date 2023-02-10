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
Route::get('/posts', function () {
    return response()->json([
        'posts' => [
            [
                'id' => 1,
                'title' => 'post one',
                'description' => 'test 1'
            ],
            [
                'id' => 2,
                'title' => 'post two',
                'description' => 'test 2'
            ]
        ]
    ]);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
