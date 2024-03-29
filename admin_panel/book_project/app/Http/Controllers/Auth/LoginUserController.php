<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Partners;
use App\Models\Settings;
use App\Models\ShopCart;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class LoginUserController extends Controller
{
    public function LoginIndex()
    {
        $categories = Category::where('parent_id', 0)->where('status', '1')->get();
        $partners = Partners::where('status', '1')->inRandomOrder()->get();
        $settings = Settings::all();
        $cards = ShopCart::where('user_id', Auth::id())->get();
        $carts = ShopCart::where('user_id', Auth::id());
        $wishlists = Wishlist::latest('created_at')->get();
        View::share([
            'categories' => $categories,
            'partners' => $partners,
            'settings' => $settings,
            'cards' => $cards,
            'carts' => $carts,
            'wishlists' => $wishlists,
        ]);

        return view('templates.login');
    }

    public function LoginUserController(Request $request)
    {

        $request->validate([
            'email' => 'required|max:255|email:rfc,dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only(['email', 'password'], $request->remember_token))) {
            if ($request->remember_token) {
                setcookie('login_email', $request->email, time() + 60 * 60 * 24 * 100);
                setcookie('login_password', $request->password, time() + 60 * 60 * 24 * 100);
            } else {
                setcookie('login_email', $request->email, 100);
                setcookie('login_password', $request->password, 100);
            }

            $request->session()->regenerate();

            return redirect()->intended('/ana-səhifə');
        }

        return back()->withErrors([
            'email' => 'Daxil olunan email səhvdir.',
            'password' => 'Daxil olunan şifrə səhvdir',
        ])->onlyInput('email', 'password');
    }
}
