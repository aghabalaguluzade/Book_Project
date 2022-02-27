<?php

namespace App\Http\Controllers\QuestionsController;

use App\Http\Controllers\Controller;
use App\Models\General_Questions;
use Illuminate\Http\Request;

class editQuestionsController extends Controller
{
    public function editQuestionsIndex($id) {
        $data = General_Questions::find($id);
        if(!$data) return redirect()->back()->with("not_found", true); 
        return view('questions.questions_edit', compact('data'));
    }

    public function editQuestionsPost(Request $request) {

        $data = General_Questions::find($request->id);

        if(!$data) return redirect()->route('listQuestions')->with("not_found", true);

        $data->question_title = $request->question_title;
        $data->question_answer =  $request->question_answer;

        return redirect()->back()->with($data->save() ? "success" : "error", true);

    }

    public function questionDelete($id) {

        $referer = isset($_SERVER["HTTP_REFERER"]);
        if(!$referer) return redirect()->back();

        $data = General_Questions::find($id);

        return redirect()->back()->with($data->delete() ? "success" : "error", true);

    }
}
