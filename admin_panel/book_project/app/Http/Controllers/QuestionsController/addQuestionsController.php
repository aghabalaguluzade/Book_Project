<?php

namespace App\Http\Controllers\QuestionsController;

use App\Http\Controllers\Controller;
use App\Models\General_Questions;
use Illuminate\Http\Request;

class addQuestionsController extends Controller
{

    public function addQuestionsIndex() {
        return view('questions.questions_add');
    }

    public function addQuestionsPost(Request $request) {

        $request->validate([
            'question_title' => 'required|max:255',
            'question_answer' => 'required'
        ]);

        $data = General_Questions::create([
            'question_title' => $request->question_title,
            'question_answer' => $request->question_answer
        ]);

        return redirect()->back()->with($data ? "success" : "error", true);

    }

}
