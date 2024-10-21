<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criador;
use Inertia\Response;
use App\Http\Requests\CriadorRequest;

class CriadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        define('NUMBER_OF_ITEMS',10);
        $criadores = Criador::paginate(NUMBER_OF_ITEMS);
        return inertia('Criadores/index',['criadores'=>$criadores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Criadores/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CriadorRequest $request)
    {
        
        Criador::create($request->all());
        return redirect()->route('criadores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $criador = Criador::findOrFail($id);
        return inertia('Criadores/edit',['criador'=>$criador]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CriadorRequest $request, $id)
    {
        $criador = Criador::findOrFail($id);
        $criador->update($request->validated());
        return redirect()->route('criadores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
