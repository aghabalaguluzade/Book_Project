<?php

namespace App\Http\Controllers\FeatureSection;

use App\Http\Controllers\Controller;
use App\Models\FeatureSection;
use Illuminate\Http\Request;

class FeatureSectionAdd extends Controller
{
    public function FeatureSectionAdd() {
        return view('feature_section.feature_add');
    }

    public function FeatureSectionAddPost(Request $request) {
        
        $request->validate([
            'feature_title' => 'required|max:255',
            'feature_content' => 'required|max:255'
        ]);

        $data = FeatureSection::create([
            'feature_title' => $request->feature_title,
            'feature_content' => $request->feature_content
        ]);

        return redirect()->back()->with($data ? "success" : "error", true);

    }
}
