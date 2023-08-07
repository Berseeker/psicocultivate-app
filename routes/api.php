<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Events\EventController;
use App\Http\Controllers\API\Kanban\KanbanController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/list/events', [EventController::class, 'index'])->name('list.events');
Route::post('/store/events', [EventController::class, 'store'])->name('store.events');
Route::get('/list/kanban-status', [KanbanController::class, 'index'])->name('kanban.status');
Route::get('/update/kanban-event/{event}/{status}', [KanbanController::class, 'updateStatus'])->name('kanban.status');
Route::get('/delete/kanban-event/{id}', [KanbanController::class, 'delete'])->name('kanban.delete');
