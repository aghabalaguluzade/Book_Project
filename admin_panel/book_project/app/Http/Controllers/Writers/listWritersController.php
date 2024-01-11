<?php

namespace App\Http\Controllers\Writers;

use App\Http\Controllers\Controller;
use App\Models\Writers;
use Illuminate\Http\Request;

class listWritersController extends Controller
{
    public function listWriters()
    {
        $writers = Writers::all();

        return view('writers.writers_list', compact('writers'));
    }

    public function viewWriters(Request $request)
    {
        $writers = Writers::find($request->id);

        return $writers ?? null;
    }
}
