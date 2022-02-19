<?php

namespace App\Http\Controllers\PartnersController;

use App\Http\Controllers\Controller;
use App\Models\Partners;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class editPartnerController extends Controller
{
    
    public function editPartnersIndex($id) {
        $data = Partners::find($id);
        if(!$data) return redirect()->back()->with("not_found", true);
        return view("partners.partners_edit", compact('data'));        
    }

    public function editPartnersPost(Request $request) {

        $request->validate([
            'title' => 'required|max:255',
            'url' => 'required|max:500',
        ]);

        $data = Partners::find($request->id);

        if(!$data) return redirect()->route('PartnersListView')->with("not_found", true);

        if($request->hasFile('img')) {

            $request->validate([
                'img' => 'required|image|mimes:png,jpg,jpeg,gif,jfif,webp|max:1024',
            ]);

            $image = $request->file('img');
            $directory = 'uploads/partners/';
            $img_name = Str::slug($request->title).'.' . $image->getClientOriginalExtension();

            if(file_exists($data->img)) {
                unlink($data->img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory . $img_name;
            $data->img = $img_name;
        }

            $data->title = $request->title;
            $data->status = $request->status;
            $data->url = $request->url;
       
            return redirect()->back()->with($data->save() ? "success" : "error", true);

    }

}
