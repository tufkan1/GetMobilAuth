<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect(route('departments.index'));
});

Route::resource('roles', RoleController::class);

Route::group(["prefix" => "permissions"], function (){
    Route::get("/", [RoleController::class, "listPermissions"])->name("permissions.list");
    Route::get("/add", [RoleController::class, "addPermissions"])->name("permissions.add");
    Route::post("/add", [RoleController::class, "addPermissionsPost"])->name("permissions.post");
});

Route::resource('departments', DepartmentController::class);
Route::resource('users', UserController::class);

