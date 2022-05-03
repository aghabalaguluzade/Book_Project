<?php

namespace App\Http\Controllers\BannerController;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerControllerAdd extends Controller
{
    public function BannerAddPost(Request $request) {
        $request->validate([
            'banner_name' => 'required|max:255',
            'banner_title' => 'required|max:255',
            'banner_content' => 'required|max:255',
            'banner_link' => 'required|url|max:500',
            'banner_img' => 'required|image|mimes:png,jpg,jpeg,gif,jfif,webp|max:1024'
        ]);

        $image = $request->file('banner_img');
        $directory = 'uploads/banners/';
        $img_name = Str::slug($request->banner_name).'.' . $image->getClientOriginalExtension();
        
        $image->move($directory,$img_name);
        $img_name = $directory . $img_name;

        $banners = Banner::create([
            'banner_name' => $request->banner_name,
            'banner_title' => $request->banner_title,
            'banner_content' => $request->banner_content,
            'banner_link' => $request->banner_link,
            'banner_img' => $img_name
        ]);

        return redirect()->back()->with($banners ? "success" : "error", true);

    }
}
