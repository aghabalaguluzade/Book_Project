<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table = "books";
    protected $guarded = [];

    public function Category($id) {
        return Category::find($id) ?? null;
    }

    public function Writers($id) {
        return Writers::find($id) ?? null;
    }

}
