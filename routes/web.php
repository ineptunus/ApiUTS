<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ShazamController; 
 
// Route untuk mendapatkan semua tim 
Route::get('api/count', [ShazamController::class, 'getCount']); 

Route::get('/', function () {
    return view('welcome');
});
