<?php

namespace App\Http\Controllers\ShareController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Partners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    public function categoryShare() {
        $categories = Category::where('parent_id',0)->get();
        $partners = Partners::where('status','1')->inRandomOrder()->get();
        return view('templates.index',compact('categories','partners'));
    }

}