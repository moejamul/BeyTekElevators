<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingsController;
use App\Http\Controllers\ElevatorController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\AppController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::any('{all}', [AppController::class, 'index'])
    ->where('all', '^(?!api).*$')
    ->where('all', '^(?!storage).*$');



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('join',[ElevatorController::class, 'JoinBuildingsElevators']);

// Route::post('/post', [BuildingsController::class, 'store']);

// Route::get('/searchelevator/{name}', [ElevatorController::class, 'search']);
// Route::post('/addelevator', [ElevatorController::class, 'add']);

// Route::get('/listbuildings/{id?}', [BuildingsController::class, 'list_buildings']);
// Route::get('/listelevators/{id?}', [ElevatorController::class, 'list_elevators']);

// Route::get('/updatemanager', [ManagerController::class, 'update']);

// Route::get('/buildings/{id}',function ($id) {
//     return $id;
// });



