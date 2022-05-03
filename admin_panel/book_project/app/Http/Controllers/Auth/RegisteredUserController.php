<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    public function RegisteredUserController(Request $request) {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()]
        ]);

        if($request->hasFile('img')) {

            $request->validate([
                'img' => 'image|mimes:png,jpg,jpeg,gif,jfif,webp|max:1024',
            ]);

            $image = $request->file('img');
            $directory = 'uploads/users/';
            $img_name = Str::slug($request->name). '.' . $image->getClientOriginalExtension();

            $image->move($directory,$img_name);
            $img_name = $directory.$img_name;

        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'img' => $img_name ?? null
        ]);

        Auth::login($user);

        return redirect()->back();

    }
}
