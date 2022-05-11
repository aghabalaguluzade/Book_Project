<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogViewCount extends Model
{
    use HasFactory;
    
    protected $table = "view_count";
    protected $guarded = [];
}
