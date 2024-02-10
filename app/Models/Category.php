<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function questions(){
        $this->hasMany(Question::class);
    }

    public function submissionAnswers(){
        $this->hasMany(SubmissionAnswer::class);
    }
}
