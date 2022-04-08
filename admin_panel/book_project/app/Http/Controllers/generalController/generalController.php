<?php

namespace App\Http\Controllers\generalController;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class generalController extends Controller
{

    public function index() {
        return view('index');
    }

    public function templates() {
        return view('templates.index');
    }

}
