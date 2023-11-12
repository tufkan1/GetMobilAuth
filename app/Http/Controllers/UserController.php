<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('department')->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $departments = Department::all();
        $roles = Role::all();
        return view('users.create', compact('departments', 'roles'));
    }

    public function store(Request $request)
    {

        $input = $request->except(['_method', '_token']);
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        $departments = Department::all();
        $roles = Role::all();

        return view('users.edit', compact('user', 'roles', 'departments'));
    }

    public function update(Request $request, User $user)
    {
        $input = $request->except(['_method', '_token']);
        $input['password'] = bcrypt($input['password']);
        $user->update($input);

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
