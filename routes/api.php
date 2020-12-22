<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingsController;
use App\Http\Controllers\ElevatorController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ManagersBuildingsController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/post', [BuildingsController::class, 'store']);
Route::get('/listbuildings/{id?}', [BuildingsController::class, 'list_buildings']);
Route::post('/addbuilding', [BuildingsController::class, 'add']);
Route::put('/updatebuilding', [BuildingsController::class, 'update']);
Route::get('/searchbuilding/{name}', [BuildingsController::class, 'search']);
Route::delete('/deletebuilding/{id}', [BuildingsController::class, 'delete']);
Route::get('/buildingselevators', [BuildingsController::class, 'JoinBuildingsElevators']);

Route::get('/listelevators/{id?}', [ElevatorController::class, 'list_elevators']);
Route::post('/addelevator', [ElevatorController::class, 'add']);
Route::put('/updateelevator', [ElevatorController::class, 'update']);
Route::get('/searchelevator/{name}', [ElevatorController::class, 'search']);
Route::delete('/deleteelevator/{id}', [ElevatorController::class, 'delete']);
Route::get('/elevatorsbuildings', [ElevatorController::class, 'JoinBuildingsElevators']);

Route::get('/listmanagers/{id?}', [ManagerController::class, 'list_managers']);
Route::post('/addmanager', [ManagerController::class, 'add']);
Route::put('/updatemanager', [ManagerController::class, 'update']);
Route::get('/searchmanagers/{name}', [ManagerController::class, 'search']);
Route::delete('/deletemanager/{id}', [ManagerController::class, 'delete']);
Route::get('/managersbuildings', [ManagerController::class, 'JoinBuildingsManagers']);


Route::get('/listmanagersbuildings/{id?}', [ManagersBuildingsController::class, 'list_managers_buildings']);
Route::post('/addmanagersbuildings', [ManagersBuildingsController::class, 'add']);
Route::put('/updatemanagersbuildings', [ManagersBuildingsController::class, 'update']);
Route::get('/searchmanagersbuildings/{name}', [ManagersBuildingsController::class, 'search']);
Route::delete('/deletemanagersbuildings/{id}', [ManagersBuildingsController::class, 'delete']);


// Route::get('/buildings/{id}', [BuildingsController::class, 'list_buildings_id']);