<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function questionPage(){
        return "Hi this is questions page";
    }

    public function createQuestion(Request $request, $category_id){
        $request->validate([
            'category_id' => 'required',
        ]);

        $createQuestion = Question::create([
            'category_id' => $request->category_id,
            'title' => $request->title
        ]);
    }




}
