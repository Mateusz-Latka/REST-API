<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mateuszlatka/305382/people',[PeopleController::class, 'index']);
Route::get('mateuszlatka/305382/people/{people}',[PeopleController::class, 'show']);
Route::delete('mateuszlatka/305382/people/{people}', [PeopleController::class, 'delete']);
Route::post('mateuszlatka/305382/people', [PeopleController::class, 'create']);
Route::put('mateuszlatka/305382/people/{people}', [PeopleController::class, 'update']);