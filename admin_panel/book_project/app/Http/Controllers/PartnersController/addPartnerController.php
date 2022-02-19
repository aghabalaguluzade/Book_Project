<?php

namespace App\Http\Controllers\PartnersController;

use App\Http\Controllers\Controller;
use App\Models\Partners;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class addPartnerController extends Controller
{
    
    public function addPartnersIndex() {
        return view('partners.partners_add');
    }

    public function addPartnersPost(Request $request) {
        
        $request->validate([
            'title' => 'required|max:255',
            'url' => 'required|max:500',
            'img' => 'required|image|mimes:png,jpg,jpeg,gif,jfif,webp|max:1024',
        ]);

        $image = $request->file('img');
        $directory = 'uploads/partners/';
        $img_name = Str::slug($request->title).'.' . $image->getClientOriginalExtension();

        $image->move($directory, $img_name);
        $img_name = $directory . $img_name;
        
        $data = Partners::create([
            "title"=> $request->title,
            "url"=> $request->url,
            "img"=> $img_name,
        ]);

        return redirect()->back()->with($data ? "success" : "error", true);

    }

}
