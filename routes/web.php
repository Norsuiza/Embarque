<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ShipmentController;
use App\Models\Shipment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients/{producerId}', [ClientController::class,'getClients'])->name('getClients');
Route::get('/shipments/{clientId}/{producerId}', [ShipmentController::class,'getShipmentsForProducerClient'])->name('getShipmentsForProducerCliente');
