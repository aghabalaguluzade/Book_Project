<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Partners;
use App\Models\Settings;
use App\Models\ShopCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class LoginUserController extends Controller
{
    public function LoginIndex() {
        $categories = Category::where('parent_id',0)->where('status','1')->get();
        $partners = Partners::where('status','1')->inRandomOrder()->get();
        $settings = Settings::all();
        $cards = ShopCart::where('user_id',Auth::id())->get();
        $carts = ShopCart::find(Auth::id());
        View::share([
            'categories' => $categories,
            'partners' => $partners,
            'settings' => $settings,
            'cards' => $cards,
            'carts' => $carts
        ]);
        return view('templates.login');
    }

    public function LoginUserController(Request $request) {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only(['email', 'password']),$request->remember_token)) {
            $request->session()->regenerate();
            return redirect()->intended('/ana-səhifə');   
        }
        return back()->withErrors([
            'email' => 'Daxil olunan email səhvdir.',
            'password' => "Daxil olunan şifrə səhvdir"
        ])->onlyInput('email','password');
    }
}
