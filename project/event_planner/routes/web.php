<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
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
    return 'Welcome to the Event Planner!';
});

Route::get('/events', [EventController::class, 'index']);

Route::group(['prefix' => 'events'], function () {
    Route::get('/', [EventController::class, 'index'])->name('events.index'); // List events
    Route::get('/{id}', [EventController::class, 'show'])->name('events.show'); // Show event details
    Route::get('/create', [EventController::class, 'create'])->name('events.create'); // Create event form
    Route::post('/', [EventController::class, 'store'])->name('events.store'); // Store new event
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Welcome to the Admin Dashboard!';
    });
});

Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');

