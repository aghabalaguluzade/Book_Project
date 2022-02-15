<?php

namespace App\Http\Controllers\SettingsController;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LogoController extends Controller
{
    public function index() {
        $data = Settings::find(1);
        View::share('data',$data);
        return view('settings.settings_logo');
    }

    public function Update(Request $request) {
        $validated = $request->validate([
            'logo' => 'image|mimes:png,jpg|max:1024',
            'favicon' => 'image|mimes:png,jpg|max:1024'
        ]);

        $data = Settings::find(1);

        if($request->hasFile('logo')) {
            $image = $request->file('logo');
            $directory = 'uploads/logo/';
            $img_name = 'logo.' . $image->getClientOriginalExtension();
            
            if(file_exists($data->logo)) {
                unlink($data->logo);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $data->logo = $img_name;
        }

        if($request->hasFile('favicon')) {
            $image = $request->file('favicon');
            $directory = 'uploads/logo/';
            $img_name = 'favicon.' . $image->getClientOriginalExtension();
            
            if(file_exists($data->favicon)) {
                unlink($data->favicon);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $data->favicon = $img_name;
        }

        return redirect()->back()->with($data->save() ? "success" : "error", true);

    }
}
