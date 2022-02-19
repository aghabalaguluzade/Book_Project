<?php

namespace App\Http\Controllers\PartnersController;

use App\Http\Controllers\Controller;
use App\Models\Partners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class listPartnerController extends Controller
{
    public function PartnersListView() {
        $partners = Partners::all();
        View::share('partners',$partners);
        return view('partners.partners_list');
    }
}
