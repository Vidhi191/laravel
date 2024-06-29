<?php

use Illuminate\Support\Facades\Route;
/**use Illuminate\Support\Facades\EmployeeController;**/

use App\Http\Controllers\EmployeeController;


/**Route::get('/', function () {
    return view('welcome');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');

});
Route::get('/contact', function () {
    return view('contact');
});**/



Route::get('employeess', [EmployeeController::class, 'index']);
Route::post('employees', [EmployeeController::class, 'create']);
Route::put('employeess', [EmployeeController::class, 'update']);
Route::delete('employees/{id}', [EmployeeController::class, 'delete']);

