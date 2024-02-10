<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;
use App\Models\SubmissionAnswer;

class SubmissionController extends Controller
{
    // Below functions for submissions

    public function submissionPage(){
        return "hi this is submission page";
    }

    public function createSubmission(Request $request, $id){
        $request->validate([
            'invite_id' => 'required'
        ]);

        $createSubmissions = Submission::create([
            'invite_id' => $id,
            'company_name' => $request->company_name
        ]);
    }

    // Below functions are for submission answers

    public function submissionAnswerPage(){
        return "Hi this is submission answer page";
    }

    // send all id's in below with ajax jquery script

    public function createSubmissionAnswer(Request $request){
        $request->validate([
            'submission_id' => $request->submission_id,
            'category_id' => $request->category_id,
            'question_id' => $request->question_id
        ]);

        $createSubmissionAnswer = SubmissionAnswer::create([
            'submission_id' => $request->submission_id,
            'category_id' => $request->category_id,
            'question_id' => $request->question_id,
            'positive_answer' => $request->positive_answer,
            'negative_answer' => $request->negative_answer
        ]);


    }




}
