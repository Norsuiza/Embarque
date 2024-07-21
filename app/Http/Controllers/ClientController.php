<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
        return view('welcome', compact('clients'));
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
    public function show(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }

    public function getClients($idProducer)
    {
        $clients = Client::query()
            ->join('shipments', 'clients.id', '=', 'shipments.client_id')
            ->where('shipments.producer_id', $idProducer)
            ->select('clients.id', 'clients.name') // Selecciona solo los campos necesarios
            ->distinct()
            ->get();

        return response()->json($clients);
    }
}
