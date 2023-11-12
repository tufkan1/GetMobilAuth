<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getMyUser(Request $request)
    {
        $user = $request->user();
        return response()->json([
            'user' => $user,
            'permissions' => $user->permissions,
        ], 200);
    }
}
