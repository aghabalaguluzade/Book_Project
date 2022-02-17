<?php

namespace App\Http\Controllers\SettingsController;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SocialController extends Controller
{

    public function index() {

        $data = Settings::find(1);
        View::share("data", $data);
        return view('settings/settings_social');

    }

    public function Update(Request $request) {

        $validated = $request->validate([
            'social_instagram' => 'required|url|max:255',
            'social_facebook' => 'required|url|max:255',
            'social_twitter' => 'required|url|max:255'
        ]);

        $data = Settings::find(1);
        $data->social_instagram = $request->social_instagram;
        $data->social_facebook = $request->social_facebook;
        $data->social_twitter = $request->social_twitter;

        return redirect()->back()->with($data->save() ? "success" : "error", true);
    }

}
