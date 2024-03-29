<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'review';

    protected $guarded = [];

    public function ReviewBooks($id)
    {
        return Books::find($id) ?? null;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
