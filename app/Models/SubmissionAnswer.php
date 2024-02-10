<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmissionAnswer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function submissions(){
        $this->belongsTo(Submission::class, 'submission_id', 'id');
    }

    public function questions(){
        $this->belongsTo(Question::class, 'question_id', 'id');
    }

    public function categories(){
        $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
