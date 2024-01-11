<?php

namespace App\Http\Controllers\BannerController;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerControllerEdit extends Controller
{
    public function BannerEditView(Request $request)
    {
        $banners = Banner::find($request->id);

        return $banners ?? null;
    }

    public function BannerEdit(Request $request)
    {
        $request->validate([
            'banner_name' => 'required|max:255',
            'banner_title' => 'required|max:255',
            'banner_content' => 'required|max:255',
            'banner_link' => 'required|url|max:500',
            'banner_img' => 'image|mimes:png,jpg,jpeg,gif,jfif,webp|max:1024',
        ]);

        $banner = Banner::find($request->id);
        if (! $banner) {
            return redirect()->back();
        }

        $image = $request->file('banner_img');
        $directory = 'uploads/banners/';
        $img_name = Str::slug($request->name).'.'.$image->getClientOriginalExtension();

        if (file_exists($banner->banner_img)) {
            unlink($banner->banner_img);
        }

        $image->move($directory, $img_name);
        $img_name = $directory.$img_name;
        $banner->banner_img = $img_name;

        $banner->banner_name = $request->banner_name;
        $banner->banner_title = $request->banner_title;
        $banner->banner_content = $request->banner_content;
        $banner->banner_link = $request->banner_link;

        return redirect()->back()->with($banner->save() ? 'success' : 'error', true);

    }
}
