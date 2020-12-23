<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingsController;
use App\Http\Controllers\ElevatorController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ManagersBuildingsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//BUILDINGS API
Route::post('/post', [BuildingsController::class, 'store']); // ADDING BUILDINGS
Route::get('/listbuildings/{id?}', [BuildingsController::class, 'list_buildings']);// Getting all BUILDINGS records,, with an option for specifying which id to get
Route::post('/addbuilding', [BuildingsController::class, 'add']); // Adding new records to BUILDINGS
Route::put('/updatebuilding', [BuildingsController::class, 'update']); // updating BUILDINGS records
Route::get('/searchbuilding/{name}', [BuildingsController::class, 'search']); // Search for buildings in the records
Route::delete('/deletebuilding/{id}', [BuildingsController::class, 'delete']); // deleting buildings redords
Route::get('/buildingselevators', [BuildingsController::class, 'JoinBuildingsElevators']); // het buildings records with their respective elavators records

// ELEVATORS API
Route::get('/listelevators/{id?}', [ElevatorController::class, 'list_elevators']); // getting all elevator records, with an option for specifying which id to get
Route::post('/addelevator', [ElevatorController::class, 'add']); // adding new elevator records
Route::put('/updateelevator', [ElevatorController::class, 'update']); // updating elevator records
Route::get('/searchelevator/{name}', [ElevatorController::class, 'search']); // search for elevator records
Route::delete('/deleteelevator/{id}', [ElevatorController::class, 'delete']); // delete elevator records
Route::get('/elevatorsbuildings', [ElevatorController::class, 'JoinBuildingsElevators']);// get elevator records with their respective buildings records

// Managers API
Route::get('/listmanagers/{id?}', [ManagerController::class, 'list_managers']); // getting all manager records, with an option for specifying which id to get
Route::post('/addmanager', [ManagerController::class, 'add']); // adding new manager records
Route::put('/updatemanager', [ManagerController::class, 'update']); // updateing manager records
Route::get('/searchmanagers/{name}', [ManagerController::class, 'search']); // search for manager records
Route::delete('/deletemanager/{id}', [ManagerController::class, 'delete']); // delete manager records
Route::get('/managersbuildings', [ManagerController::class, 'JoinBuildingsManagers']); // get manager records with their respective buildings records

// Managers-Buildings Pivot Table API
Route::get('/listmanagersbuildings/{id?}', [ManagersBuildingsController::class, 'list_managers_buildings']); // getting all managers-buildings records, with an option for specifying which id to get
Route::post('/addmanagersbuildings', [ManagersBuildingsController::class, 'add']);// adding new managers-buildings records
Route::put('/updatemanagersbuildings', [ManagersBuildingsController::class, 'update']); // updating managers-buildings records
Route::get('/searchmanagersbuildings/{name}', [ManagersBuildingsController::class, 'search']); // searching managers-buildings records
Route::delete('/deletemanagersbuildings/{id}', [ManagersBuildingsController::class, 'delete']); // delete managers-buildings records

// User API
Route::post('/addusers', [UserController::class, 'add']); // add new user
Route::post('/login', [LoginController::class, 'login']); // lohin post method for user to make sure record exists

