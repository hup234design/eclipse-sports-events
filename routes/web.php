<?php

use App\Http\Controllers\EventsController;
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


Route::controller(EventsController::class)
    ->prefix('events')
    ->group(function () {
        Route::get(
            'types/{typeSlug}/{categorySlug}', 'eventCategory')->name('events.category');
        Route::get('types/{typeSlug}', 'eventType')->name('events.type');
        Route::get('past', 'pastEvents')->name('events.past');
        Route::get('{slug}', 'event')->name('events.event');
        Route::get('/', 'index')->name('events.index');
    });


include base_path() . '/vendor/hup234design/filament-cms/routes/web.php';
