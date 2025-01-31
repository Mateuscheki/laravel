<?php

namespace App\Http\Controllers;

use App\Models\client;
use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Buscar os clientes no banco do dados
        $clients = client::get();

        //dd($clients);
        // Mostrar um frontend listando os clientes
        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //buscar o cliente pelo id no banco de dados
        $client = client::find($id);

        //retorna os dados do cliente em uma view (show)
        return view('clients.show', [
            'client' => $client
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
