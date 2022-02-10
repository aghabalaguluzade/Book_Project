<?php

namespace App\Http\Controllers\SettingsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function index() {
        return view('settings.settings_logo');
    }
}
