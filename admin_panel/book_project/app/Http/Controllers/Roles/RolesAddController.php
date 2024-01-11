<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RolesAddController extends Controller
{
    public function RolesAddPost(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
        ]);

        $roles = Role::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with($roles ? 'success' : 'error', true);

    }
}
