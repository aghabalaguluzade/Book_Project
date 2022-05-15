<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $table = "wishlist";
    protected $guarded = [];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function books() {
        return $this->belongsTo(Books::class);
    }
}
