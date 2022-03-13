<?php

namespace App\Http\Controllers\FeatureSection;

use App\Http\Controllers\Controller;
use App\Models\FeatureSection;
use Illuminate\Http\Request;

class FeatureSectionEdit extends Controller
{
    public function FeatureSectionEdit($id) {
        $features = FeatureSection::find($id);
        return view('feature_section.feature_edit', compact('features'));
    }

    public function FeatureSectionEditPost(Request $request) {
        $features = FeatureSection::find($request->id);
        if(!$features) return redirect()->route('FeatureSectionIndex')->with("not_found", true);

        $features->feature_title = $request->feature_title;
        $features->feature_content = $request->feature_content;

        return redirect()->back()->with($features->save() ? "success" : "error", true);
    }
}
