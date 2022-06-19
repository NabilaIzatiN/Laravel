<?php
use App\Http\Controllers\Api\GroupsController;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\homeController;
use Illuminate\Support\Facades\Route;

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

Route::get('', [homeController::class, 'index']);
Route::resources([
    'friends' => homeController::class,
    'groups' => GroupsController::class,
]);
