<?php

use App\Http\Controllers\InvitationController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
   
})->middleware('auth:sanctum');
Route::get('/invitations', [InvitationController::class, 'index']);
Route::get('/invitations/{id}', [InvitationController::class, 'show']);