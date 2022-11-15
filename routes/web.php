<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ClientController;



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


Route::get('/services', [DeliveryController::class, 'Services'])->name('services');

Route::get('/contacts', [DeliveryController::class, 'Contacts'])->name('contacts');

Route::get('/acceuil', [DeliveryController::class, 'Acceuil'])->name('acceuil');


Route::post('/chercher/commandes/', [DeliveryController::class, 'CheckDelivery'])->name('getDeliveryList');

Route::group(['prefix' => 'admin'], function () {

    Route::get('/create-client', [ClientController::class, 'Home'])->name('create-client');

    Route::post('/save-client', [ClientController::class, 'SaveClient'])->name('save-client');
    Route::get('/update-client', [ClientController::class, 'updateClient'])->name('update-client');
    Route::get('/findByIdClient/{id}', [ClientController::class, 'getClientById'])->name('get-client');






    Route::get('/create-delivery', [AdminController::class, 'createDeliveryView'])->name('create-delivery');
    Route::post('/save_delivery', [AdminController::class, 'store'])->name('save-delivery');
    Route::get('/list-delivery', [AdminController::class, 'deliveryList'])->name('list-delivery');
    Route::get('/findByIdDelivery/{id}', [AdminController::class, 'getDeliveryByCode'])->name('get-delivery');
    Route::post('/update_delivery', [AdminController::class, 'updateDelivery'])->name('update-delivery');


    /*
        Route::get('/affiche_delivery/', [AdminController::class, 'display'])->name('display-projet');
        Route::post('/save_projet', [AdminController::class, 'store'])->name('save-projet');

        Route::post('/save_projet_update', [AdminController::class, 'updateProjet'])->name('save-projet_update'); */
}
);
Route::get('/', function () {
    return view('Clients.acceuil');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
