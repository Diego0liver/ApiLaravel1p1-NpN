<?php

use App\Http\Controllers\ControllerItem;
use App\Http\Controllers\ControllerMesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/mesa/{id}', [ControllerMesa::class, 'show'] );
Route::get('/mesa', [ControllerMesa::class, 'index'] );
Route::post('/mesa', [ControllerMesa::class, 'store'] );
Route::put('/mesa/{id}', [ControllerMesa::class, 'update'] );
Route::delete('/mesa/{id}', [ControllerMesa::class, 'destroy'] );
//rota de add item no pivo item_mesa
Route::post('/mesa/{id}', [ControllerMesa::class, 'postItem'] );
//

//rota de exclui item do pivo item_mesa
Route::delete('/mesa/{id}', [ControllerMesa::class, 'destroyItem'] );
//

Route::get('/item/{id}', [ControllerItem::class, 'show'] );
Route::get('/item', [ControllerItem::class, 'index'] );
Route::post('/item',[ControllerItem::class, 'store']);
Route::put('/item/{id}', [ControllerItem::class, 'update']);
Route::delete('/item/{id}', [ControllerItem::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
