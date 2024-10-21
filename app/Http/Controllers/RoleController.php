<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Inertia\Response;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        define('NUMBER_OF_ITEMS',10);
        $roles = Role::paginate(NUMBER_OF_ITEMS);
        return inertia('Roles/index',['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Roles/create');
    }

    /**
     * Store a newly created resource in storage.
     * @param App\Http\Request\RoleRequest
     */
    public function store(RoleRequest $request)
    {
        Role::create($request->validated());
        return redirect()->route('roles.index');
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
    public function edit(Role $role)
    {
        return inertia('Roles/edit',['role'=>$role]);
    }

    /**
     * @param App\Http\Request\RoleRequest
     * @param int $id
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $request, Role $role)
    {
        $role->update($request->validated());
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index');
    }
}
