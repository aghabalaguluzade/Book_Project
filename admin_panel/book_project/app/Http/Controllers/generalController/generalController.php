<?php

namespace App\Http\Controllers\generalController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class generalController extends Controller
{

    public function index() {
        return view('index');
    }

    public function templates() {
        return view('templates.index');
    }

}
