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

    public function partnerDelete($id) {

        $referer = isset($_SERVER["HTTP_REFERER"]);
        if(!$referer) return redirect()->back();

        $data = Partners::find($id);

        if($data) {
            
            if(file_exists($data->img)) {
                unlink($data->img);
            }
            return redirect()->back()->with($data->delete() ? "success" : "error", true);

        }
        return redirect()->back();
    }
}
