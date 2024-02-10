<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category(){
        $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function submissionAnswers(){
        $this->hasMany(SubmissionAnswer::class);
    }

}
