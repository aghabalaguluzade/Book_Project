<?php

namespace App\Http\Controllers\SettingsController;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SeoController extends Controller
{
    public function index() {
        $settings = Settings::all();
        View::share("settings",$settings);
        return view('settings.settings_seo');
    }

    public function update(Request $request) {
        $validated = $request->validate([
            'seo_title' => 'required|max:255',
            'seo_description' => 'required|max:255',
            'seo_keywords' => 'required'
        ]);

        $settings = Settings::find(1);
        $settings->seo_title = $request->seo_title;
        $settings->seo_description = $request->seo_description;
        $settings->seo_keywords = $request->seo_keywords;
        
        return redirect()->back()->with($settings->save() ? "success" : "error", true);
    }
}
