<?php

namespace App\Http\Controllers\Writers;

use App\Http\Controllers\Controller;
use App\Models\Writers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class addWritersController extends Controller
{
    public function addWritersPost(Request $request)
    {
        $request->validate([
            'writer_name' => 'required|max:255',
        ]);

        if ($request->hasFile('writer_img')) {

            $request->validate([
                'writer_img' => 'image|mimes:png,jpg,jpeg,gif,jfif,webp|max:1024',
            ]);

            $image = $request->file('writer_img');
            $directory = 'uploads/writers/';
            $img_name = Str::slug($request->writer_name).'.'.$image->getClientOriginalExtension();

            $image->move($directory, $img_name);
            $img_name = $directory.$img_name;
        }

        $writers = Writers::create([
            'writer_name' => $request->writer_name,
            'writer_about' => $request->writer_about,
            'writer_img' => $img_name ?? null,
        ]);

        return redirect()->back()->with($writers ? 'success' : 'error', true);

    }
}
