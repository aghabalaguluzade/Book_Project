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

    public function getSubCategory($id) {
        // return count(Category::where("parent_id",$id)->get()) > 0 ? Category::where("parent_id",$id)->get() : null;
        return Category::where("parent_id",$id)->get();
    }

    public function children() {
        return $this->hasMany(Category::class,'parent_id')->where('status','1');
    }

    public function scopeActive($query) {
        $query->where("status",'1');
    }

}
