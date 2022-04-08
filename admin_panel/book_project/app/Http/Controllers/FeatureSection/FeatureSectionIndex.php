<?php

namespace App\Http\Controllers\FeatureSection;

use App\Http\Controllers\Controller;
use App\Models\FeatureSection;
use Illuminate\Http\Request;

class FeatureSectionIndex extends Controller
{
    public function FeatureSectionIndex() {
        $features = FeatureSection::all();
        return view('feature_section.feature_list', compact('features'));
    }
}