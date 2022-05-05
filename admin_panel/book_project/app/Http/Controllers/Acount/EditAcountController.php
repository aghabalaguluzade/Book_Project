<?php

namespace App\Http\Controllers\Acount;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Partners;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;

class EditAcountController extends Controller
{
    public function fragmented() {
        $categories = Category::where('parent_id',0)->where('status','1')->get();
        $partners = Partners::where('status','1')->inRandomOrder()->get();
        $settings = Settings::all();
        View::share([
            'categories' => $categories,
            'partners' => $partners,
            'settings' => $settings,
        ]);
    }

    public function Acount() {
        $this->fragmented();
        return view('templates.acount.acount');
    }

    public function EditAcountIndex() {
        $this->fragmented();
        $id = Auth::user()->id;
        $users = User::find($id);
        return view('templates.acount.edit_acount', compact('users',$users));
    }

    public function EditAcountPost(Request $request) {

        $request->validate([
            'name' => 'string|max:255',
            'email' => 'email|max:255',
            'password' => [Rules\Password::defaults()]
        ]);

        
        $users = User::find(Auth::id());

        if($request->hasFile('img')) {

            $request->validate([
                'img' => 'image|mimes:png,jpg,jpeg,gif,jfif,webp|max:1024',
            ]);

            $image = $request->file('img');
            $directory = 'uploads/users/';
            $img_name = Str::slug($request->name). '.' . $image->getClientOriginalExtension();

            if(file_exists($users->img)) {
                unlink($users->img);
            }

            $image->move($directory,$img_name);
            $img_name = $directory.$img_name;
            $users->img = $img_name;
        }

        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);

        return redirect()->back()->with($users->save() ? "success" : "error",true);

    }
}
