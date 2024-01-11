<?php

namespace App\Http\Controllers\FeatureSection;

use App\Http\Controllers\Controller;
use App\Models\FeatureSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FeatureSectionAdd extends Controller
{
    // public function FeatureSectionIndex() {

    //     // $feature1 = FeatureSection::find(1);
    //     // View::share("feature1",$feature1);
    //     // return view('feature_section.feature_add');

    // }

    public function FeatureSectionAddPost(Request $request)
    {

        $request->validate([
            'feature_title1' => 'required|max:255',
            'feature_content1' => 'required|max:255',
            'feature_title2' => 'required|max:255',
            'feature_content2' => 'required|max:255',
            'feature_title3' => 'required|max:255',
            'feature_content3' => 'required|max:255',
            'feature_title4' => 'required|max:255',
            'feature_content4' => 'required|max:255',
        ]);

        $features = new FeatureSection();
        $features->feature_title1 = $request->feature_title1;
        $features->feature_content1 = $request->feature_content1;
        $features->feature_title2 = $request->feature_title2;
        $features->feature_content2 = $request->feature_content2;
        $features->feature_title3 = $request->feature_title3;
        $features->feature_content3 = $request->feature_content3;
        $features->feature_title4 = $request->feature_title4;
        $features->feature_content4 = $request->feature_content4;

        return redirect()->back()->with($features->save() ? 'success' : 'error', true);

    }
}
