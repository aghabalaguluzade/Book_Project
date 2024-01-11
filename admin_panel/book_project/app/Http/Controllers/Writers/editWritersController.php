<?php

namespace App\Http\Controllers\Writers;

use App\Http\Controllers\Controller;
use App\Models\Writers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class editWritersController extends Controller
{
    public function editWriters(Request $request)
    {

        $writers = Writers::find($request->id);
        if (! $writers) {
            return redirect()->back();
        }

        $request->validate([
            'writer_name' => 'required|max:255',
            'writer_img' => 'image|mimes:png,jpg,jpeg,gif,jfif,webp|max:1024',
        ]);

        if ($request->hasFile('writer_img')) {

            $image = $request->file('writer_img');
            $directory = 'uploads/writers/';
            $img_name = Str::slug($request->writer_name).'.'.$image->getClientOriginalExtension();

            if (file_exists($writers->writer_img)) {
                unlink($writers->writer_img);
            }

            $image->move($directory, $img_name);
            $img_name = $directory.$img_name;
            $writers->writer_img = $img_name;

        }

        $writers->writer_name = $request->writer_name;
        $writers->writer_status = $request->writer_status;
        $writers->writer_about = $request->writer_about;

        return redirect()->back()->with($writers->save() ? 'success' : 'error', true);

    }

    public function deleteWriters($id)
    {

        $referer = isset($_SERVER['HTTP_REFERER']);
        if (! $referer) {
            return redirect()->back();
        }

        $writers = Writers::find($id);

        if ($writers) {
            if (file_exists($writers->writer_img)) {
                unlink($writers->writer_img);
            }

            return redirect()->back()->with($writers->delete() ? 'success' : 'error', true);
        }

        return redirect()->back()->with('not_found', true);

    }
}
