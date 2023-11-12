<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $role = Role::create($request->except(['_method', '_token']));

        $permissions = $request->input('permissions');
        if($permissions){
            foreach($permissions as $permission){
                $role->permissions()->attach($permission);
            }
        }

        return redirect()->route('roles.index');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $role->update($request->all());

        $permissions = $request->input('permissions');

        $role->permissions()->detach();

        if($permissions){
            foreach($permissions as $permission){
                $role->permissions()->attach($permission);
            }
        }

        return redirect()->route('roles.index');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index');
    }

    public function listPermissions(){
        $permissions = Permission::all();
        return view('roles.listPermissions', compact('permissions'));
    }

    public function addPermissions(){
        return view('roles.addPermissions');
    }

    public function addPermissionsPost(Request $request){
        $permission = Permission::create($request->except(['_method', '_token']));
        return redirect()->route('permissions.list');
    }
}
