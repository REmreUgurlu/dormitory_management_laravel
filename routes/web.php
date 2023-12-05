<?php

use App\Livewire\CreateStudent;
use App\Livewire\ShowStudent;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    $students = \App\Models\Student::all();
 
    return view('welcome', ['students' => $students]);
});

Route::post('/students/create', CreateStudent::class);

Route::get('/students/{id}', ShowStudent::class);
