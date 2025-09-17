<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
Route::get("/user", [PageController::class, 'users']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});