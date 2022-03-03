<?php

namespace App\Http\Controllers\CategoryController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryAddController extends Controller
{
    public function CategoryAddIndex() {
        return view("category.category_add");
    }
}
