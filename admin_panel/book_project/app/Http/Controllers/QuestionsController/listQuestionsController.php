<?php

namespace App\Http\Controllers\QuestionsController;

use App\Http\Controllers\Controller;
use App\Models\General_Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class listQuestionsController extends Controller
{
    
    public function listQuestions() {

        $questions = General_Questions::all();
        View::share('questions', $questions);
        return view('questions.questions_list');

    }

    public function questionDelete($id) {

        $referer = isset($_SERVER["HTTP_REFERER"]);
        if(!$referer) return redirect()->back();

        $data = General_Questions::find($id);

        return redirect()->back()->with($data->delete() ? "success" : "error", true);

    }

}
