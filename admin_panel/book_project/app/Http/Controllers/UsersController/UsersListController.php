<?php

namespace App\Http\Controllers\UsersController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersListController extends Controller
{
    public function UsersListIndex() {
        $users = User::select('img','name','email','password')->get();
        return view('users.users-list',compact('users',$users));
    }
}
