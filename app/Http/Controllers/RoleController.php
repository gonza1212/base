<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    /**
     * Devuelve la vista con todos los roles
     */
    public function index()
    {
        return view('roles.index', [
            'roles' => Role::all(),
        ]);
    }

    /**
     * Store User
     */
    public function store(RoleStoreRequest $request)
    {
        Role::create($request->validated());
        return redirect()->route('role.index');
    }
    
    /**
     * Devuelve la vista y el role a editar
     */
    public function edit(Role $role) {
        return view('roles.edit', [
            'role' => $role,
        ]);
    }

    /**
     * Asigna un role a un user
     */
    public function assignRole(Request $request)
    {
        $user = User::find($request->user_id);
        $user->roles()->sync($request->roles);
        return redirect()->route('roles.index')->with('success', 'Roles asignados correctamente');
    }
}
