<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Client::all();
        return view('clientes.index', compact('clientes'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("clientes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        $datos = $request->input();
        $cliente= new Client($datos);
        session()->flash("status","Creación del cliente $cliente->nombre");
        $cliente->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view("clientes.edit", compact("cliente"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $cliente)
    {
        $datos = $request->input();
        $cliente-> update($datos); 
        session()->flash("status","Actualización del cliente $cliente->nombre");
        return redirect()->route('clientes.index');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $cliente)
    {
        $cliente->delete();
        session()->flash("status","Eliminación del cliente $cliente->nombre");
        return redirect()->route('clientes.index');
    }
}
