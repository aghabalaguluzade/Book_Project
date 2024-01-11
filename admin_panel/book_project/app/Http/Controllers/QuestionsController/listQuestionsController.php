<?php

namespace App\Http\Controllers\QuestionsController;

use App\Http\Controllers\Controller;
use App\Models\General_Questions;
use Illuminate\Support\Facades\View;

class listQuestionsController extends Controller
{
    public function listQuestions()
    {
        $questions = General_Questions::all();
        View::share('questions', $questions);

        return view('questions.questions_list');

    }
}
