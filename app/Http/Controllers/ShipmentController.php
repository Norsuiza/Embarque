<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shipments = Shipment::get();
        return response()->json($shipments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Shipment $shipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shipment $shipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shipment $shipment)
    {
        //
    }

    public function getShipmentByClient ($clientId) {

    }
    
    
    public function getShipmentsForProducerClient($clientId, $producerId){
    
    $shipments = Shipment::join('clients', 'shipments.client_id', '=', 'clients.id')
    ->where('clients.id', $clientId)
    ->where('shipments.producer_id', $producerId)
    ->select('shipments.*')
    ->get();

    return response()->json($shipments); }
    
}
