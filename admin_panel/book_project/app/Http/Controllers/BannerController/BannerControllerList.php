<?php

namespace App\Http\Controllers\BannerController;

use App\Http\Controllers\Controller;
use App\Models\Banner;

class BannerControllerList extends Controller
{
    public function BannerList()
    {
        $banners = Banner::all();

        return view('banners.banners_list', compact('banners'));
    }
}
