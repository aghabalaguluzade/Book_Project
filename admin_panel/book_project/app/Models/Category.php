<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "category";
    protected $guarded = [];

    public function ParentId($id) {
        
        $category = Category::where([
            'id' => $id
        ])->first();
        return $category ? $category->category_name : "--";
    }
}
