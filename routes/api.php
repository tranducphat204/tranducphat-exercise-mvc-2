<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
// Mission 1: API route
Route::get('/students', [StudentController::class, 'getStudents']);
// Mission 3: Controller with parameter
Route::get('/students/{id}', [StudentController::class, 'getStudentById']);
