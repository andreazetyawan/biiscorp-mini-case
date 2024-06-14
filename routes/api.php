<?php

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/pegawai', function () {
    return new UserCollection(User::all());
});
Route::get('/pegawai/{id}', function (string $id) {
    return new UserResource(User::findOrFail($id));
});
