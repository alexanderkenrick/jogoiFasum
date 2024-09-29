<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'],
    function () {
        Route::get('/tickets', function (){
            return view('admin.tickets');
        })->name('tickets');

        Route::get('/new_ticket', function (){
            return view('admin.new_ticket');
        })->name('new_tickets');

        Route::get('/teams', function (){
            return view('admin.teams');
        })->name('teams');
    }
);

Route::get('/categories', function (){
    return view('categories');
})->name('categories');


Route::get('/members', function (){
    return view('members');
})->name('members');

Route::get('/kategori', function (){
    return view('kategori');
})->name('kategori');

Route::resource('tickets', 'App\Http\Controllers\TicketController');
Route::get('tickets/show/{id}', [App\Http\Controllers\TicketController::class, 'show'])->name('tickets.show');
Route::get('fasums', [App\Http\Controllers\FasumController::class, 'index'])->name('fasums.index');

Route::get('places/showTotalTicket', [\App\Http\Controllers\PlaceController::class, 'showTotalTicket'])->name('places.showTotalTicket');

Route::get('/kategori/{kategori}', function ($kategori = 'halte'){
    return view('kategori_halte', ['selected' => $kategori]);
})->name('kategoriSelected');
