<?php

namespace App\Http\Controllers\CategoryController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryListController extends Controller
{
    public function CategoryListIndex() {
        $categories = Category::all();
        View::share('categories',$categories);
        return view('category.category_list');
    }

    public function CategoryListStatus(Request $request) {
        $category = Category::find($request->id);
        if(!$category) return response()->json(['status'=>false]);

        $sub_categories = Category::where('parent_id',$request->id)->get();

        ///Üst Kateqoriya
        if($category->parent_id != 0) {
            $parent_id = Category::find($category->parent_id);
            if(!$parent_id) return response()->json(['status'=>false]);
            if($parent_id->status == '0') {
                return response()->json([
                    'status'=>true,
                    'parent_check' => false
            ]);
            }
        }

        $category->status = $category->status == '1' ? '0' : '1';
        $sub_category_count = 0;


        /// Alt Kateqoriya
        if($category->status == '0' && count($sub_categories) > 0) {
            foreach($sub_categories as $sub_category) {
                $sub_category->status = '0';
                $sub_category_count = $sub_category->save() ? $sub_category_count + 1 : 0;
            }
        }else {
            $sub_categories = [];
        }
        
        return response()->json([
            'status'=> ($category->save() && $sub_category_count == count($sub_categories)) ? true : false
        ]);
    }
}
