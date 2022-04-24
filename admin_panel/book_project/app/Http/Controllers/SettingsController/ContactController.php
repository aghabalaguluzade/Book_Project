<?php

namespace App\Http\Controllers\SettingsController;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ContactController extends Controller
{
    public function index() {

        $data = Settings::find(1);
        View::share("data",$data);
        return view('settings.settings_contact');
        
    }

    public function Update(Request $request) {

        $validated = $request->validate([
            'contact_address' => 'required|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:50',
            'map_name' => 'max:255',
            'about_us' => 'required'
        ]);

        $data = Settings::find(1);
        $data->contact_address = $request->contact_address;
        $data->map_name = $request->map_name;
        $data->contact_email = $request->contact_email;
        $data->contact_phone = $request->contact_phone;
        $data->about_us = $request->about_us;
       
        return redirect()->back()->with($data->save() ? "success" : "error", true);

    }
}
