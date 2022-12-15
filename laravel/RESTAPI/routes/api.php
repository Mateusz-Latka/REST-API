<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('people',[PeopleController::class, 'index']);
Route::get('people/{id}',[PeopleController::class, 'show']);
Route::delete('people/{id}', [AuthorController::class, 'delete']);
Route::post('people', [AuthorController::class, 'create']);
Route::put('people/{id}', [AuthorController::class, 'update']);