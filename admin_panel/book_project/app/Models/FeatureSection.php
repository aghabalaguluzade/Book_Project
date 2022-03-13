<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureSection extends Model
{
    use HasFactory;
    protected $table = "feature_section";
    protected $guarded = [];
    public $timestamps = false;
}
