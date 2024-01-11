<?php

namespace App\Http\Controllers\UsersController;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UsersListController extends Controller
{
    public function UsersListIndex()
    {
        $users = User::all();

        return view('users.users-list', compact('users', $users));
    }

    public function UsersEditIndex($id)
    {
        $users = User::find($id);
        $roles = Role::all();
        if (! $users) {
            return redirect()->back()->with($users ?? 'not_found', true);
        }
        View::share([
            'users' => $users,
            'roles' => $roles,
        ]);

        return view('users.user-edit');
    }

    public function UsersEditPost(Request $request)
    {

        $users = User::find($request->id);
        if (! $users) {
            return redirect()->back()->with('not_found', true);
        }

        $users->roles()->attach($request->role_id);

        return redirect()->back()->with($users ? 'success' : 'error', true);
    }

    public function UsersDelete($user_id, $role_id)
    {
        $referer = isset($_SERVER['HTTP_REFERER']);
        if (! $referer) {
            return redirect()->back();
        }

        $users = User::find($user_id);
        if (! $users) {
            return redirect()->back()->with('not_found', true);
        }

        $users->roles()->detach($role_id);

        return redirect()->back()->with($users ? 'success' : 'error', true);
    }
}
