<?php

namespace App\Http\Controllers\CategoryController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class CategoryAddController extends Controller
{
    public function CategoryAddIndex()
    {
        $categories = Category::where('parent_id', 0)->get();
        View::share('categories', $categories);

        return view('category.category_add');
    }

    public function CategoryAddPost(Request $request)
    {
        $request->validate([
            'category_name' => 'required|max:250',
        ]);

        $data = Category::create([
            'category_name' => $request->category_name,
            'parent_id' => $request->parent_id ?? 0,
            'slug' => Str::slug($request->category_name),
        ]);

        return redirect()->back()->with($data ? 'success' : 'error', true);

    }
}
