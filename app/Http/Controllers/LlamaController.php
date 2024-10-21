<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Llama;
use Inertia\Response;
// use App\Http\Requests\RoleRequest;

class LlamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        define('NUMBER_OF_ITEMS',10);
        $llamas = Llama::paginate(NUMBER_OF_ITEMS);
        return inertia('Llamas/index',['llamas'=>$llamas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Llamas/create');
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
        //
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
